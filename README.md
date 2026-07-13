# Breath Easy

A mental wellness website built with PHP, HTML, and CSS. Features a daily mood check-in, session-based journal confirmation, a resource directory, CSS-only affirmation carousel, and guided breathing exercises (Box, Pursed Lip, 4-7-8).

## Requirements

- Docker Desktop (with WSL2 backend if on Windows)

## Running Locally

1. Clone the repo:
   ```bash
   git clone https://github.com/yourusername/breath-easy.git
   cd breath-easy
   ```

2. Start the container:
   ```bash
   docker compose up -d
   ```

3. Visit the site:
   ```
   http://localhost:8080
   ```

4. Stop the container when done:
   ```bash
   docker compose down
   ```

## Docker Setup

The project runs on `php:8.2-apache`, with the project folder mounted directly into the container's web root (`/var/www/html`), so any local file changes are reflected immediately on refresh — no rebuild needed.

```yaml
services:
  web:
    image: php:8.2-apache
    ports:
      - "8080:80"
    volumes:
      - .:/var/www/html
```

## File Structure

```
breath-easy/
├── index.php
├── checkin.php
├── confirm.php
├── resources.php
├── breath.php
├── html/        (header, footer includes)
├── php/         (tips, resources data)
├── css/         (style.css)
└── assets/      (images)
```

## Notes

- Session-based only — no database or persistent storage. Mood/journal data lasts for the current browser session.
- All internal links/paths are relative, so the site works whether hosted at a domain root or in a subfolder.
## Pages & Features
 
| Page | Purpose |
|---|---|
| `index.php` | Home — daily affirmation carousel (CSS `:checked` slider), daily tip (`$tips[]` array via `date('N')`), and a getting-started guide |
| `checkin.php` | Daily mood + journal form — moods arranged in a circle around the journal box; `$_POST` validation, `htmlspecialchars()` sanitizing |
| `confirm.php` | Session-based check-in summary — reads back `$_SESSION['moods']`/`$_SESSION['journal']`, guarded against direct access |
| `resources.php` | Resource directory — `$resources[]` array of associative arrays, rendered with `foreach` into a responsive card grid |
| `breath.php` | Guided breathing — Box, Pursed Lip, and 4-7-8 techniques, each a distinct `@keyframes` animation selected via CSS `:checked` tabs |
 
All pages share a common `header.html`/`footer.html` via PHP `include()`.
 
## Responsive Strategy
 
- **CSS Grid** (`repeat(auto-fit, minmax(...))`) for resource/guide cards — reflows column count automatically, no breakpoints needed.
- **Two breakpoints** (`600px`, `480px`) target phones specifically; tablet and up keep the full desktop layout.
- The circular mood-selector layout (absolute positioning + `rotate`/`translate`) is **replaced**, not scaled, on phone widths — it collapses to a simple stacked list (`position: static`) since the radial layout doesn't scale down cleanly.
- `prefers-reduced-motion` is respected on the breathing animation for accessibility.