<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Copyright Text
    |--------------------------------------------------------------------------
    |
    | The copyright text that will be displayed in the footer. You can use
    | placeholders like {year} which will be automatically replaced.
    |
    */
    'copyright' => '© {year} ' . env('APP_NAME', 'Your Company'),

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