# Product Requirements Document

**Product:** Excellence Impact African Awards (EIAA) website
**Version:** 1.0 (front-facing phase)
**Status:** Ready for build

## 1. Overview

Excellence Impact African Awards (EIAA) is a pan-African awards programme that recognises individuals and organisations for outstanding achievement in artificial intelligence. This document defines the first phase of the website: a polished, multi-page, front-facing site that presents the awards, explains how they work, and builds credibility. Nominations, voting and winner management come in later phases and are out of scope here.

## 2. Goals

1. Present EIAA as a prestigious, credible and modern institution from the first visit.
2. Clearly explain what the awards are, who can be recognised, and how the process works.
3. Give visitors an easy way to get in touch (partners, sponsors, press, prospective nominees).
4. Be built so nominations, voting and a winners archive can be added later without a redesign.

## 3. Audience

- AI practitioners, researchers, founders and students across Africa (potential nominees)
- Organisations, universities and startups that may nominate or sponsor
- Potential judges, partners and sponsors
- Media and the wider public

## 4. Scope

**In scope (phase 1):** six pages (Home, Categories, Guidelines, Judging, About, Contact), shared header and footer, responsive layout, accessible and SEO-ready markup, content held in editable data files.

**Out of scope (phase 1):** nomination forms, voting, user accounts, payments, admin dashboard or CMS, backend services, news or blog, winners archive, partners page, analytics.

**Open decision:** the method for choosing winners (judging panel, public vote, or both) is not decided. All copy about selection must be written so it stays true whichever method is chosen, and it must live in one clearly marked content block so it is easy to change.

## 5. Brand and design direction

### 5.1 Feel

Posh, classy, prestigious and restrained. Think formal awards ceremony, not tech startup. Generous whitespace, confident typography, calm and considered layouts.

### 5.2 Colour palette (starting point, may change)

| Role | Name | Hex | Usage |
| --- | --- | --- | --- |
| Primary | Imperial Blue | #11296b | Header, footer, hero overlay, headings, dark sections |
| Secondary | Steel Azure | #00509d | Links, secondary buttons, hover and focus states |
| Background | Platinum | #ededed | Main page background and light sections |
| Accent | Bright Amber | #ffcb05 | Primary buttons and key highlights, used sparingly |
| Soft accent | Mustard | #ffdb57 | Optional subtle tints only, never competing with Amber |

Define all colours as design tokens (CSS variables or Tailwind theme values) so the palette can be changed in one place.

Contrast rules: never place Amber or Mustard text on Platinum. Gold is used as a button fill or on Imperial Blue sections, with Imperial Blue text on gold fills. All text must meet WCAG AA contrast.

### 5.3 Typography

- Headings: an elegant serif (for example Cormorant Garamond or Playfair Display)
- Body and interface text: a clean sans-serif (for example Inter or Manrope)
- Comfortable line length, generous line height, clear hierarchy

### 5.4 Logo

No logo exists yet. Use a simple, refined Africa continent icon (inline SVG) beside the text wordmark "Excellence Impact African Awards". Build it as a single swappable component so the final logo can replace it easily.

### 5.5 Imagery

- Home hero uses one large image with text beside or over it. Use a placeholder image now, structured so it is easy to replace.
- Avoid cliché AI imagery (glowing brains, robots, blue circuit patterns). Prefer dignified, human, African-centred photography and elegant abstract textures.
- All images need meaningful alt text and must be optimised and lazy loaded (except the hero).

### 5.6 Hard design rules

- No countdown timers anywhere.
- No decorative accent lines: no small bars, underlines or rules under headings, no coloured borders on the top or side of cards, no divider lines used as ornament.
- No em dashes in any copy, headings, buttons or metadata.
- Restrained motion only: subtle fades and hover transitions. No parallax, marquee or flashy animation.
- Keep layouts simple. Prefer spacing and typography over boxes and ornament.

## 6. Global components

**Header:** logo and wordmark on the left, navigation on the right (Home, Categories, Guidelines, Judging, About, Contact). Collapses to an accessible mobile menu. Sticky is optional but must not feel heavy.

**Footer:** logo and short description, the six page links, contact email placeholder, social link placeholders, copyright line.

**Primary call to action:** because nominations are not open yet, the main site buttons are "View Categories" and "Read the Guidelines". Build a reusable "Nominate" button component that is not shown yet (or shown in a disabled "Opening soon" state) so it can be wired up in phase 2.

## 7. Pages

### 7.1 Home

1. **Hero:** image and text. Headline, one supporting sentence, two buttons (View Categories, Read the Guidelines).
2. **Introduction:** two or three sentences on what EIAA is and why it exists.
3. **Categories preview:** a grid of the award categories, each linking to the Categories page.
4. **How it works:** three simple stages (for example Nominate, Evaluate, Celebrate) with short descriptions. Dates shown as "To be announced".
5. **Why it matters:** a short statement on recognising African excellence in AI.
6. **Judging teaser:** one short paragraph linking to the Judging page.
7. **Closing band:** an Imperial Blue section with a short invitation and a link to Contact.

### 7.2 Categories

- Intro paragraph.
- A list or grid of all award categories. Each has a name, a short description, and who it is for.
- Category content lives in a single data file so it is easy to edit.
- Use the placeholder categories below, clearly marked as editable:
  - AI Innovation of the Year
  - AI for Social Good
  - Outstanding Research Contribution
  - Emerging AI Leader
  - AI Startup of the Year
  - AI in Education
  - Responsible AI and Policy Leadership
  - Lifetime Contribution to African AI

### 7.3 Guidelines

- Who is eligible (individuals, teams, organisations; African connection criteria as placeholder text).
- What counts as an achievement in AI.
- Evaluation criteria (for example impact, innovation, originality, sustainability, relevance to Africa).
- Nomination process overview, stating that nominations open at a later date.
- Key dates as a simple timeline, all "To be announced".
- Rules and conditions (placeholder).
- FAQ as an accessible accordion.

### 7.4 Judging

- Judging philosophy: fairness, independence, transparency.
- The criteria and how they are applied.
- The panel: cards with photo placeholder, name, title and organisation, all marked "To be announced".
- Integrity: conflict of interest and confidentiality principles.
- How winners are selected: one clearly marked content block, written neutrally, to be finalised once the method is decided.

### 7.5 About

- The story and purpose of EIAA.
- Mission and vision.
- Values (for example excellence, integrity, impact, inclusion).
- Why Africa, why now.
- The organising team placeholder.

### 7.6 Contact

- Short intro for enquiries: general, partnerships and sponsorship, media, nominee questions.
- Contact form (name, email, enquiry type, message) with client-side validation and clear success and error states. There is no backend in phase 1, so isolate the submit handler so a real endpoint can be connected later.
- Email address, social links and location as placeholders.

## 8. Content and tone rules

- Formal, confident and warm. Concise sentences. No hype or buzzwords.
- British English spelling.
- No em dashes anywhere.
- Use the full name on first mention on a page, then EIAA is acceptable.
- Do not claim EIAA is the "first of its kind" until that is verified.
- Mark every piece of unfinalised content as a placeholder in the data files so nothing invented ships as fact. Do not invent real people, sponsors, dates or statistics.

## 9. Technical requirements

- Stack: Laravel with PHP, Blade templates, Vite and Tailwind CSS.
- Mobile-first and fully responsive from 360px to large desktop.
- Semantic HTML, keyboard navigation, visible focus states, skip link, WCAG AA contrast, reduced-motion support.
- SEO: unique title and meta description per page, Open Graph tags, sitemap and robots file, sensible heading structure.
- Performance: optimised images, minimal JavaScript, fonts loaded efficiently, strong Lighthouse scores.
- Content in Laravel configuration (categories, judges, FAQ, timeline, site settings) separate from Blade views.
- Modular, well-named components and a clean folder structure. A short README explaining how to run the site and how to edit content.
- Structure routes so `/nominate`, `/vote` and `/winners` can be added later without restructuring.

## 10. Future phases (not to be built now)

1. Nominations portal
2. Judge dashboard and scoring
3. Public voting, if chosen
4. Winners and Hall of Fame archive
5. News and updates
6. Partners and sponsors page
7. Admin CMS

## 11. Acceptance criteria

- All six pages exist, are linked from the header and footer, and render well on mobile and desktop.
- The palette, typography and logo placeholder follow section 5.
- None of the hard design rules in 5.6 are broken (no countdown, no decorative accent lines, no em dashes).
- The Home hero is an image with text.
- Categories, FAQ, timeline and judge content are editable from data files.
- The contact form validates input and shows clear states.
- The site passes an accessibility check and meets WCAG AA contrast.
- The build runs without errors and the README explains setup and content editing.

## 12. Open decisions

- Final logo and palette
- Final award categories and their descriptions
- Winner selection method
- Dates for nominations, judging and the ceremony
- Domain, contact email and social accounts
- Judges, partners and organising team
