# M7 Technology Solutions Website

A professional corporate website for M7 Technology Solutions, Inc. and the M7 Group of Companies.

## Website Structure

```
/websitenim7/
├── index.php                 # Home page
├── about.php                 # About Us page
├── products.php              # Products catalog
├── contact.php               # Contact form and information
├── includes/
│   ├── header.php           # Site header with navigation
│   ├── footer.php           # Site footer
│   └── nav.php              # Navigation menu
├── companies/               # Individual company pages
│   ├── m7-technology.php    # M7 Technology Solutions
│   ├── m7-movers.php        # M7 Movers
│   ├── m7-pcis.php          # M7 PCIS School
│   ├── m7-orion.php         # M7 Orion Energy
│   └── m7-builders.php      # M7 Builders
├── assets/
│   ├── css/
│   │   └── style.css        # Main stylesheet
│   ├── js/
│   │   └── script.js        # JavaScript functionality
│   └── images/              # Image assets (to be added)
├── data/
│   └── products.php         # Product data array
├── Final Draft.pdf          # Source content document
├── Website summary.docx     # Website requirements
└── README.md               # This file
```

## Features Implemented

### ✅ Completed Features
- **Responsive Design**: Mobile-friendly layout with CSS Grid and Flexbox
- **Modern UI**: Clean, professional corporate design
- **Navigation**: Sticky header with dropdown menus
- **Home Page**: Banner carousel, company overview, featured products
- **About Page**: Company info, mission/vision, 7 Filipino values, org chart
- **Products Page**: Complete product catalog with search and filtering
- **Contact Page**: Contact form with PHP processing, office locations
- **Company Pages**: Individual pages for all 5 M7 companies
- **JavaScript Features**: Banner slider, scroll animations, mobile menu
- **PHP Structure**: Modular includes, data separation, form processing

### 🎨 Design Elements
- **Color Scheme**: Tech blue (#2563eb), dark gray, white
- **Typography**: Inter font family for modern readability
- **Icons**: Font Awesome icons throughout
- **Animations**: Scroll-based reveal animations
- **Cards**: Consistent card-based layouts

### 📱 Responsive Features
- Mobile-first design approach
- Collapsible navigation menu
- Flexible grid layouts
- Touch-friendly interface

## Content Integration

### ✅ Content from Source Documents
- **Company Information**: Names, addresses, contact details
- **7 Filipino Values**: Complete descriptions with symbols
- **Product Catalog**: Detailed product specifications from PDF
- **Mission & Vision**: M7 Technology Solutions statements
- **Organizational Chart**: Key personnel information
- **PCIS School**: Complete school description and philosophy

### 📋 Content Placeholders
Some content uses placeholders where specific details weren't available:
- Company-specific mission/vision for Movers, Orion, Builders
- Event photos and project images
- Partner logos
- Founder's message details

## Setup Instructions

### 1. Server Requirements
- PHP 7.4 or higher
- Apache/Nginx web server
- MySQL (optional for future database integration)

### 2. Installation
1. Ensure all files are in `C:\xampp\htdocs\websitenim7\`
2. Start XAMPP Apache server
3. Access website at `http://localhost/websitenim7/`

### 3. Missing Assets to Add
Create these directories and add appropriate files:

```
assets/images/
├── logo-placeholder.png     # Replace with actual M7 logo
├── banners/                 # Banner images for carousel
├── products/                # Product images
├── team/                    # Team member photos
├── offices/                 # Office location photos
└── events/                  # Event and project photos
```

### 4. Customization Options

#### Logo Integration
Replace `assets/images/logo-placeholder.png` with actual M7 logo and update header.php:
```php
<img src="assets/images/m7-logo.png" alt="M7 Technology Solutions" class="logo-img">
```

#### Banner Images
Add banner images to `assets/images/banners/` and update index.php carousel

#### Contact Form Email
Update contact.php to send actual emails:
```php
// Add PHPMailer or mail() function implementation
```

#### Database Integration (Future)
The products.php data file can be easily converted to database queries for dynamic content management.

## Technical Features

### CSS Features
- CSS Grid and Flexbox layouts
- Custom properties for consistent theming
- Smooth animations and transitions
- Print-friendly styles
- Accessibility considerations

### JavaScript Features
- Banner carousel with auto-advance
- Smooth scrolling navigation
- Mobile menu toggle
- Scroll-based animations
- Product search and filtering
- Form validation
- Back-to-top button

### PHP Features
- Modular include system
- Form processing with validation
- Dynamic navigation highlighting
- Structured data organization
- Security considerations (XSS protection)

## Browser Support
- Chrome 60+
- Firefox 60+
- Safari 12+
- Edge 79+
- Mobile browsers (iOS Safari, Chrome Mobile)

## Performance Optimizations
- Optimized CSS and JavaScript
- Efficient image loading strategies
- Minimal external dependencies
- Clean, semantic HTML structure

## Security Features
- Input sanitization in contact form
- XSS protection with htmlspecialchars()
- Secure file structure
- No sensitive data exposure

## Future Enhancements
- Database integration for dynamic content
- Admin panel for content management
- Multi-language support
- Advanced search functionality
- User authentication system
- Blog/news section
- Online quotation system

## Support
For technical support or customization requests, contact the M7 Technology Solutions team.

---

**Built with:** HTML5, CSS3, JavaScript, PHP
**Framework:** Custom (No CMS)
**Design:** Modern, responsive, professional corporate website
