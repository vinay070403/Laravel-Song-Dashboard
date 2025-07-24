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

## This project is open-sourced under the MIT license.

<img width="1729" height="442" alt="image" src="https://github.com/user-attachments/assets/6a616366-a5b8-452d-9840-3705df1a878c" />


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

```

## 1. Planning Phase (Before Code)
Ask yourself:

What am I building? (e.g. song dashboard)

What data do I need? (songs with title + url)

What actions do users take? (register, login, add song, delete song)

## 2. Create New Laravel Project <br>
 
    laravel new project-name

✅ Now you're ready to code.

## 3. Database Setup <br>

 Configure .env file <br>

    DB_CONNECTION=mysql 
    DB_DATABASE=songs_db
    DB_USERNAME=root
    DB_PASSWORD=
after test this: 
      
    php artisan migrate

## 4. Make Migrations (Database Structure)

    php artisan make:migration create_songs_table
    
 database/migrations/:
    
        public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('url');
            $table->timestamps();
        });
    }

Run it:

    php artisan migrate

##  5. Create Model (Represents DB Table in Code)
    php artisan make:model Song
     
Edit it to allow mass assignment:

    protected $fillable = ['title', 'url'];
    
## 6. Create Controller (Handles User Logic)

    php artisan make:controller SongController
    
##  7. Define Routes (Map URLs to Controllers)

routes/web.php:

    Route::get('/dashboard', [SongController::class, 'index'])->name('dashboard');
    Route::post('/songs', [SongController::class, 'store'])->name('songs.store');
    Route::delete('/songs/{id}', [SongController::class, 'destroy'])->name('songs.destroy');

## 8. Make Views (Blade Templates)

Blade files show the HTML UI. Example:

    resources/views/dashboard.blade.php
    Uses @extends('layouts.app') and @section('content')
        
