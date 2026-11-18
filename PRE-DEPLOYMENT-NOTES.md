# PT Wira Griya — GitHub Preparation Notes

## Environment and secrets

- The real `.env` file is intentionally not included in this package. Do not commit it.
- Copy `.env.example` to `.env` for local setup, then generate an application key with `php artisan key:generate`.
- For Vercel, add each required value as a Project Environment Variable; do not upload `.env`.
- Set `APP_KEY` to a generated Laravel key, `APP_DEBUG=false`, `APP_ENV=production`, and `APP_URL` to the deployed URL.

## Contact Us email delivery

The Contact Us form now submits to `POST /contact-us` and sends a message to `CONTACT_INQUIRY_TO` (default: `info@wira.co.id`). Configure these values with the mail provider approved by PT Wira Griya:

- `MAIL_MAILER=smtp`
- `MAIL_SCHEME=smtp`
- `MAIL_HOST` (provider's SMTP host)
- `MAIL_PORT=587`
- `MAIL_USERNAME` and `MAIL_PASSWORD` (SMTP credentials)
- `MAIL_FROM_ADDRESS` (must be an authenticated/verified sender address)
- `MAIL_FROM_NAME=PT Wira Griya`
- `CONTACT_INQUIRY_TO=info@wira.co.id`

The SMTP host and credentials were not invented or embedded because they were not supplied. The form will only send real mail after the valid provider settings have been added to `.env` locally and to Vercel Environment Variables for deployment.

Business-card uploads accept JPG, PNG, and PDF up to 4 MB. The limit is intentionally below Vercel Functions' 4.5 MB request-body limit to leave room for multipart form data.

## Upcoming Events

Two dates are set as temporary December 2026 dates for the management preview:

- Industrial Automation Forum — 10 December 2026
- Surface Coating Technology Workshop — 17 December 2026

These are dummy dates and must be confirmed or replaced before the site is presented as an official public event schedule. Event times and venues remain “To be announced”.

## News comments

The current News comments and replies remain frontend-only demo interactions, as requested for the management meeting. They are not saved to a database and will reset after the page is refreshed.

## GitHub preparation

This package omits `.env`, `vendor/`, `node_modules/`, the local SQLite file, Vite dev files, and compiled view cache. Keep `composer.lock` and `package-lock.json`; reinstall dependencies from the lockfiles when building:

```bash
composer install --no-dev --optimize-autoloader
npm ci
npm run build
```
