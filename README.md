# SkyTale Electronics - E-commerce Website

A comprehensive, full-featured electronics and mobile accessories e-commerce website built with HTML, CSS, JavaScript, Tailwind CSS, Bootstrap, PHP, and MySQL.

## 🚀 Features

### 🏠 **Home Page**
- Hero banner with gradient background
- Featured products carousel
- Promotional cards with icons
- Newsletter subscription
- Fully responsive design

### 🛍️ **Products Page**
- Advanced filtering by category, brand, price range
- Sorting options (price, name, date)
- Search functionality
- Pagination
- Hover effects and animations
- Product grid with responsive layout

### 📱 **Product Details**
- Image gallery with zoom-on-hover
- Product specifications table
- Related products section
- Add to cart and wishlist functionality
- Tabbed content (Description, Specs, Reviews)

### 🛒 **Shopping Cart**
- Dynamic cart management
- Quantity controls
- Price calculations
- Promo code system
- Real-time updates

### 💳 **Checkout Process**
- Multi-step checkout
- Billing information form
- Payment method selection (Credit Card, PayPal, Apple Pay)
- Order summary
- Security badges

### 📞 **Contact Page**
- Contact form with PHP backend
- Company information
- Interactive map placeholder
- FAQ section
- Message handling system

### 👥 **About Us**
- Company story and mission
- Team member profiles
- Company values
- Why choose us section
- Call-to-action

### ❓ **FAQ Page**
- Collapsible questions
- Category filtering
- Search functionality
- Popular topics section

### 📝 **Blog/News**
- Featured post layout
- Article grid
- Category browsing
- Newsletter subscription
- Author information

### 🔐 **User Authentication**
- User registration and login
- Profile management
- Order history
- Security settings
- Session management

### ❤️ **Wishlist**
- Save favorite products
- Remove items
- Add to cart from wishlist
- Persistent storage

### 👨‍💼 **Admin Panel**
- Dashboard with statistics
- Product management
- Order management
- User management
- Message handling
- Blog post management

## 🎨 **Design Features**

### 🌙 **Dark/Light Mode**
- Toggle between themes
- Persistent theme selection
- Smooth transitions
- System preference detection

### 📱 **Responsive Design**
- Mobile-first approach
- Tablet and desktop optimized
- Flexible grid layouts
- Touch-friendly interactions

### ✨ **Animations & Effects**
- Smooth scrolling
- Hover animations
- Loading states
- Transition effects
- Interactive elements

### 🎯 **SEO Optimized**
- Semantic HTML structure
- Meta tags and descriptions
- Clean URL structure
- Fast loading times

## 🛠️ **Technology Stack**

- **Frontend**: HTML5, CSS3, JavaScript (ES6+)
- **Styling**: Tailwind CSS, Custom CSS
- **Backend**: PHP 7.4+
- **Database**: MySQL 5.7+
- **Icons**: Font Awesome 6.4.0
- **Fonts**: Google Fonts (Inter)

## 📋 **Requirements**

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Web server (Apache/Nginx)
- Modern web browser

## 🚀 **Installation**

### 1. **Clone/Download the Project**
```bash
git clone [repository-url]
cd skytale-ecommerce
```

### 2. **Database Setup**
1. Create a MySQL database named `skytale_ecommerce`
2. Import the database schema:
```bash
mysql -u username -p skytale_ecommerce < database/schema.sql
```

### 3. **Configure Database Connection**
Edit `db.php` with your database credentials:
```php
$host = 'localhost';
$dbname = 'skytale_ecommerce';
$username = 'your_username';
$password = 'your_password';
```

### 4. **Web Server Setup**
- **XAMPP/WAMP**: Place the project in `htdocs` or `www` folder
- **Apache**: Configure virtual host
- **Nginx**: Configure server block

### 5. **File Permissions**
Ensure proper file permissions for uploads and cache directories:
```bash
chmod 755 assets/images/
chmod 644 assets/css/
chmod 644 assets/js/
```

## 📁 **Project Structure**

```
skytale-ecommerce/
├── assets/
│   ├── css/
│   │   └── style.css
│   ├── js/
│   │   └── main.js
│   └── images/
├── admin/
│   └── index.php
├── database/
│   └── schema.sql
├── index.php
├── products.php
├── product-details.php
├── cart.php
├── checkout.php
├── contact.php
├── about.php
├── faq.php
├── blog.php
├── login.php
├── register.php
├── profile.php
├── wishlist.php
├── logout.php
├── db.php
└── README.md
```

## 🎯 **Key Features Implementation**

### **Shopping Cart System**
- LocalStorage for cart persistence
- Real-time price calculations
- Quantity management
- Remove/add functionality

### **User Authentication**
- Secure password hashing
- Session management
- Role-based access control
- Profile management

### **Product Management**
- Dynamic product loading
- Image gallery with zoom
- Specifications display
- Related products

### **Order Processing**
- Multi-step checkout
- Payment integration (dummy)
- Order tracking
- Email notifications (ready for implementation)

### **Admin Dashboard**
- Statistics overview
- Content management
- User management
- Order processing

## 🔧 **Customization**

### **Adding New Products**
1. Access admin panel
2. Navigate to Products section
3. Add product details, images, and specifications

### **Modifying Styles**
- Edit `assets/css/style.css` for custom styling
- Tailwind classes can be modified in HTML files
- Dark mode variables in CSS root

### **Database Modifications**
- Update `database/schema.sql` for schema changes
- Modify `db.php` for connection settings

## 🚀 **Deployment**

### **Production Setup**
1. Configure production database
2. Update `db.php` with production credentials
3. Set proper file permissions
4. Configure SSL certificate
5. Set up email server for notifications

### **Security Considerations**
- Use HTTPS in production
- Implement CSRF protection
- Validate all user inputs
- Use prepared statements for database queries
- Regular security updates

## 📱 **Browser Support**

- Chrome 90+
- Firefox 88+
- Safari 14+
- Edge 90+
- Mobile browsers (iOS Safari, Chrome Mobile)

## 🤝 **Contributing**

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Test thoroughly
5. Submit a pull request

## 📄 **License**

This project is open source and available under the [MIT License](LICENSE).

## 🆘 **Support**

For support and questions:
- Create an issue in the repository
- Contact: https://builtbyamos.great-site.net
- Documentation: [Project Wiki](wiki-url)

## 🔄 **Updates & Maintenance**

- Regular security updates
- Performance optimizations
- New feature additions
- Bug fixes and improvements

---

**SkyTale Electronics** - Your trusted partner for premium electronics and mobile accessories.

Built with ❤️ using modern web technologies.

