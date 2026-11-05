# Current Website State

This document describes the website as it is currently implemented. It is a snapshot of the public-facing site and its technical behavior, not a launch approval or confirmation that placeholder details are final.

## Overview

Excellence Impact African Awards (EIAA) is a Laravel website introducing a pan-African awards programme that recognises achievement in artificial intelligence. The current site is an informational Phase 1 build. It does not provide an operational nomination, judging, voting, account, CMS, or contact-delivery system.

## Public pages and routes

| Page | Route | Current contents |
|---|---|---|
| Home | `/` | Full-screen photographic hero, programme introduction, eight category highlights, three process stages, programme rationale, judging summary, and contact call to action. |
| Categories | `/categories` | Eight introductory award categories and a reminder that nominations and final category details are pending. |
| Guidelines | `/guidelines` | Eligibility, examples of qualifying achievements, six evaluation criteria, a proposed nomination process, an unconfirmed timeline, rules, and FAQs. |
| Judging | `/judging` | Judging philosophy, criteria, placeholder panel, integrity commitments, and an explicitly unconfirmed selection method. |
| About | `/about` | Story, mission, vision, values, African context, and placeholder organising-team members. |
| Contact | `/contact` | Enquiry types and contact details, plus a server-validated form. |
| Robots | `/robots.txt` | Plain-text robots response. |
| Sitemap | `/sitemap.xml` | XML sitemap listing the six public content pages. |

The six content pages share a header, footer, and layout. The desktop header includes navigation and a nominations status label; smaller screens use an accessible toggle for the mobile menu.

## Homepage hero and visual design

- The homepage hero uses `public/images/hero-award.jpg`, copied from the supplied image `pexels-jibarofoto-13963614.jpg`.
- It uses a full-screen-height section, a cover-cropped background image, a dark blue gradient overlay, vertically centered copy, and two links to Categories and Guidelines.
- The hero headline is larger than the original design, with responsive sizes up to `7xl`; the eyebrow and supporting paragraph are also enlarged.
- The main page containers were widened to a maximum of 1280px and horizontal gutters were reduced to open up the layout. Section vertical spacing was also reduced in the affected areas.
- The palette uses imperial/deep blue, steel blue, platinum, and amber. Typography uses Playfair Display for serif headings and DM Sans for body text, loaded from Google Fonts.
- `public/images/hero-placeholder.svg` remains in the project and is still used as the site favicon. It is no longer the homepage hero image.

## Content and data

Site identity, navigation, contact information, categories, process stages, criteria, timeline, FAQs, judging content, selection-method copy, and About content are configured in `config/eiaa.php` and passed to Blade views by `PageController`.

The site name is Excellence Impact African Awards (EIAA). The configured email is `hello@example.org`; the configured location is Accra, Ghana, explicitly marked as a placeholder. LinkedIn, X, Instagram, and YouTube links currently use `#`.

The following details are explicitly provisional and should be confirmed before launch:

- Award categories, descriptions, and eligibility requirements.
- Judges, panel affiliations, and organising-team members.
- Dates, nomination arrangements, any entry fees, and the final rules.
- The selection method (independent judging, public vote, or a combination).
- Email address, location, and social links.
- Programme descriptions and other introductory copy where indicated as placeholder content.

## Contact form behavior

`POST /contact` validates:

- Name: required string, 2–120 characters.
- Email: required valid email, maximum 254 characters.
- Enquiry type: required; General, Partnerships, Media, or Nominations.
- Message: required string, 20–5000 characters.

On valid submission, the form redirects back with a notice explaining that delivery is not configured. Messages are not sent, stored, or forwarded. Validation errors are displayed alongside their fields.

## Accessibility and metadata

- The shared layout sets English (UK), viewport, page description, canonical URL, Open Graph metadata, and a page title.
- The site includes a skip-to-content link, semantic page landmarks, labelled navigation and form fields, visible keyboard focus styling, and reduced-motion handling.
- Mobile navigation exposes its expanded state and updates its accessible label when toggled.
- The hero image is decorative and has empty alternative text; it loads eagerly.

## Technology and project structure

- Backend: PHP 8.2+ and Laravel 11 or 12, with Blade templates.
- Frontend: Vite, Tailwind CSS 3, and vanilla JavaScript.
- Main content configuration: `config/eiaa.php`.
- Routes: `routes/web.php`.
- Controller and contact validation: `app/Http/Controllers/PageController.php`.
- Shared layout and page templates: `resources/views/layouts/` and `resources/views/`.
- Styles and design tokens: `resources/css/app.css`.
- Mobile menu behavior: `resources/js/app.js`.
- Public images: `public/images/`.

## Local development and build

With PHP/Composer and Node.js 18 or later installed:

```bash
composer install
copy .env.example .env
php artisan key:generate
npm install
npm run build
php artisan serve
```

Open `http://127.0.0.1:8000`. Run `npm run dev` in a separate terminal for Vite development with hot reload. The frontend build was successfully run during the recent layout and hero updates.

## Current exclusions

There is no nomination submission workflow, public voting, user authentication, content-management interface, database-backed award data, or configured contact-message delivery. Dates, official judges, final programme rules, and production contact/social destinations are not yet confirmed.
