# PHP/MySQL CRUD Application

A simple web application built with PHP and MySQL that demonstrates the four basic CRUD operations: Create, Read, Update, and Delete.

This project was developed for CSC322 Web Programming at Sullivan University, following Tania Rascia's *Build a PHP & MySQL CRUD App* tutorials (Parts 1 and 2).

## Technologies Used

- PHP 8
- MySQL
- PDO (PHP Data Objects)
- HTML5
- CSS3
- MAMP (local development environment)

## Features

### Create
- Add new users through an HTML form.
- Store user information in a MySQL database.
- Display a confirmation message after successfully adding a user.

### Read
- Search for existing users by location.
- Retrieve matching records from the database.
- Display user information in an HTML table.

### Update
- View existing users and select individual records to edit.
- Update user information through a prepopulated form.
- Save changes to the MySQL database.

### Delete
- View existing users in a table.
- Delete individual records using their database IDs.
- Display a confirmation message after deletion.

### Security
- Uses PDO prepared statements for database operations.
- Escapes displayed user data using `htmlspecialchars()`.
- Generates CSRF tokens using PHP sessions and `random_bytes()`.
- Validates CSRF tokens on Create and Update form submissions using `hash_equals()`.
- Stores local database credentials in an excluded configuration file.

**Note:** The Delete operation uses GET requests, following the original tutorial. It does not include CSRF protection and would need additional safeguards in a production application.

## Project Structure

```text
php-mysql-crud-app/
├── data/
│   └── init.sql
├── public/
│   ├── css/
│   │   └── style.css
│   ├── templates/
│   │   ├── header.php
│   │   └── footer.php
│   ├── index.php
│   ├── create.php
│   ├── read.php
│   ├── update.php
│   ├── update-single.php
│   └── delete.php
├── common.php
├── config.example.php
├── config.php          # Local configuration (not tracked)
├── install.php
└── README.md
```

## Local Setup

### Prerequisites

- PHP 8 or later
- MySQL
- A local web server such as MAMP

### Installation

1. Clone or download this repository.

2. Place the project in your local web server's document root, or configure your server to serve the project directory.

3. Copy `config.example.php` to `config.php`.

4. Update `config.php` with your local MySQL connection settings:

   - Host
   - Username
   - Password
   - Database name
   - Port

5. Start Apache and MySQL through MAMP.

6. Open the installation script in your browser:

   ```text
   http://localhost/php-mysql-crud-app/install.php
   ```

   This initializes the database and creates the required `users` table.

7. Open the application:

   ```text
   http://localhost/php-mysql-crud-app/public/index.php
   ```

The application is now ready to use.

## Database

The application uses a MySQL database named `test` with a `users` table.

Each user record contains the following fields:

| Field | Description |
|-------|-------------|
| id | Unique user identifier |
| firstname | User's first name |
| lastname | User's last name |
| email | User's email address |
| age | User's age |
| location | User's location |
| date | Date the record was created |

The database schema is defined in `data/init.sql`.

## How It Works

The application uses PHP to process form submissions and communicate with MySQL through PDO.

Database queries use prepared statements to bind user-provided values rather than inserting them directly into SQL statements.

The application also uses a shared `escape()` helper to safely display database values in HTML.

For Create and Update operations, PHP generates a CSRF token and stores it in the user's session. The token is submitted through a hidden form field and validated before the database operation proceeds.

## Project Purpose

This project was created to practice server-side web development and database integration using PHP and MySQL.

It demonstrates how to connect a web application to a relational database, execute CRUD operations using PDO, process HTML forms, and implement basic security measures.

The application is intended as a learning project rather than a production-ready system.

## Acknowledgments

Based on Tania Rascia's tutorials:

- [Build a PHP & MySQL CRUD Database App From Scratch](https://www.taniarascia.com/create-a-simple-database-app-connecting-to-mysql-with-php/)
- [Create a Simple CRUD Database App (Part 2)](https://www.taniarascia.com/create-a-simple-crud-database-app-php-update-delete/)

Adapted for the local development environment and PHP version used in CSC322 Web Programming.