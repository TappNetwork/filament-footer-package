# Filament Footer Package

A simple Filament v4 package that adds a copyright footer to all your Filament panels with Tapp Network branding.

## Installation

1. Install the package via Composer:

```bash
composer require tapp/filament-footer
```

2. Publish the views (optional, if you want to customize the footer template):

```bash
php artisan vendor:publish --tag="filament-footer-views"
```

## Usage

The footer will automatically appear at the bottom of all your Filament panels once the package is installed. It displays:

```
{app.name} is provided by Tapp Network. © 2026 Tapp Network. All rights reserved.
```

Where `{app.name}` is your application's name from `config('app.name')`.

## Footer Content

The footer displays:
- Your application name (from `config('app.name')`)
- "is provided by" text
- "Tapp Network" as a clickable link to https://tappnetwork.com
- Copyright notice with current year

## Customization

You can customize the footer by publishing the views:

```bash
php artisan vendor:publish --tag="filament-footer-views"
```

Then modify `resources/views/vendor/filament-footer/footer.blade.php` to change:
- The text content
- Link destinations
- Styling and layout
- Add additional links or information

## Styling

The footer includes:
- Responsive design
- Dark mode support
- Centered text layout
- Border separator
- Proper color contrast for accessibility

## Requirements

- PHP 8.1+
- Laravel 11+
- Filament 4.x

## License

This package is open-sourced software licensed under the MIT license.