Portfolio Website

## 🚀 Overview

**Ameer Web Solutions** is a professional portfolio and service-based website created to showcase web development, WordPress, and SEO expertise. Built using modern, clean code and mobile-responsive design, this website represents the brand identity of a skilled freelance web developer and digital consultant.

Visit the live website: 👉 [ameerwebsolutions.com](https://ameerwebsolutions.com/)

---

## 🛠️ Technologies Used

- **HTML5** – Semantic and accessible markup
- **CSS3** – Fully responsive, mobile-first styling
- **Tailwind** – For layout, grid, and responsiveness
- **JavaScript / jQuery** – For dynamic UI components
- **PHP** – Backend integration for form handling and admin features
- **MySQL** – Database for project form submissions
- **XAMPP / Localhost** – For development and testing

---

## 📂 Project Features

- ✅ **Home Page** – Clear branding and service highlights
- ✅ **About Section** – Brief profile and experience details
- ✅ **Services** – WordPress development, SEO, and custom web solutions
- ✅ **Projects** – Display of completed work
- ✅ **Contact Form** – Contact and project inquiry form with backend integration
- ✅ **Admin Dashboard (CMS)** – Track customer entries and manage submissions
- ✅ **Fully Responsive** – Optimized for mobile, tablet, and desktop
- ✅ **SEO-Friendly** – Clean structure and optimized for search engines

---

## 📌 Use Cases

This project is ideal for:

- Freelancers looking to showcase their portfolio
- Small service-based businesses needing a simple CMS and admin tracking
- Developers who want to offer a fully working web service template to clients

---

How to Use This Website Code
Follow these steps to set up and run the Ameer Web Solutions website on your local machine:

🔧 Requirements
Local server software like XAMPP, WAMP, or Laragon

PHP 7.x or higher

MySQL database

Web browser (Chrome, Firefox, etc.)

⚙️ Installation Steps
1. Clone or Download the Repository
Copy
Edit
git clone https://github.com/Ameer-web-solutions/portfolio-website-design.git
Or download the ZIP file and extract it to your local server’s root folder:

swift
Copy
Edit
C:/xampp/htdocs/portfolio/
2. Import the MySQL Database
Open http://localhost/phpmyadmin in your browser.

Create a new database named
porfolio
Import the provided SQL file (portfolio.sql) into this database.

Note: Make sure to include the .sql file in your GitHub repository for others to use.

3. Configure the Database Connection
Open the PHP files that connect to the database (example: index.php, dashboard.php, etc.) and update the connection settings:

php
Copy
Edit
$con = mysqli_connect("localhost", "root", "", "portfolio");
If your MySQL password is not empty, update it accordingly.

4. Run the Website
Start Apache and MySQL in XAMPP.

Open your browser and go to:

arduino
Copy
Edit
http://localhost/portfolio/
You should now see the home page.

🛠 Features You Can Try
Submit the contact or project form.

Log data into the database.

Explore and expand the admin dashboard.

Customize pages like Home, About, Services, Projects, Contact, etc.

Use this as a base template for freelance or client websites.
