## Project Setup Guide  🚀

This guide will help you set up the project on your local machine.

### Prerequisites
Ensure you have the following installed:

- PHP 8.x (recommended: 8.2 or later).
- Composer (dependency manager for PHP)
- MySQL (or the database used in the project)
- Node.js & npm/pnpm (for frontend assets, if applicable)
- Docker (Optional) if using Laravel Sail


### Clone the Project

Run the following command in your terminal:

    git clone git@github.com:redaEnnakouri/inventiv-it-calculator-test.git
    cd inventiv-it-calculator-test


###  Install Dependencies

    composer install

### Install JavaScript Dependencies (If applicable)

    npm install
    or
    pnpm install

## Environment Configuration

    cp .env.example .env

## Database Setup
Update .env with your database credentials:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database
    DB_USERNAME=root
    DB_PASSWORD=your_password


## Run Migrations 

    php artisan migrate 

### If you are using Laravel Sail:

    ./vendor/bin/sail artisan migrate 


## Run the Application

    php artisan serve

Access the project at: http://127.0.0.1:8000

### Using Laravel Sail (if applicable)
If you're using Laravel Sail (Docker-based), start the project with:

    ./vendor/bin/sail up -d

### Compile Frontend Assets (If applicable)

    npm run dev
    or
    pnpm run dev

### How It Works
- The command fetches data from the external API using the configured API key.
- It processes the received data and updates the corresponding records in the database.
- The command is scheduled to run every 24 hours.

### Running the Unit Tests
To run the unit tests, use the following command:

    php artisan test


### ✅ Your Laravel project is now set up! 🎉

## License & Copyright

© 2025 Reda. All rights reserved.

This project and its source code are the intellectual property of Reda.  
The project is licensed under the [MIT License](LICENSE.md).
