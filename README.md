# 📘 Lab 7: PHP CRUD User Management System

A complete PHP-MySQL CRUD application developed for **BIC21203 Web Development** at Universiti Tun Hussein Onn Malaysia (UTHM). This system manages user records with registration, login, session control, and full edit/delete capability — built to satisfy all Lab 7 assignment requirements.

---

## 🛠️ Tech Stack

- PHP 8
- MySQL (via phpMyAdmin)
- HTML5, CSS3
- Apache (via XAMPP)
- Git & GitHub

---

## 📦 Project Structure



---

## 🚀 Setup & Installation

1. **Database Setup**
   - Create a database named `Lab_7`
   - Create table using:
     ```sql
     CREATE TABLE users (
       matric VARCHAR(10) PRIMARY KEY,
       name VARCHAR(100) NOT NULL,
       password VARCHAR(255) NOT NULL,
       role VARCHAR(10) NOT NULL
     );
     ```

2. **File Placement**
   - Save all project files in `C:\xampp\htdocs\lab_7`

3. **Start XAMPP Services**
   - Apache ✔️
   - MySQL ✔️

4. **Run Project Locally**
   - Register: `http://localhost/lab_7/register.php`
   - Login: `http://localhost/lab_7/login.php`
   - Display: `http://localhost/lab_7/display.php`

---

## 🔐 Features

- ✅ User registration with password hashing
- ✅ Login authentication using sessions
- ✅ Display user records in a table
- ✅ Update user name and role
- ✅ Delete user with confirmation
- ✅ Session protection for restricted pages
- ✅ Styled interface using custom CSS

---

## 📚 Educational Purpose

This project was built to demonstrate:
- Server-side scripting with PHP
- Form handling and data sanitation
- SQL queries using `mysqli` and `prepared statements`
- Session management and access control
- CRUD operations tied to a live MySQL database

---

## 🧠 Reflection

Building this system helped reinforce core web development practices and improved debugging, workflow planning, and real-world application design. Proud to say it’s not just a lab — it’s a functional web app.

---

