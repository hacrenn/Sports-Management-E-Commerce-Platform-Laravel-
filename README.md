# Sports Management & E-Commerce Plataform (Laravel)

This project is a full-featured web platform developed for **AC Vila Meã**, bringing together club news, squad management, match information, an online store, ticket sales, user authentication, and an administrative back office.

Built with Laravel, this project demonstrates real-world features such as payments, email notifications, PDF generation, file uploads, role-based access, and external data integration.

## Features

- Club website with modern, responsive design
- News management with image uploads
- Squad and staff pages
- Match calendar and match details
- Online store with product management
- Shopping cart and checkout flow
- Stripe payment integration
- Ticket purchasing system
- User registration and login
- Password reset functionality
- Admin dashboard
- Email notifications
- PDF invoice generation
- Image gallery
- External standings update script using Python

## Tech Stack

- **Backend:** Laravel 11, PHP 8.2
- **Frontend:** Blade, Bootstrap, Tailwind CSS, Vite
- **Database:** PostgreSQL
- **Payments:** Stripe / Laravel Cashier
- **PDF Generation:** Dompdf
- **Language Integration:** Python for standings crawler
- **Authentication:** Laravel Breeze / custom auth flow

## Project Structure

- `app/Http/Controllers` – application logic
- `app/Models` – Eloquent models
- `database/migrations` – database schema
- `resources/views` – Blade templates
- `public/storage` – uploaded images and public assets
- `python/` or related script folder – standings crawler logic

## Main Modules

### Public Website
Visitors can browse club news, squad information, fixtures, gallery images, and general club content.

### Authentication
Users can create an account, log in, reset their password, and access their personal area.

### Admin Panel
Administrators can manage:
- news
- matches
- players
- products
- orders
- tickets
- gallery images

### E-commerce
The project includes product listing, cart handling, checkout, and Stripe payment processing.

### Tickets
Users can buy tickets and receive a generated PDF receipt/invoice.

### Standings Automation
A Python script updates league standings automatically from an external source.

## Requirements

- PHP 8.2+
- Composer
- Node.js + npm
- PostgreSQL
- Stripe account and API keys
- Python 3.x

