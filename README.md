# Senn Tiefbau AG

Website for Senn Tiefbau AG – senntiefbau.ch

## Stack

- **Backend:** Laravel 12 (used as a template engine, exported to static HTML)
- **Frontend:** Tailwind CSS v4, Vite, Swiper
- **Fonts:** Futura PT (Adobe Typekit)
- **Deploy:** Static export via [spatie/laravel-export](https://github.com/spatie/laravel-export)

## Getting Started

```
composer install
npm install
composer dev
```

See [INSTALL.txt](INSTALL.txt) for full build and deploy instructions.

## Project Structure

```
resources/
  css/app.css          Main stylesheet (Tailwind + custom)
  js/app.js            JS entry point
  js/gallery.js        Swiper gallery init
  js/appear.js         Scroll-triggered appear animations
  views/
    landing.blade.php  Single-page layout
    components/        Blade components (hero, services, about, gallery, footer)
dist/                  Static export output (deploy this)
```
