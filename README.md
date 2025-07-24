# 🎵 Laravel Song Dashboard

A Laravel 12 web application that allows users to register, log in, and manage a list of song links. Users can add, view, open, and delete songs in a simple Bootstrap-styled dashboard.

---

## 🚀 Features

- ✅ User Registration & Login (Laravel Breeze)
- ✅ Dashboard access after login
- ✅ Add songs with title and URL
- ✅ Open songs in new tab
- ✅ Delete songs
- ✅ Built with Blade and Bootstrap 5

---

## 🛠️ Tech Stack

- **Laravel 12**
- **PHP 8.2+**
- **Blade Templates**
- **Bootstrap 5.3 (via CDN)**
- **MySQL / SQLite**
- **Laravel Breeze** (for Auth)

---

## 📦 Installation

```bash
# 1. Clone the repository
git clone https://github.com/your-username/song-dashboard.git
cd song-dashboard

# 2. Install PHP dependencies
composer install

# 3. Install front-end assets
npm install && npm run dev

# 4. Set up environment variables
cp .env.example .env
php artisan key:generate

# 5. Configure your database in `.env` file
# DB_CONNECTION=mysql or sqlite
# DB_DATABASE=your_database_name

# 6. Run migrations to create tables
php artisan migrate

# 7. Serve the application
php artisan serve
