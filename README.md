# DigitalEduInternship
# PHP CRUD Project

## Overview
This is a simple PHP-based CRUD (Create, Read, Update, Delete) application for managing student records. It allows users to add, update, delete, and view student details with database interaction.

## Technologies Used
- PHP
- MySQL
- HTML/CSS
- JavaScript (if applicable)

## Setup Instructions

### 1. Prerequisites
Ensure you have the following installed on your system:
- XAMPP or WAMP (for running Apache and MySQL)
- PHP (Version 7.4+ recommended)
- MySQL Database

### 2. Database Setup
1. Create a new MySQL database (e.g., `php_crud`).
2. Import the provided SQL file (`php-crud.sql`) into your database using phpMyAdmin or the MySQL command line:
   ```sql
   mysql -u root -p php_crud < php-crud.sql
   ```

### 3. Configure Database Connection
1. Open `db_config.php` and update the database credentials if needed:
   ```php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "php_crud";
   ```

### 4. Running the Project
1. Place the `php-crud` folder inside the `htdocs` directory (if using XAMPP) or the `www` directory (if using WAMP).
2. Start Apache and MySQL from the XAMPP/WAMP control panel.
3. Open a browser and go to:
   ```
   http://localhost/php-crud/home.php
   ```

## Usage
- **Home Page:** The landing page (`home.php`) provides an introduction and a button to access student data.
- **View Students:** Click on the "Go to Student Data" button in `home.php` to navigate to `index.php`, which displays the list of students.
- **Add Student:** Navigate to `add_student.php` to add a new student.
- **Update Student:** Use `update_student.php` to modify existing records.
- **Delete Student:** Remove records via `delete_student.php`.

## Additional Notes
- Ensure that your database service is running before accessing the project.
- Modify `functions.php` if additional functionalities are needed.

## License
This project is for educational purposes and is open-source.

---

For any issues or improvements, feel free to contribute or contact the developer.

