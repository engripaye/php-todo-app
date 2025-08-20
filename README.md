---

# 📋 Task Manager – PHP To-Do App

A simple yet professional **Task Manager (To-Do List) Application** built with **PHP & MySQL**.
This project demonstrates how to build a clean, beginner-friendly but production-style PHP CRUD app with database integration.

---

## ✨ Features

* ➕ Add new tasks
* 📋 View all tasks
* ✔️ Mark tasks as completed
* ❌ Delete tasks
* 🕒 Automatic timestamps for task creation
* 🎨 Simple clean UI with CSS

---

## 🛠️ Tech Stack

* **Backend:** PHP 8+
* **Database:** MySQL
* **Frontend:** HTML, CSS
* **Server:** Apache / Nginx

---

## 📂 Project Structure

```
php-todo-app/
│── config.php       # Database connection
│── index.php        # Homepage – list & manage tasks
│── add.php          # Add new tasks
│── complete.php     # Mark tasks as completed
│── delete.php       # Delete tasks
│── style.css        # Styling
```

---

## ⚙️ Installation & Setup

### 1️⃣ Clone the Repository

```bash
git clone https://github.com/your-username/php-todo-app.git
cd php-todo-app
```

### 2️⃣ Create Database

In MySQL:

```sql
CREATE DATABASE todo_app;

USE todo_app;

CREATE TABLE tasks (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  is_completed BOOLEAN DEFAULT FALSE,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### 3️⃣ Configure Database Connection

Update `config.php` with your database details:

```php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "todo_app";
```

### 4️⃣ Run the Application

* Place project inside your local server (e.g., `htdocs/` for XAMPP).
* Start Apache & MySQL.
* Visit in browser:

```
http://localhost/php-todo-app/index.php
```

---

## 📸 Screenshots (Optional)

*Add screenshots or GIFs of your app UI for better presentation.*

---

## 🚀 Future Improvements

* ✅ User authentication (login/register).
* ✅ Categories / priorities for tasks.
* ✅ REST API for mobile integration.
* ✅ Switch to **Laravel** for modern PHP practices.

---

## 🤝 Contributing

Contributions are welcome!

* Fork the repo
* Create a new branch (`feature-xyz`)
* Commit your changes
* Open a Pull Request

---

## 📜 License

This project is licensed under the MIT License.

---


Do you want me to **also design a GitHub profile banner image** (like a project logo/header) so that when someone visits your repo, it looks even more attractive?
