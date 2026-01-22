<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Backend API (Laravel)

This repository contains the **Laravel backend API** for the project. It provides authentication, payments, notifications, and RESTful APIs consumed by the Flutter frontend.

---

## 🚀 Features

* RESTful API
* JWT Authentication
* Swagger (L5-Swagger) API Documentation
* Stripe Payments
* ABA PayWay QR Payments
* Firebase Integration
* Telegram & Twilio Notifications
* Cloudinary File Uploads
* Queue & Cache Support

---

## ⚠️ Security Warning (IMPORTANT)

**DO NOT commit real secrets, tokens, API keys, or credentials.**

The following must always be stored in `.env` and never pushed to GitHub:

* APP_KEY, JWT_SECRET
* Database credentials
* Stripe / ABA / Twilio / Telegram / Cloudinary keys
* Firebase credentials

If these were already committed, **rotate them immediately**.

---

## 📦 Installation

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
```

---

## ▶️ Run the Server

```bash
php artisan serve --host=0.0.0.0 --port=8000
```

Or using PHP built-in server:

```bash
php -S 0.0.0.0:8000 -t public
```

---

## 📚 API Documentation (Swagger)

Generate Swagger docs:

```bash
php artisan l5-swagger:generate
```

Access:

```
http://localhost:8000/api/documentation
```

---

## 🔐 Environment Configuration

### `.env.example` (SAFE TO COMMIT)

```env
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

JWT_SECRET=

FIREBASE_CREDENTIALS=firebase_credentials.json

STRIPE_KEY=
STRIPE_SECRET=
STRIPE_WEBHOOK_SECRET=

ABA_MERCHANT_ID=
ABA_HASH_KEY=
ABA_QR_URL=
ABA_CHECK_URL=
ABA_CALLBACK_URL=

TELEGRAM_BOT_TOKEN=
TELEGRAM_CHAT_ID=

TWILIO_SID=
TWILIO_AUTH_TOKEN=
TWILIO_PHONE=

CLOUDINARY_CLOUD_NAME=
CLOUDINARY_API_KEY=
CLOUDINARY_API_SECRET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=
```

---

## 🧠 Architecture Overview

```
Flutter App
   │
   │  HTTPS (REST API)
   ▼
Laravel API
   ├── Auth (JWT)
   ├── Payments (Stripe / ABA)
   ├── Notifications (Telegram / SMS)
   ├── Media Uploads (Cloudinary)
   └── Swagger Docs
```

---

## 🛡 Best Practices

* Use **Laravel Rate Limiting** for DDoS protection
* Enable **HTTPS** in production
* Store secrets in **CI/CD environment variables**
* Disable `APP_DEBUG` in production

---

## 📜 License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
