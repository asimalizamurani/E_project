# 🛍️ E-commerce Website

Welcome to **E-commerce Platform** – a dynamic web application for jewelry lovers! This project is built with **HTML, CSS, JavaScript, PHP, and MySQL** to provide users with a seamless shopping experience. Check out the key features and instructions for setup below.

---

## 🌟 Features

### User Interface
- **Home Page**: View featured and trending jewelry items.
- **Categories Page**: Browse jewelry by categories like **Gold**, **Pearl**, and **Silver**.
- **Cart Page**: Add items to your cart, with management options for quantity.
- **Authentication**: Register and log in for a secure shopping experience.
  - 🚫 **Note**: Users must log in to add items to their cart.

### Admin Interface
- **Product Management**: Create, view, update, and delete products.
- **User Management**: View and delete registered users.
- **Order Management** (optional): Track and manage user orders.

---

## 🛠️ Tech Stack

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **Authentication**: Session-based login

---

## ⚙️ Installation and Setup

1. **Clone the Repository**
   ```bash
   git clone https://github.com/asimalizamurani/E_project.git
   cd E_project
   ```

2. **Set up the MySQL Database**
   - Create a MySQL database and import the provided SQL file located in `/database/initialize.sql`.

3. **Configure Database Connection**
   - Open `config.php` and update the following credentials:
     ```php
     define('DB_HOST', 'your_database_host');
     define('DB_USER', 'your_database_user');
     define('DB_PASS', 'your_database_password');
     define('DB_NAME', 'your_database_name');
     ```

4. **Run the Application**
   - Launch your local server (e.g., XAMPP, WAMP, or MAMP) and navigate to the project folder.
   - Access the application at `http://localhost/E_project`.

---

## 📑 Key Features and Usage

### Authentication
- **Sign Up**: `/signup.php`
- **Login**: `/login.php`

### User Routes
- **Home**: `/index.php`
- **Cart**: `/cart.php` (requires login)

### Admin Routes
- **Product Management**: `/admin/products.php`
- **User Management**: `/admin/users.php`

---

## 📂 Project Structure

```
ecommerce-website/
├── assets/                # CSS, JavaScript, and image assets
├── database/              # SQL files for database initialization
├── includes/              # PHP includes (header, footer, config)
├── admin/                 # Admin-specific pages
├── index.php              # Home page
└── config.php             # Database configuration
```

---

## 📄 License

This project is licensed under the MIT License.

---

## 👨‍💻 Contact

For questions or contributions:

- **GitHub**: [https://github.com/asimalizamurani]
- **Email**: asimalizamurani@gmail.com

Enjoy exploring the world of jewelry shopping! 🎉
