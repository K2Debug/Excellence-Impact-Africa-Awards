# Excellence Impact African Awards (EIAA) — Public Website

The official public website for the **Excellence Impact African Awards** — recognising achievement in artificial intelligence across Africa. Built as a Laravel application with a fully custom editorial design system (deep navy + electric blue + amber accent, square corners, hairline grids, radial glow heroes).

## Stack

| Layer | Choice |
|---|---|
| Framework | Laravel 11/12 (slimmed skeleton — no database, auth or Eloquent) |
| Templates | Blade (`resources/views`) |
| Styling | Tailwind CSS + a custom override layer in `resources/css/app.css` |
| Frontend assets | Vite (`laravel-vite-plugin`) |
| Forms | Native POST + server-side validation (no mail delivery yet) |
| Fonts | DM Sans via Google Fonts; content data lives in config, not a database |

## Getting started

Requires **PHP ≥ 8.2**, **Composer** and **Node/npm**.

```bash
composer install
npm install

# Development
php artisan serve        # Laravel at http://127.0.0.1:8000
npm run dev              # Vite dev server (asset proxying)

# Production build
npm run build
php artisan config:cache && php artisan view:cache
```

## Pages & routes

All page routes are defined in `routes/web.php` and served by `App\Http\Controllers\PageController`:

| Route | Name | Description |
|---|---|---|
| `/` | `home` | Hero, award cluster tiles, timeline, testimonials, judging, closing |
| `/categories` | `categories` | Catalogue of all 200 award entries grouped by cluster |
| `/guidelines` | `guidelines` | Eligibility, criteria, nomination process, dates, rules, FAQs |
| `/judging` | `judging` | Philosophy, panel & criteria, selection method |
| `/about` | `about` | Story, mission, vision, values, African context, team |
| `/contact` | `contact` | Enquiry topics + validated contact form |
| `POST /contact` | `contact.submit` | Validates the enquiry; returns a status flash (sending not wired up yet) |
| `/robots.txt`, `/sitemap.xml` | `robots`, `sitemap` | Blade-rendered SEO files |
| `/up` | — | Laravel health check |

## Content management

There is no database — all copy lives in two places:

- **`config/eiaa.php`** — site identity (name, email, socials, navigation) and page copy: eligibility, criteria, timeline, rules, FAQs, judging, about, values, team. Edit these arrays to update the site text.
- **`config/award-categories.json`** — the 200 award entries (number, name, cluster, slug, people's choice flag). `PageController::page()` loads it fresh on every category-related request, so no cache step is needed after edits.

## Design system notes

The homepage establishes the visual language; the shared partials carry it to every page:

- **`partials/page-hero.blade.php`** — subpage hero: deep navy (`--eiaa-deep`), radial blue/amber glow, film-grain overlay, huge tight-tracked headline, hairline bottom row, vertical `EIAA / NN` index.
- **`partials/section-heading.blade.php`** — uppercase eyebrow + clamp-sized section headline.
- **`partials/header.blade.php`** — transparent overlay header (`.site-header--overlay`) on all pages, so the navy hero runs behind the nav bar.
- **CSS components** in `resources/css/app.css`: `.hairline-grid` (+ `--glow` navy tile variant, `.tile-num` index labels), `.page-hero`, `.sec-h2`, `.eyebrow`, `.text-link`.

Two deliberate global overrides shape the look — don't fight them:

1. `[class*="rounded-"] { border-radius: 0 !important }` — the design is strictly square-cornered, so `rounded-*` utilities in templates are intentionally inert.
2. Several Tailwind colour utilities (`steel`, `imperial`, `platinum-soft`, `amber-*`) are remapped via `!important` rules near the top of `resources/css/app.css`; `:root` custom properties are the source of truth for brand colours.

## Project structure

```
app/Http/Controllers/
  Controller.php           Base controller (Laravel stub)
  PageController.php       All page rendering + contact validation
bootstrap/app.php          App bootstrap (routing, middleware hooks)
config/
  eiaa.php                 Site config + page copy
  award-categories.json    200 award entries
resources/
  css/app.css              Full custom stylesheet (Tailwind input)
  js/app.js                Mobile menu toggle + testimonial rotation
  views/
    layouts/app.blade.php  Base layout (meta/OG tags, @vite)
    partials/              header, footer, page-hero, section-heading, selection-method
    pages/                 home, categories, guidelines, judging, about, contact
    robots.blade.php, sitemap.blade.php
routes/web.php             All routes
```

## Known placeholders

- Contact form **validates but does not send** — wire up a mailer in `PageController::submitContact()` when account details are available.
- Email, location, social URLs, award dates, team and judge names are placeholder values marked "to be confirmed" throughout the copy.
- Team/judge avatar circles are rendered as a placeholder "E" glyph.
- `public/images/hero-award.jpg` is a stand-in hero photograph.

## Audit summary (2026-11)

Recent cleanup pass removed: an unregistered `SetLocale` middleware, an unused dark logo asset, dead copy in `config/eiaa.php` (`categories`, `categories_intro`, `stages`, `judges`), unused Composer autoload entries (`Database\Factories`/`Seeders`), unused Tailwind theme keys (`maxWidth.prose`, `imperial.ink`, `platinum.light`, `amber.soft`), a dead controller mapping of `description`/`who` onto awards, dead CSS (`.content-note`, unused `align` centring rule, duplicated `.process-timeline` mobile rules) and an unstyled `home-hero__title` wrapper.
