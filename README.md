# Ecommerce Using an Affiliate marketing

## A PHP e-commerce web application.

## Docker Installation (Recommended)

### Prerequisites

- Docker and Docker Compose installed on your system

### Quick Start

1. **Clone the repository**

   ```bash
   git clone <repository-url>
   cd Affiliate-marketing-website
   ```

2. **Start the application**

   ```bash
   docker compose up -d
   ```

   This single command will:

   - Start a PHP 8.1 with Apache web server
   - Start a MySQL 5.7 database server
   - Automatically import the database schema and data
   - Configure all necessary connections

3. **Access the application**

   - **Website**: http://localhost:8080
   - **Admin Panel**: http://localhost:8080/admin_area
     - Username: `electronixadmin`
     - Password: `12345678`

4. **Database Connection Details**

   - Host: `db` (within Docker network) or `localhost:3306` (from host machine)
   - User: `root`
   - Password: `root`
   - Database: `electronix`

5. **Stop the application**

   ```bash
   docker compose down
   ```

6. **Stop and remove all data (including database)**
   ```bash
   docker compose down -v
   ```

---

## Manual Installation (Without Docker)

1. To set this web application, make sure PHP and PHPMyAdmin is installed on your server.
2. Next open PHPMyAdmin, import the db.sql file located at `database/db.sql`. This will generate tables in your database on your server.
3. The admin user which I have made has a username `electronixadmin` and the password is `12345678`. (Please confirm this in db or create one manually.)
4. Update the database connection files (`includes/db.php`, `admin_area/includes/db.php`, and `functions/functions.php`) with your database credentials.
5. Once this is done, go to the url of your website and it should be up and running.

---

## Features

- User registration and authentication
- Product browsing by categories and brands
- Shopping cart functionality
- Admin panel for product management
- Responsive design

## Notes

Currently only COD (Cash on Delivery) has been implemented. Working on email delivery on purchase and payment gateway. Stay tuned for the updates.

Enjoy!
