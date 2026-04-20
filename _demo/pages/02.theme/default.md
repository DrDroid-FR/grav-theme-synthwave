---
title: Theme
menu: Theme
---

# Synthwave Theme

**Synthwave** is a retro 80s inspired neon synthwave theme for Grav CMS (tested on Grav 1.7.40 and 1.8.0-beta.29).

## Description

Retro 80s **Synthwave** Theme - A visually stunning theme featuring neon colors, animated synthwave aesthetics, and custom typography.

## Features

- Retro 80s synthwave aesthetic with neon colors (pink, cyan, purple, orange)
- Animated hero section with retro sun, perspective grid, and city skyline (customizable from the admin)
- Customizable logo (text or image)
- Google Fonts integration (Orbitron & Share Tech Mono)
- Custom scrollbar and form styling
- Background music support with play button and **persistent playback across page navigation**
  - done via AJAX'd the all website, can be disabled in case of issues in theme parameters.
- Fully responsive design
- **Mobile support**:
  - Fade-in menu with scale animation
  - Touch-friendly navigation
  - GPU-accelerated hero backgrounds
- **Quark-compatible page templates**:
  - Default, Item, Blog templates
  - Error page template
  - Modular templates (hero, text, features, gallery)
- Custom contact page with retro fax modem styling
- Animated footer with heartbeat effect
- **VHS effect**: Retro TV glitch effect with scanlines, noise, flicker, and chromatic aberration (can be enabled in settings)

## Installation

1. Download the theme as a ZIP file
2. Extract to `user/themes/synthwave`
3. Clear Grav cache
4. Set theme as default in system configuration

## Configuration

The theme can be configured through the Grav Admin Panel under **Theme > Synthwave**.

### Available Options

- **Production Mode** (Toggle) - Enable production mode for optimized loading
- **Site Name** (Text) - Override the site name displayed in the header
- **Enable Logo Image** (Toggle) - Use an image as the logo instead of text
- **Logo Image File** (File) - Upload your logo image (SVG, PNG, etc.)
- **Background Music** (File) - Select an MP3 file from the songs folder
- **Hide Play Button** (Toggle) - Hide the music play button in the hero
- **Enable AJAX Navigation** (Toggle) - Enable smooth page transitions without page reload - keeps music playing across pages
- **Enable VHS Effect** (Toggle) - Add retro VHS glitch effect overlay with scanlines, noise, flicker, chromatic aberration

## Usage

### Site Name
The default site name is "SYNTHWAVE". To change it:
1. Edit the Site Name field in the theme settings
2. Save and reload the page

### Logo Image
To use a custom logo image:
1. Enable "Enable Logo Image" toggle
2. Upload your logo (SVG, PNG, etc.) in the Logo Image File field
3. Save the page and refresh to see the changes

Note: Upload the image first, **then** enable the toggle to avoid errors.

### Background Music
To use your own background music:
1. Upload an MP3 file in the Background Music field
2. Save the page

Notes: Only one song can be stored. The default song "Midnight Pulse" is located in `assets/` folder. To replace, delete the existing file first, save, then upload a new one and save again.

### Synthwave Modal Image
The theme automatically detects links ending with `?lightbox` and opens them in a synthwave modal.

Example in Markdown:
```markdown
[Title of the image](image-name.png?lightbox)
```

### AJAX Navigation
When enabled, pages load without full refresh (music keeps playing). If pages don't load correctly or you see errors:
- Try disabling AJAX Navigation
- Clear browser cache
- Check browser console for JavaScript errors

### VHS Effect
Disabled by default. To enable:
1. Toggle "Enable VHS Effect" in settings
2. A sticky panel appears in bottom-right with effect checkboxes
3. By default, Scanlines, Noise, and Flicker are automatically enabled
4. Toggle Chromatic on/off as needed, or uncheck any effect to disable it

### Custom Hero Decoration
Replace the default synthwave decorations (sun, city, grid, sky) with custom media:

1. **Custom Image**: Select "Custom Background Image" in Hero Decoration Style, then upload an image
2. **Custom Video**: Select "Custom Background Video", then upload a video (mp4, webm, ogg)
3. **Custom Twig**: Select "Custom Twig", enter your template filename in the Custom Twig Template field
4. **No Decoration**: Select "None" for a clean background

The Hero Overlay toggle adds a dark layer over custom media for better text readability.

Example included: `custom-hero.html.twig`

## Pages

- **History** - Landing page (synthwave genre history)
- **Theme** - Theme presentation and download links
- **Typography** - Typography showcase
- **Contact** - Retro cellphone icon - Contact form with retro fax modem header
- **Grav**  - About Grav CMS (disabled on the demo, kept for reference)

## Requirements

- Grav CMS >=1.6.0 or higher

## Credits

- Theme by [Dr Droid](https://github.com/DrDroid-FR/)
- Email: gravdev@drdroid.fr
- Website: [https://github.com/DrDroid-FR/grav-theme-synthwave](https://github.com/DrDroid-FR/grav-theme-synthwave)
- Demo: [https://drdroid.fr/synthwave](https://drdroid.fr/synthwave)
- Inspired by: [to the future](https://codepen.io/propjockey/pen/VwKQENg) by Jane Ori a.k.a. [propjockey](https://propjockey.io/)
- Music: Midnight_Pulse by Dr Droid
- Thanks to: Grav team for their amazing CMS

## License

MIT - See LICENSE file for details.

## Keywords

synthwave, retro, 80s, neon, theme, grav