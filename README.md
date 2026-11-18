<div align="center">
  <img src="public/assets/images/wira.png" alt="PT Wira Griya" width="190" />

  <h1>Wira Company Profile</h1>

  <p>
    <img src="https://readme-typing-svg.demolab.com?font=Inter&weight=600&size=20&pause=900&color=F4B544&center=true&vCenter=true&width=850&lines=Industrial+Equipment+%26+Engineering+Solutions;Company+Profile+Website+of+PT+Wira+Griya;Built+with+Laravel%2C+Tailwind+CSS+%26+Vite" alt="Animated project description" />
  </p>

  <p>
    <a href="https://github.com/Resync02/company-profile-PT-Wira-Griya"><img src="https://img.shields.io/badge/GitHub-Repository-181717?style=for-the-badge&logo=github" alt="GitHub repository" /></a>
    <img src="https://img.shields.io/badge/Laravel-13-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel 13" />
    <img src="https://img.shields.io/badge/PHP-8.3%2B-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP 8.3 or newer" />
    <img src="https://img.shields.io/badge/Tailwind_CSS-4-06B6D4?style=for-the-badge&logo=tailwindcss&logoColor=white" alt="Tailwind CSS 4" />
    <img src="https://img.shields.io/badge/Vite-8-646CFF?style=for-the-badge&logo=vite&logoColor=white" alt="Vite 8" />
  </p>

  <p><strong>Company profile and product showcase website for PT Wira Griya.</strong></p>
</div>

---

## About the Project

**Wira Company Profile** is the official company profile website project for **PT Wira Griya**. The website is designed to introduce the company, present its industrial business focus and product portfolio, share company and industry updates, and provide a direct inquiry channel for customers and business partners.

The interface is built with a responsive layout and a consistent visual system, with a focus on clear product information and accessible company contact details.

## Website Sections

| Section | Description |
|---|---|
| **Home** | Company introduction, key business areas, featured content, and navigation to the main sections. |
| **About Us** | Company overview, vision and mission, business focus, partners, customers, and company information. |
| **Products** | Main product categories, sub-product pages, product listings, and product detail modals. |
| **News** | Company and industry articles, article details, sharing controls, and frontend comment/reply interactions. |
| **Upcoming Events** | Event listing, status filters, search, sorting, and individual event detail pages. |
| **Contact Us** | Customer inquiry form with email delivery through a configured SMTP account and optional business-card attachment. |

## Product Portfolio

The product catalogue is organized into the following business categories:

### Coating & Painting
- Robotic Painting
- Automatic Guns
- Hand Guns
- Mixing Color Change
- Paint Supply
- Powder Coating

### Hoist & Crane
- Electric Chain Hoist
- Heavy Duty Hoist
- Wire Rope Hoist

### Industrial Machinery
- Labeling & End-of-Line Automation
- Liquid Filling & Capping
- Mixing Process System
- Packaging Solutions
- Powder Material Handling
- Solid Dosage System
- Tube Filling & Sealing

### Other Business Categories
- Solvent Cleaner
- Odor Control

> Product availability, partner brands, technical specifications, and product imagery should be confirmed with the relevant PT Wira Griya product or business team before the information is treated as an official quotation or technical commitment.

## Technology Stack

| Technology | Purpose |
|---|---|
| [Laravel 13](https://laravel.com/) | Backend framework and server-rendered pages |
| [PHP 8.3+](https://www.php.net/) | Application runtime |
| [Blade](https://laravel.com/docs/13.x/blade) | Page templating |
| [Tailwind CSS 4](https://tailwindcss.com/) | Styling and responsive layout |
| [Vite](https://vite.dev/) | Frontend asset development and production build |
| JavaScript | Interactive UI, product modals, filtering, sorting, and frontend comment demo |
| MySQL / SQLite | Database connection options, depending on the environment configuration |

## Getting Started

### Requirements

Install the following tools before running the project locally:

- PHP **8.3 or newer**
- Composer
- Node.js and npm
- A database supported by the configured Laravel connection (for example, MySQL through XAMPP)

### 1. Clone the repository

```bash
git clone https://github.com/Resync02/company-profile-PT-Wira-Griya.git
cd company-profile-PT-Wira-Griya
```

### 2. Install PHP dependencies

```bash
composer install
```

### 3. Create the local environment file

**Windows PowerShell:**

```powershell
Copy-Item .env.example .env
```

**macOS / Linux:**

```bash
cp .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

Edit `.env` and configure the application URL, database connection, and mail settings for your environment. Never commit the real `.env` file or credentials to GitHub.

### 4. Install frontend dependencies

```bash
npm ci
```

### 5. Build frontend assets

```bash
npm run build
```

During frontend development, run the Vite development server in a separate terminal:

```bash
npm run dev
```

### 6. Run the Laravel application

```bash
php artisan serve
```

Open the local URL shown in the terminal, usually `http://127.0.0.1:8000`.

If your local environment uses MySQL, create the database first and set `DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` in `.env`. Run migrations when required by the configured environment:

```bash
php artisan migrate
```

## Contact Inquiry Email

The Contact Us form submits inquiries to the address configured by `CONTACT_INQUIRY_TO` (currently intended to be `info@wira.co.id`). Email delivery requires valid SMTP credentials from the company's approved mail provider.

Configure these variables in the local `.env` file or deployment environment:

```dotenv
MAIL_MAILER=smtp
MAIL_SCHEME=smtp
MAIL_HOST=smtp.your-provider.com
MAIL_PORT=587
MAIL_USERNAME=your-smtp-username
MAIL_PASSWORD=your-smtp-password
MAIL_FROM_ADDRESS=verified-sender@wira.co.id
MAIL_FROM_NAME="PT Wira Griya"
CONTACT_INQUIRY_TO=info@wira.co.id
```

`MAIL_FROM_ADDRESS` must be an address verified or permitted by the SMTP provider. Do not place real credentials in this README, source files, screenshots, or Git commits.

The current business-card attachment validation accepts PDF, JPG, and PNG files with a maximum upload size of 4 MB.

## Current Project Notes

- **News comments and replies:** currently frontend-only interactions for the management presentation. Comments are not saved to a database and reset when the page is refreshed. Backend persistence is a separate planned phase.
- **Upcoming Events:** the dates `10 December 2026` (Industrial Automation Forum) and `17 December 2026` (Surface Coating Technology Workshop) are temporary management-preview dates. Confirm or replace them before publishing an official event schedule.
- **Event details:** times and venues marked “To be announced” require confirmation from the event owner.
- **Email delivery:** the Contact Us email flow requires valid SMTP settings before real-world delivery can be confirmed.
- **Deployment:** configure and test the Laravel runtime, environment variables, mail delivery, and persistent services on the selected hosting provider before public launch. The repository README does not imply that production deployment has already been completed.

## Repository Structure

```text
.
├── app/
│   └── Http/Controllers/       # Application controllers, including contact inquiry
├── bootstrap/                  # Laravel bootstrap files
├── config/                     # Laravel configuration
├── database/                   # Migrations, factories, and seeders
├── public/
│   └── assets/                 # Images, banners, logos, and other public assets
├── resources/
│   ├── js/                     # JavaScript application entry point
│   ├── css/                    # Stylesheets
│   └── views/
│       ├── components/         # Shared Blade components
│       ├── layouts/            # Shared page layouts
│       └── pages/              # Home, About, Product, News, Events, Contact
├── routes/
│   └── web.php                 # Web routes
├── storage/                    # Runtime-generated files and logs
├── tests/                      # Automated tests
├── .env.example                # Environment variable template (safe placeholder values)
├── composer.json               # PHP dependencies and scripts
├── package.json                # Frontend dependencies and scripts
└── vite.config.js              # Vite configuration
```

## Security & Contribution Notes

- Keep `.env` out of version control.
- Do not commit SMTP passwords, API keys, private certificates, or customer-submitted files.
- Review `git status` before every commit.
- Keep `composer.lock` and `package-lock.json` committed to support reproducible dependency installation.
- Confirm product claims, partner references, contact details, event dates, and customer-facing content with PT Wira Griya before public release.

## Project

**Wira Company Profile**  
Developed for **PT Wira Griya**.

Repository: [Resync02/company-profile-PT-Wira-Griya](https://github.com/Resync02/company-profile-PT-Wira-Griya)

---

<div align="center">
  <sub>Industrial equipment. Engineering solutions. Reliable partnerships.</sub>
  <br />
  <img src="https://capsule-render.vercel.app/api?type=waving&color=0:0B2440,100:1D4E89&height=100&section=footer" alt="Decorative footer wave" width="100%" />
</div>
