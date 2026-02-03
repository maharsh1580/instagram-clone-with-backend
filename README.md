📸 Instagram Login Clone (PHP + MySQL)

A simple Instagram-style login page built using HTML, CSS, PHP, and MySQL.
This project stores user login credentials securely in a database using password hashing.
It is made for learning purposes only (not for real Instagram credentials).

🚀 Features

Instagram-style UI (Dark Mode)

Responsive design

PHP backend (login.php)

MySQL database integration

Passwords stored securely using hashing

Simple and beginner-friendly project structure

🛠️ Technologies Used

HTML5

CSS3

PHP

MySQL

XAMPP (Apache & MySQL)

phpMyAdmin

📁 Project Structure
insta_clone/
│
├── index.html    # Frontend login page
├── login.php     # Backend PHP file
└── README.md     # Project documentation

🗄️ Database Setup

Open phpMyAdmin:

http://localhost/phpmyadmin


Create a database named:

login_demo


Run this SQL query:

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(100),
  password VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

⚙️ Backend Configuration (login.php)

Database connection settings:

$host = "localhost";
$user = "root";
$pass = "";
$db = "login_demo";


Make sure MySQL and Apache are running in XAMPP.

▶️ How to Run the Project

Install XAMPP

Start Apache and MySQL

Place project folder in:

C:\xampp\htdocs\


Open browser and go to:

http://localhost/insta_clone/index.html


Enter username and password and click Log in

Check saved data in:

phpMyAdmin → login_demo → users table → Browse

🔐 Security Note

Passwords are stored using password_hash() (not plain text)

This project is for educational purposes only

Do NOT use this to collect real Instagram credentials

🎯 Learning Outcomes

HTML form handling

PHP POST method

MySQL database connection

Prepared statements

Password hashing

Local server setup using XAMPP

📌 Future Improvements

Add login verification (SELECT + password_verify)

Add signup page

Add error messages

Add session-based login system

Add Light/Dark mode toggle

Improve UI to be more responsive

👨‍💻 Author

Created by: [Your Name Here]
First successful web project 💙🔥
