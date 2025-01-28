# BlogAPI

A simple Laravel application for managing blog posts.

## Setup Instructions

1. Clone the repository:
   ```bash
   git clone <repo-url>
   cd BlogAPI
composer install
DB_CONNECTION=sqlite
DB_DATABASE=absolute_path/database.sqlite

php artisan migrate

php artisan serve
