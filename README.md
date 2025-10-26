<!--
SkyTale Electronics - E-commerce Website
Built with ❤️ using modern web technologies.
-->

<h1 align="center">
  SkyTale Electronics
  <br>
  <img src="https://img.shields.io/badge/PHP-7.4+-blue?style=flat-square" alt="PHP 7.4+">
  <img src="https://img.shields.io/badge/MySQL-5.7+-orange?style=flat-square" alt="MySQL 5.7+">
  <img src="https://img.shields.io/badge/License-MIT-brightgreen?style=flat-square" alt="MIT License">
  <img src="https://img.shields.io/badge/Responsive-Yes-success?style=flat-square" alt="Responsive">
</h1>

<p align="center">
  <strong>Your trusted partner for premium electronics and mobile accessories.</strong><br>
  <em>Comprehensive, full-featured e-commerce platform built with HTML, CSS, JavaScript, Tailwind CSS, Bootstrap, PHP, and MySQL.</em>
</p>

---

## 🚀 Features

### 🏠 Home Page
- Hero banner with gradient background
- Featured products carousel
- Promotional cards with icons
- Newsletter subscription
- Fully responsive design

### 🛍️ Products Page
- Advanced filtering by category, brand, price range
- Sorting (price, name, date)
- Search functionality
- Pagination
- Hover effects & animations
- Responsive product grid

### 📱 Product Details
- Image gallery with zoom-on-hover
- Specifications table
- Related products
- Add to cart & wishlist
- Tabbed content (Description, Specs, Reviews)

### 🛒 Shopping Cart
- Dynamic cart management
- Quantity controls
- Price calculations
- Promo code support
- Real-time updates

### 💳 Checkout Process
- Multi-step checkout
- Billing form
- Payment selection (Credit Card, PayPal, Apple Pay)
- Order summary & security badges

### 📞 Contact Page
- PHP-backed contact form
- Company information
- Interactive map placeholder
- FAQ section & messaging system

### 👥 About Us
- Company story & mission
- Team profiles
- Core values
- Why choose us section
- Call-to-action

### ❓ FAQ Page
- Collapsible questions
- Category filtering
- Search functionality
- Popular topics section

### 📝 Blog/News
- Featured posts
- Article grid & category browsing
- Newsletter subscription
- Author info

### 🔐 User Authentication
- Registration & login
- Profile management
- Order history
- Security settings
- Session management

### ❤️ Wishlist
- Save favorite products
- Remove items
- Add to cart from wishlist
- Persistent storage

### 👨‍💼 Admin Panel
- Dashboard with statistics
- Product, order, user & message management
- Blog post management

---

## 🎨 Design Features

### 🌙 Dark/Light Mode
- Toggle themes
- Persistent selection
- Smooth transitions
- System preference detection

### 📱 Responsive Design
- Mobile-first approach
- Tablet & desktop optimized
- Flexible grids
- Touch-friendly interactions

### ✨ Animations & Effects
- Smooth scrolling
- Hover animations
- Loading states
- Transition effects
- Interactive elements

### 🎯 SEO Optimized
- Semantic HTML
- Meta tags & descriptions
- Clean URLs
- Fast loading

---

## 🛠️ Technology Stack

| Frontend   | Styling          | Backend   | Database | Icons        | Fonts          |
|------------|------------------|-----------|----------|--------------|----------------|
| HTML5, JS  | Tailwind, Custom CSS | PHP 7.4+  | MySQL 5.7+ | Font Awesome | Google Fonts (Inter) |

---

## 📋 Requirements

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Web server (Apache/Nginx)
- Modern browser (Chrome, Firefox, Safari, Edge)

---

## 🚀 Installation

### 1️⃣ Clone/Download
```bash
git clone [repository-url]
cd skytale-ecommerce
```

### 2️⃣ Database Setup
1. Create a MySQL database named `skytale_ecommerce`
2. Import the schema:
   ```bash
   mysql -u username -p skytale_ecommerce < database/schema.sql
   ```

### 3️⃣ Configure Database Connection
Edit `db.php`:
```php
$host = 'localhost';
$dbname = 'skytale_ecommerce';
$username = 'your_username';
$password = 'your_password';
```

### 4️⃣ Web Server Setup
- XAMPP/WAMP: Place project in `htdocs` or `www`
- Apache: Configure virtual host
- Nginx: Configure server block

### 5️⃣ File Permissions
```bash
chmod 755 assets/images/
chmod 644 assets/css/
chmod 644 assets/js/
```

---

## 📁 Project Structure

```
skytale-ecommerce/
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
├── admin/
├── database/
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

---

## 🎯 Key Features Implementation

- **Shopping Cart**: LocalStorage, real-time price, quantity management, add/remove items
- **Authentication**: Secure password hashing, session management, role-based access
- **Product Management**: Dynamic loading, image zoom, specs display, related products
- **Order Processing**: Multi-step checkout, dummy payment integration, order tracking, email notifications (ready)
- **Admin Dashboard**: Stats overview, content & user management, order processing

---

## 🔧 Customization

- **Add Products**: Admin panel > Products > Add details, images, specs
- **Modify Styles**: Edit `assets/css/style.css` & Tailwind classes in HTML
- **Database Changes**: Update `database/schema.sql` & modify `db.php` for connections

---

## 🚀 Deployment

### Production Steps
1. Configure production database
2. Update `db.php` with live credentials
3. Set correct file permissions
4. Configure SSL certificate
5. Set up email server for notifications

### Security Checklist
- Use HTTPS
- CSRF protection
- Validate user input
- Prepared statements for DB
- Regular security updates

---

## 📱 Browser Support

- Chrome 90+
- Firefox 88+
- Safari 14+
- Edge 90+
- Mobile browsers (iOS, Android)

---

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes & test
4. Submit a Pull Request

---

## 📄 License

This project is open source under the [MIT License](LICENSE).

---

## 🆘 Support

- Create an issue in the repo
- Contact: [builtbyamos.great-site.net](https://builtbyamos.great-site.net)
- Docs: [Project Wiki](wiki-url)

---

## 🔄 Updates & Maintenance

- Regular security updates
- Performance optimizations
- New features & improvements

---

<p align="center">
  <strong>SkyTale Electronics</strong> &mdash; Built with ❤️ using modern web technologies.
</p>
