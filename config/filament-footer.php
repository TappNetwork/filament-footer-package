<?php

declare(strict_types=1);

return [
    /*
    |--------------------------------------------------------------------------
    | Company Name
    |--------------------------------------------------------------------------
    |
    | The company name that will be displayed in the footer copyright message.
    |
    */
    'company_name' => env('FOOTER_COMPANY_NAME', 'Tapp Network'),

    /*
    |--------------------------------------------------------------------------
    | Company URL
    |--------------------------------------------------------------------------
    |
    | The company website URL that will be linked in the footer.
    |
    */
    'company_url' => env('FOOTER_COMPANY_URL', 'https://tappnetwork.com'),

    /*
    |--------------------------------------------------------------------------
    | Show Links
    |--------------------------------------------------------------------------
    |
    | Whether to show additional links like Privacy Policy and Terms of Service
    | in the footer.
    |
    */
    'show_links' => false,

    /*
    |--------------------------------------------------------------------------
    | Privacy Policy Link
    |--------------------------------------------------------------------------
    |
    | The URL for the privacy policy page. Leave null to hide the link.
    |
    */
    'privacy_link' => null,

    /*
    |--------------------------------------------------------------------------
    | Terms of Service Link
    |--------------------------------------------------------------------------
    |
    | The URL for the terms of service page. Leave null to hide the link.
    |
    */
    'terms_link' => null,

    /*
    |--------------------------------------------------------------------------
    | Footer Position
    |--------------------------------------------------------------------------
    |
    | Where the footer should be positioned. Options are 'bottom' (fixed at
    | bottom) or 'inline' (flows with content).
    |
    */
    'position' => 'inline',

    /*
    |--------------------------------------------------------------------------
    | Custom CSS Classes
    |--------------------------------------------------------------------------
    |
    | Additional CSS classes to apply to the footer container.
    |
    */
    'css_classes' => '',
];
