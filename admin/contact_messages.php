<?php
// Simple admin panel to view contact messages
session_start();

// Basic authentication (you should implement proper authentication)
$admin_password = 'admin123'; // Change this to a secure password

if (!isset($_SESSION['admin_logged_in'])) {
    if (isset($_POST['password']) && $_POST['password'] === $admin_password) {
        $_SESSION['admin_logged_in'] = true;
    } else {
        // Show login form
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Admin Login - M7 Technology Solutions</title>
            <style>
                body { font-family: Arial, sans-serif; background: #f5f5f5; padding: 50px; }
                .login-form { max-width: 400px; margin: 0 auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
                .form-group { margin-bottom: 20px; }
                label { display: block; margin-bottom: 5px; font-weight: bold; }
                input[type="password"] { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; }
                button { background: #2563eb; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; }
                button:hover { background: #1d4ed8; }
            </style>
        </head>
        <body>
            <div class="login-form">
                <h2>Admin Login</h2>
                <form method="POST">
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <button type="submit">Login</button>
                </form>
            </div>
        </body>
        </html>
        <?php
        exit;
    }
}

// Logout functionality
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: contact_messages.php');
    exit;
}

// Include database configuration
include '../includes/db_config.php';

// Handle status updates
if (isset($_POST['update_status']) && isset($_POST['message_id']) && isset($_POST['status'])) {
    $messageId = (int)$_POST['message_id'];
    $status = $_POST['status'];
    updateMessageStatus($messageId, $status);
    header('Location: contact_messages.php?updated=1');
    exit;
}

// Get filter parameters
$status_filter = $_GET['status'] ?? '';
$page = (int)($_GET['page'] ?? 1);
$limit = 20;
$offset = ($page - 1) * $limit;

// Get messages
$messages = getContactMessages($limit, $offset, $status_filter ?: null);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Messages - M7 Technology Solutions Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background: #f5f5f5;
        }
        .header {
            background: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .header h1 {
            margin: 0;
            color: #1e40af;
        }
        .filters {
            background: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .filters select, .filters button {
            padding: 8px 12px;
            margin-right: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .filters button {
            background: #2563eb;
            color: white;
            cursor: pointer;
        }
        .filters button:hover {
            background: #1d4ed8;
        }
        .messages-container {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .message-item {
            border-bottom: 1px solid #eee;
            padding: 20px;
        }
        .message-item:last-child {
            border-bottom: none;
        }
        .message-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }
        .message-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 10px;
            margin-bottom: 15px;
        }
        .message-content {
            background: #f8fafc;
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 15px;
        }
        .status-badge {
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: bold;
        }
        .status-new { background: #fef3c7; color: #92400e; }
        .status-read { background: #dbeafe; color: #1e40af; }
        .status-replied { background: #d1fae5; color: #065f46; }
        .status-archived { background: #f3f4f6; color: #374151; }
        .actions {
            display: flex;
            gap: 10px;
            align-items: center;
        }
        .actions select {
            padding: 4px 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .actions button {
            padding: 4px 12px;
            background: #10b981;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .actions button:hover {
            background: #059669;
        }
        .logout {
            float: right;
            color: #ef4444;
            text-decoration: none;
        }
        .logout:hover {
            text-decoration: underline;
        }
        .no-messages {
            text-align: center;
            padding: 40px;
            color: #64748b;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Contact Messages</h1>
        <a href="?logout=1" class="logout">Logout</a>
    </div>

    <?php if (isset($_GET['updated'])): ?>
        <div style="background: #d1fae5; color: #065f46; padding: 10px; border-radius: 4px; margin-bottom: 20px;">
            Message status updated successfully!
        </div>
    <?php endif; ?>

    <div class="filters">
        <form method="GET" style="display: inline;">
            <select name="status">
                <option value="">All Messages</option>
                <option value="new" <?php echo $status_filter === 'new' ? 'selected' : ''; ?>>New</option>
                <option value="read" <?php echo $status_filter === 'read' ? 'selected' : ''; ?>>Read</option>
                <option value="replied" <?php echo $status_filter === 'replied' ? 'selected' : ''; ?>>Replied</option>
                <option value="archived" <?php echo $status_filter === 'archived' ? 'selected' : ''; ?>>Archived</option>
            </select>
            <button type="submit">Filter</button>
        </form>
    </div>

    <div class="messages-container">
        <?php if ($messages && count($messages) > 0): ?>
            <?php foreach ($messages as $message): ?>
                <div class="message-item">
                    <div class="message-header">
                        <h3>Message #<?php echo str_pad($message['id'], 6, '0', STR_PAD_LEFT); ?></h3>
                        <span class="status-badge status-<?php echo $message['status']; ?>">
                            <?php echo ucfirst($message['status']); ?>
                        </span>
                    </div>
                    
                    <div class="message-info">
                        <div><strong>Name:</strong> <?php echo htmlspecialchars($message['name']); ?></div>
                        <div><strong>Email:</strong> <a href="mailto:<?php echo htmlspecialchars($message['email']); ?>"><?php echo htmlspecialchars($message['email']); ?></a></div>
                        <div><strong>Phone:</strong> <?php echo htmlspecialchars($message['phone'] ?: 'Not provided'); ?></div>
                        <div><strong>Company:</strong> <?php echo htmlspecialchars($message['company'] ?: 'Not provided'); ?></div>
                        <div><strong>Subject:</strong> <?php echo htmlspecialchars($message['subject'] ?: 'General Inquiry'); ?></div>
                        <div><strong>Date:</strong> <?php echo date('M j, Y g:i A', strtotime($message['created_at'])); ?></div>
                    </div>
                    
                    <div class="message-content">
                        <strong>Message:</strong><br>
                        <?php echo nl2br(htmlspecialchars($message['message'])); ?>
                    </div>
                    
                    <div class="actions">
                        <form method="POST" style="display: inline;">
                            <input type="hidden" name="message_id" value="<?php echo $message['id']; ?>">
                            <select name="status">
                                <option value="new" <?php echo $message['status'] === 'new' ? 'selected' : ''; ?>>New</option>
                                <option value="read" <?php echo $message['status'] === 'read' ? 'selected' : ''; ?>>Read</option>
                                <option value="replied" <?php echo $message['status'] === 'replied' ? 'selected' : ''; ?>>Replied</option>
                                <option value="archived" <?php echo $message['status'] === 'archived' ? 'selected' : ''; ?>>Archived</option>
                            </select>
                            <button type="submit" name="update_status">Update Status</button>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="no-messages">
                <h3>No messages found</h3>
                <p>No contact messages match your current filter criteria.</p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
