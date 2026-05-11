-- Create database for M7 Technology Solutions contact messages
CREATE DATABASE IF NOT EXISTS m7_website;
USE m7_website;

-- Create contact_messages table
CREATE TABLE IF NOT EXISTS contact_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20),
    company VARCHAR(255),
    subject VARCHAR(255),
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status ENUM('new', 'read', 'replied', 'archived') DEFAULT 'new',
    ip_address VARCHAR(45),
    user_agent TEXT
);

-- Create index for better performance
CREATE INDEX idx_email ON contact_messages(email);
CREATE INDEX idx_created_at ON contact_messages(created_at);
CREATE INDEX idx_status ON contact_messages(status);

-- Insert sample data (optional)
INSERT INTO contact_messages (name, email, phone, company, subject, message, status) VALUES
('John Doe', 'john.doe@example.com', '+63 917 123 4567', 'Sample Company Inc.', 'product-inquiry', 'I am interested in your semiconductor products. Could you please provide more information about your dicing blades?', 'new'),
('Maria Santos', 'maria.santos@techcorp.com', '+63 917 987 6543', 'TechCorp Solutions', 'quotation', 'We need a quotation for ESD products for our cleanroom facility. Please contact us at your earliest convenience.', 'new');
