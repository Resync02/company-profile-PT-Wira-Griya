# Vercel deployment configuration for Wira Company Profile

This patch switches the project from Vercel's automatic static Vite output (`dist`) to a Laravel HTTP container using FrankenPHP.

## Files

Copy these four files into the Laravel project root (the same directory as `artisan` and `composer.json`):

- `Dockerfile.vercel`
- `Caddyfile`
- `vercel.json`
- `.dockerignore`

Do not set Vercel Output Directory to `dist`, `public`, or `public/build`. The Laravel application must run through PHP; `public/build` only contains the compiled Vite assets.

## Vercel project settings

In Project Settings > Build and Deployment:

- Remove any manual Build Command override such as `npm run build`.
- Remove any manual Output Directory override such as `dist`.
- Allow the root `Dockerfile.vercel` and `vercel.json` container service configuration to control the deployment.

## Required environment variables

Set these in Vercel Project Settings > Environment Variables. Use separate values for Preview and Production where appropriate.

- `APP_KEY`: generate once using `php artisan key:generate --show` locally; store the output as a secret in Vercel. Keep the same key for redeployments within the same environment.
- `APP_ENV=production`
- `APP_DEBUG=false`
- `APP_URL`: the Vercel deployment URL or custom domain.
- `LOG_CHANNEL=stderr`
- `CACHE_STORE=array`
- `SESSION_DRIVER=cookie`
- `QUEUE_CONNECTION=sync`
- `CONTACT_INQUIRY_TO=info@wira.co.id`
- SMTP: `MAIL_MAILER=smtp`, `MAIL_SCHEME=smtp`, `MAIL_HOST`, `MAIL_PORT=587`, `MAIL_USERNAME`, `MAIL_PASSWORD`, `MAIL_FROM_ADDRESS`, `MAIL_FROM_NAME`.

The current `.env.example` uses SQLite at `/tmp/database.sqlite` as a temporary fallback. This is not persistent storage. If the application later stores durable records, use a managed external database and set `DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` in Vercel. The container includes `pdo_mysql` and `pdo_sqlite`.

## Deploy

After committing these files to the GitHub repository, trigger a new Preview Deployment first. Check `/up`, homepage, all dynamic Laravel routes, Product detail modals, and Contact Us SMTP delivery before promoting to Production.

## Important runtime note

Vercel container deployments are stateless. Do not rely on local container disk for durable uploads, database files, sessions, or caches. The Contact Us implementation attaches the uploaded business card to the outgoing email during the request, so it does not require persistent local uploads. Use external storage if future features need to retain uploaded files.

The Docker image build itself must be tested on the Vercel build environment or locally with Docker before production. This patch is configured from Vercel's documented Laravel + FrankenPHP deployment pattern, but no Docker engine was available in the preparation environment to run a full image build here.
