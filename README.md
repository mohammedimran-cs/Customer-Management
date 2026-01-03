## Project Overview

This project demonstrates my hands-on experience with Laravel, covering the following concepts:

- Laravel project setup and configuration
- Authentication using Laravel Breeze (Login & Register)
- Blade templates and Blade components
- CRUD operations using MVC architecture
- RESTful routing and controller methods
- Form handling and server-side validation
- Session flash messages for user feedback
- Database migrations and seeders
- Authentication middleware for route protection
- Integration of Bootstrap for UI styling

## How to Run the Project

1. Clone the project.

2. Install backend dependencies:
   composer install

3. Install frontend dependencies:
   npm install
   npm run dev

4. Create environment file:
   cp .env.example .env

5. Generate application key:
   php artisan key:generate

6. Configure database in .env:
   DB_DATABASE=customer_db
   DB_USERNAME=root
   DB_PASSWORD=

7. Create database in MySQL:
   CREATE DATABASE customer_db;

8. Run migrations and seeders:
   php artisan migrate --seed

   (This will create tables and insert default customer records.)

9. Start the server:
   php artisan serve

10. Open in browser:
    http://127.0.0.1:8000

11. Register a new user and login to access Customer Management.
