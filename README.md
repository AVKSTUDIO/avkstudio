# AVK Studio Website

This is the official website for **AVK Studio**, a professional photography business in Malaysia.  
It showcases our services, photo albums, pricing, and contact details.

---

## Features
- Dynamic homepage with hero slider
- Portfolio albums powered by Google Sheets + Apps Script
- Pricing page with packages
- Website building & custom software services
- Integrated comments via Giscus
- SEO optimized with meta tags and OG images
- Responsive design (Bootstrap)

---

## Pages
- **Home (`index.php`)** – Main landing page with slider and call-to-action
- **Pricing (`pricing.php`)** – Photography service packages
- **Album (`album.php`)** – Dynamic album viewer with highlights
- **Website Building (`webbuild.php`)** – Web development packages
- **Custom Software (`customsoftware.php`)** – Tailored business solutions

---

## Requirements
- PHP server (Apache, Nginx, or XAMPP for local testing)
- MySQL (optional, for future database features)
- Internet connection (for Google Sheets integration & external libraries)

---

## Installation
1. Clone or download this repository
2. Place files in your PHP server directory (`htdocs` for XAMPP, `/var/www/html` for Apache)
3. Update `header.php` and `footer.php` for branding & navigation
4. Configure `album.php` with your Google Apps Script endpoint

---

## Usage
- Run locally:  
  ```bash
  php -S localhost:8000
  ```
- Visit `http://localhost:8000` in your browser

---

## Future Enhancements
- Contact form integration with email
- Photo purchase & download system
- CMS for managing albums
- Multilingual support

---

## License
This project is for **AVK Studio’s internal & commercial use**.  
Not open-source unless specified otherwise.
