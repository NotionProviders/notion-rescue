# Notion Rescue Landing Page

Landing page for the **Notion Rescue** service — a fixed-scope, 4-week Notion workspace cleanup, reorganization, and optimization engagement by [Notion Providers](https://www.notionproviders.com).

## Tech Stack

- **Framework:** Laravel 13
- **Styling:** Tailwind CSS (CDN for zero-build deployment)
- **Fonts:** Poppins + Montserrat (Google Fonts)
- **Database:** SQLite (default, minimal usage for sessions/cache)

## Local Development

### Prerequisites

- PHP 8.2+ with extensions: `curl`, `mbstring`, `openssl`, `pdo_sqlite`, `zip`
- Composer

### Setup

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

Visit `http://localhost:8000` to view the landing page.

## Deployment (Coolify / Hetzner)

1. Point web root to `/public`
2. Set production `.env` values:
   - `APP_ENV=production`
   - `APP_DEBUG=false`
   - `APP_URL=https://your-domain.com`
3. Run:
   ```bash
   composer install --no-dev --optimize-autoloader
   php artisan key:generate
   php artisan migrate --force
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```
4. Enable SSL via Let's Encrypt

## Customization

- **Booking link:** Update the `href` on CTA buttons in `resources/views/landing.blade.php` (search for `notionproviders.com/contact-us`)
- **Content:** All landing page content lives in `resources/views/landing.blade.php`
- **Layout:** Base layout at `resources/views/layouts/app.blade.php`
- **Colors:** Tailwind config is inline in the layout head (primary gold/amber + dark surface palette)
