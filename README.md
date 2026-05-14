# Super Guttering Services WordPress Theme

A modern, responsive WordPress theme built with Tailwind CSS for Super Guttering Services, a professional guttering maintenance company based in Salisbury, UK.

## Features

- Modern, clean design with Tailwind CSS
- Fully responsive layout
- Custom homepage template
- Service showcase sections
- Contact form ready
- SEO optimized
- Fast loading

## Installation

1. Upload the theme folder to `/wp-content/themes/`
2. Navigate to the theme directory in terminal
3. Run `npm install` to install dependencies
4. Run `npm run build` to compile Tailwind CSS
5. Activate the theme in WordPress admin

## Development

To work on the theme with live CSS compilation:

```bash
npm run dev
```

This will watch for changes in your PHP files and automatically recompile the CSS.

## Building for Production

To create a minified production build:

```bash
npm run build
```

## Customization

### Colors

Edit the color scheme in `tailwind.config.js`:
- Primary colors: Blue tones for CTAs and accents
- Secondary colors: Neutral grays for text and backgrounds

### Fonts

The theme uses:
- **Inter** for body text
- **Poppins** for headings

Change fonts in `tailwind.config.js` and update the Google Fonts link in `functions.php`.

### Menus

The theme supports two menu locations:
- **Primary Menu**: Main navigation in header
- **Footer Menu**: Links in footer

Configure these in Appearance > Menus.

### Widgets

Widget areas available:
- Sidebar
- Footer 1, 2, 3

## Support

For support, contact Super Guttering Services.
