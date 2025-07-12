# Crafton - Zadanie rekrutacyjne

## Description

This project built with HydePHP - a static site generator for rapidly creating blogs, documentation sites, and more using Markdown and Blade templates.

## Project Overview

This website contains following sections:
- **Hero**
- **Inwestycje**
- **Poradnik** 
- **Contact**

## Technology Stack

- **Backend**: PHP 8.2+ with HydePHP Framework v2.0
- **Frontend**: TailwindCSS v4.1.4 with Vite v6.3.5
- **Templates**: Blade templating engine
- **Fonts**: Clash Display font family
- **Build Tool**: Vite with HydePHP plugin

## Getting Started

### Prerequisites
- PHP 8.2 or higher
- Composer
- Node.js and npm (for frontend assets)

### Installation

1. Clone repository:
```bash
git clone git@github.com:netserwisIT/crafton-zadanie.git
cd crafton-zadanie
```

2. Install PHP dependencies via Composer:
```bash
composer install
```

3. Install Node.js dependencies:
```bash
npm install
```

4. Build the static site:
```bash
npm run build
php hyde build
```

### Development

Start the development server:
```bash
npm run dev
php hyde serve
```

Build for production:
```bash
npm run build
php hyde build
```

## Project Structure

```
├── _docs/                  # Documentation files
├── _media/                 # Media assets (compiled)
├── _pages/                 # Blade page templates
│   ├── index.blade.php    # Homepage
│   └── 404.blade.php      # 404 error page
├── _posts/                 # Blog posts (if any)
├── app/                    # Application logic
│   ├── Providers/         # Service providers
│   └── storage/           # Framework storage
├── config/                 # Configuration files
├── public/                 # Generated static site
├── resources/              # Source assets and views
│   ├── assets/            # CSS, JS, fonts, images
│   └── views/             # Blade components and layouts
│       ├── components/    # Reusable components
│       └── sections/      # Page sections
└── vendor/                 # Composer dependencies
```

## Available Commands

- `php hyde build` - Build the static site
- `php hyde serve` - Serve the site locally (if available)
- `npm run dev` - Start Vite development server
- `npm run build` - Build frontend assets
- `composer install` - Install PHP dependencies
- `npm install` - Install Node.js dependencies

## Components

The project uses a component-based architecture with Blade components:

### Elements
- Button components (button, button-link, button-icon)
- Form elements (input-text, input-label, textarea)
- Typography (heading)
- Media (image)

### Sections
- Hero section
- Investments (inwestycje) section
- Guide (poradnik) section
- Contact section

### Partials
- Navigation
- Logo
- Mobile menu

## Styling

The project uses TailwindCSS with custom typography plugin and Clash Display font family for modern, clean design.