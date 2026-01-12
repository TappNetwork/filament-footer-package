# Filament Footer Package

A simple Filament v4 package that adds a copyright footer to all your Filament panels.

## Installation

1. Install the package via Composer:

```bash
composer require yourname/filament-footer
```

2. Publish the configuration file:

```bash
php artisan vendor:publish --tag="filament-footer-config"
```

3. Publish the views (optional, if you want to customize the footer template):

```bash
php artisan vendor:publish --tag="filament-footer-views"
```

## Configuration

After publishing the config file, you can find it at `config/filament-footer.php`. Here are the available options:

```php
return [
    'copyright' => '© {year} Your Company',  // Copyright text
    'show_links' => false,                   // Show additional links
    'privacy_link' => null,                  // Privacy policy URL
    'terms_link' => null,                    // Terms of service URL
    'position' => 'inline',                  // 'inline' or 'fixed'
    'css_classes' => '',                     // Additional CSS classes
];
```

## Usage

The footer will automatically appear at the bottom of all your Filament panels once the package is installed and configured.

### Customization

You can customize the footer appearance by:

1. **Modifying the configuration**: Edit `config/filament-footer.php` to change the copyright text, links, and positioning.

2. **Customizing the view**: After publishing the views, you can modify `resources/views/vendor/filament-footer/footer.blade.php`.

3. **Adding custom CSS**: Use the `css_classes` configuration option to add custom CSS classes.

## Example Configuration

```php
// config/filament-footer.php
return [
    'copyright' => '© {year} My Awesome Company',
    'show_links' => true,
    'privacy_link' => '/privacy-policy',
    'terms_link' => '/terms-of-service',
    'position' => 'inline',
    'css_classes' => 'my-custom-footer',
];
```

## Requirements

- PHP 8.1+
- Laravel 9+
- Filament 3.x

## License

This package is open-sourced software licensed under the MIT license.