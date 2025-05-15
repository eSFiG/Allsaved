# Laravel Template Integration

## Опис проєкту

Цей проєкт для тестування інтеграції HTML/Bootstrap шаблону у Laravel 10+ з використанням Blade, MVC та Git.

## Вимоги
- PHP 8.1+
- Laravel 10+
- Composer
- Git

## Інсталяція

```bash
git clone https://github.com/yourname/yourrepo.git
cd yourrepo
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

## Доступні сторінки:

- `/` - головна сторінка
- `/dashboard` — інформаційна дошка
- `/profile` — профіль користувача
- `/settings` — налаштування
- `/posts` — список записів

## Структура

- Blade layout: `resources/views/layouts/app.blade.php`
- Часткові шаблони: `partials/header.blade.php`, `partials/menu.blade.php`, <br>
  `partials/contact.blade.php`, `partials/footer.blade.php`
- CSS та JS: у папці `public/assets/`
- Контролери: `PageController`, `PostController`
- Модель: `Post`
- Сідер: `PostSeeder`
- Фабрика: `PostFactory`

## Git

Весь проект знаходиться під контролем версій Git з логічними комітами:
- `Initial Laravel install`
- `Add HTML template assets (CSS, JS, images)`
- `Set up Blade layout and partials using HTML template`
- `Add static pages: dashboard, profile, settings with navigation`
- `Add Post model, migration, factory and seeder`
- `Create PostController with resource routes`
- `Add views for posts index and show`

## Автор

[eSFiG] — Тестове завдання з Laravel шаблонізацією

---
