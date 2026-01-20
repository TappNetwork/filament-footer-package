# Filament Footer Package

Adds a customizable copyright footer to all your Filament panels with full translation support.

## Requirements

- PHP 8.2+
- Laravel 11+
- Filament 4.x / 5.x

## Installation

1. Install the package via Composer:

```bash
composer require tapp/filament-footer
```

2. Publish the configuration file (recommended):

```bash
php artisan vendor:publish --tag="filament-footer-config"
```

3. Publish the translations (optional, if you want to customize the footer text):

```bash
php artisan vendor:publish --tag="filament-footer-translations"
```

4. Publish the views (optional, if you want to customize the footer template):

```bash
php artisan vendor:publish --tag="filament-footer-views"
```

## Configuration

After publishing the config file, you can customize the footer in `config/filament-footer.php`:

```php
return [
    // Company name displayed in the copyright message
    'company_name' => env('FOOTER_COMPANY_NAME', 'Tapp Network'),

    // Company website URL
    'company_url' => env('FOOTER_COMPANY_URL', 'https://tappnetwork.com'),
    
    // ... other options
];
```

### Environment Variables

You can also configure the footer using environment variables in your `.env` file:

```env
FOOTER_COMPANY_NAME="Your Company"
FOOTER_COMPANY_URL="https://yourcompany.com"
```

## Usage

The footer will automatically appear at the bottom of all your Filament panels once the package is installed. By default, it displays:

```
{app.name} is provided by {company_name}. © {year} {company_name}. All rights reserved.
```

Where:
- `{app.name}` is your application's name from `config('app.name')`
- `{company_name}` is from `config('filament-footer.company_name')`
- `{year}` is the current year
- The company name is linked to `config('filament-footer.company_url')`

## Customization

### Method 1: Configuration (Easiest)

Change the company name and URL in your config or `.env` file (or use the env variables):

```php
// config/filament-footer.php
'company_name' => 'My Company',
'company_url' => 'https://mycompany.com',
```

### Method 2: Translations (For Multilingual Sites)

Publish and modify the translation files to change the copyright message format:

```bash
php artisan vendor:publish --tag="filament-footer-translations"
```

Then edit `lang/vendor/filament-footer/en/footer.php`:

```php
return [
    'copyright_message' => 'Powered by :company_link | © :year :company_name',
    'company_link_text' => ':company_name',
];
```

### Method 3: Views (For Complete Control)

Publish and modify the Blade template:

```bash
php artisan vendor:publish --tag="filament-footer-views"
```

Then customize `resources/views/vendor/filament-footer/footer.blade.php` to change:
- The entire HTML structure
- Styling and layout
- Add additional links or information

## Styling

The footer includes:
- Responsive design
- Dark mode support
- Centered text layout
- Proper color contrast for accessibility
- Tailwind CSS classes compatible with Filament

## License

This package is open-sourced software licensed under the MIT license.
