# Professional Row PHP Blog

A custom-built, professional-grade blog management system using "Row PHP" (standalone PHP) and MVC architecture.

## Features
- **Custom MVC Framework**: Lightweight and scalable.
- **Modern UI**: Dark mode, glassmorphism, and responsive design.
- **Secure Architecture**: PDO prepared statements, security-first mindset.
- **PSR-4 Autoloading**: Modern PHP autoloading using Composer.

## Getting Started
1.  **Clone the project**: `git clone <repository-url>`
2.  **Install dependencies**: `composer dump-autoload`
3.  **Configure Environment**: Edit `config/config.php` with your database credentials.
4.  **Run Locally**: `php -S localhost:8000 -t public`
5.  **Visit**: `http://localhost:8000`

## Testing & Usage

### 1. Database Setup
- Ensure MySQL is running.
- Create a database named `blog_php`.
- Import `database.sql`: `mysql -u root -p blog_php < database.sql`.

### 2. User Authentication
- **Register**: Navigate to `http://localhost:8000/users/register`. Fill in the form to create a new account.
- **Login**: Navigate to `http://localhost:8000/users/login`. Use your registered credentials or these defaults:
    - **Admin**: `admin@example.com` / `password123`
    - **User**: `user@example.com` / `password123`
- **Check Session**: Once logged in, the Home page will greet you by name and show a "Logout" button.
- **Logout**: Click "Logout" to end your session.

## Documentation
- [Project Blueprint](docs/blueprint.md)
- [Module Documentation](docs/modules.md)
- [Database Schema](docs/database.md)

## Author
Antigravity - AI Assistant
