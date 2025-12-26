# Simple-Registration-System

Simple user registration system built using HTML, CSS, PHP, and MySQL.

Project Structure  
This is a simple registration system designed using PHP for backend processing, HTML & CSS for frontend design, and MySQL for database storage.

Pre-requisites:  
XAMPP (Cross platform, Apache, MySQL, PHP, Perl)  

phpMyAdmin (Username: root, Password: empty, Database name: `registration_system`)

Modules:  
This project contains 4 main files, namely,

1.) index.html  
This is the user registration page where users enter their personal details such as name, email, phone, gender, date of birth, address, city, and country.

2.) style.css  
This file contains all the CSS used for styling the registration form and layout.

3.) registration.php  
This file processes the registration form data and inserts user information into the MySQL database using PHP.

4.) db.php  
This file is responsible for establishing the connection between PHP and the MySQL database.

Note: All frontend styling is handled in the separate `style.css` file.

Running the Project  

1. Install XAMPP on your system.  
2. Start Apache and MySQL from the XAMPP Control Panel.  
3. Extract or copy the project folder into the `htdocs` directory  
   (Example: `C:\xampp\htdocs\registration\`)  
4. Open your browser and go to:  
   `http://localhost/phpmyadmin`  
5. Create a database named `registration_system`.  
6. Create the `users` table using the following SQL command:
``` sql
CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
full_name VARCHAR(100),
email VARCHAR(100) UNIQUE,
phone VARCHAR(20),
gender VARCHAR(10),
date_of_birth DATE,
address VARCHAR(255),
city VARCHAR(100),
country VARCHAR(100),
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

7. Open the project in your browser using:  
   `http://localhost/registration/index.html`  
8. Fill in the registration form and submit.  
9. User data will be stored in the MySQL database.

Features  

- User registration form  
- HTML5 input validation  
- Secure PHP prepared statements  
- MySQL database integration  
- Clean and responsive user interface  

Future Enhancements  

- User login system  
- Password encryption and authentication  
- Admin dashboard  
- Node.js + Express backend  
- SQL Server or Docker-based database  

Author  
The Quantum Crew


License  

This project is developed for educational purposes only.

