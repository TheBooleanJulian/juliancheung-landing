<div align="center">

# Julian Cheung — Landing Page

**Personal landing page for Julian Cheung Jun Yan, linking his three ventures in one place.**

![HTML](https://img.shields.io/badge/-HTML-E34F26?logo=html5&logoColor=white)
![CSS](https://img.shields.io/badge/-CSS-1572B6?logo=css3&logoColor=white)
![PHP](https://img.shields.io/badge/-PHP-777BB4?logo=php&logoColor=white)
![License](https://img.shields.io/badge/license-MIT-00D4C8.svg)

</div>

---

## What it does

A minimal static landing page that serves as the public face for Julian Cheung Jun Yan, surfacing his three active ventures — Accurova (photography & digital media), TheBooleanJulian (software & automation), and Educare4u (private tuition in Science & Maths) — from a single URL at [juliancheung.com](https://juliancheung.com/).

## Features

- Single-page hub linking all three ventures with shared CSS styling
- BNI biography subpage for networking/referral context, linked from the contact section
- WordPress-compatible PHP template for drop-in use as a page template
- Standalone static HTML version (`index.html`) for zero-dependency hosting

## Tech Stack

| Layer | Choice |
|---|---|
| Frontend | Single-file HTML + CSS |
| WordPress variant | PHP page template |

## Project Structure

```
juliancheung-landing/
|-- index.html              # Static site root
|-- landing-style.css       # Shared styles for the landing page
|-- bni-bio.html            # BNI biography subpage
|-- bni-bio-style.css       # Styles for BNI subpage
`-- template-landing.php    # WordPress page template
```

## Status / Roadmap

- [x] Static landing page live at juliancheung.com
- [x] BNI biography subpage
- [x] Shared CSS extracted for maintainability
- [x] WordPress PHP template

## Changelog

- **2026-06-27** — Added BNI biography sheet as a subpage (`bni-bio.html`), linked from the main contact section
- **2026-06-27** — Extracted shared styles into `landing-style.css`; renamed entry file to `index.html`
- **2026-06-27** — Initial landing page commit

## License

MIT

---

<div align="center">
<sub>Built by <a href="https://github.com/TheBooleanJulian">@TheBooleanJulian</a></sub>
</div>