===============================================================
Laravel Book Review App - exercise-laravel-bookreview
===============================================================

A simple Laravel-based web application for managing and reviewing books.  
This exercise project demonstrates basic CRUD functionality, authentication, 
and database relationships in a Laravel environment.

---------------------------------------------------------------
REQUIREMENTS
---------------------------------------------------------------
- PHP >= 8.2
- Composer
- Laravel 11+
- MySQL or any supported database
- Node.js and npm (for frontend assets)

---------------------------------------------------------------
INSTALLATION
---------------------------------------------------------------
1. Clone the repository:
   git clone https://github.com/your-username/exercise-laravel-bookreview.git

2. Navigate into the project folder:
   cd exercise-laravel-bookreview

3. Install PHP dependencies:
   composer install

4. Install Node dependencies (if using Vite or Laravel Mix):
   npm install
   npm run dev

5. Create a copy of the .env file:
   cp .env.example .env

6. Generate application key:
   php artisan key:generate

7. Configure your `.env` file:
   - Set your DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD

8. Run database migrations:
   php artisan migrate

9. (Optional) Seed the database with sample data:
   php artisan db:seed

10. Start the development server:
    php artisan serve

---------------------------------------------------------------
FEATURES
---------------------------------------------------------------
- User authentication (login, registration)
- Book list with ratings and reviews
- Add/Edit/Delete books and reviews
- User dashboard
- Responsive UI with basic styling

---------------------------------------------------------------
DEFAULT LOGIN (if seeded)
---------------------------------------------------------------
Email: admin@example.com  
Password: password

---------------------------------------------------------------
NOTES
---------------------------------------------------------------
- This project is for learning purposes and may lack production-level security.
- Contributions or improvements are welcome.

---------------------------------------------------------------
AUTHOR
---------------------------------------------------------------
Jay Millena  
Email: jay.millena07@gmail.com  
GitHub: https://github.com/your-username

