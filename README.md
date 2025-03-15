# E-Commerce Website

An interactive and user-friendly E-Commerce platform developed during my Full Stack Developer internship. This project features user and admin login functionality to ensure secure access and effective management.

## 🚀 Features
- **User Authentication:** Secure login system for both users and admins.
- **Product Management:** Admin panel for adding, editing, and deleting products.
- **User Dashboard:** Browse products, add to cart, and checkout functionality.
- **Order Management:** Admin can view and manage user orders.
- **Responsive Design:** Ensures optimal user experience across devices.

## 🛠️ Tech Stack
- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP
- **Database:** MySQL

## 📂 Project Structure
```
├── assets
│   ├── css
│   ├── js
│   └── images
├── admin
│   ├── dashboard.php
│   ├── manage-products.php
│   └── orders.php
├── user
│   ├── index.php
│   ├── product-details.php
│   └── checkout.php
├── includes
│   ├── dbconnect.php
│   ├── header.php
│   └── footer.php
├── .env
├── README.md
└── index.php
```

## ⚙️ Installation
1. **Clone the Repository:**
   ```bash
   git clone https://github.com/yourusername/ecommerce-website.git
   ```

2. **Setup Database:**
   - Create a MySQL database.
   - Import the provided `database.sql` file.

3. **Configure Database Connection:**
   - Edit the `dbconnect.php` file with your database credentials.

4. **Start the Server:**
   ```bash
   php -S localhost:8000
   ```

5. **Access the Project:**
   - **User Login:** `/user/index.php`
   - **Admin Login:** `/admin/dashboard.php`

## 📸 Screenshots
| **User Dashboard** | **Admin Panel** |
|:-------------------:|:----------------:|
| ![User Dashboard](assets/images/user_dashboard.png) | ![Admin Panel](assets/images/admin_dashboard.png) |

## 🔮 Future Improvements
- Implement product search functionality.
- Add payment gateway integration.
- Introduce user profile customization.

## 👨‍💻 Author
**Devraj Parmar**  | [GitHub](https://github.com/yourusername)

