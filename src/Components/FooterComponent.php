<?php

namespace YourName\FilamentFooter\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class FooterComponent extends Component
{
    public string $copyright;

    public function __construct()
    {
        $this->copyright = config('filament-footer.copyright', '© ' . date('Y') . ' ' . config('app.name', 'Your Company'));
    }

    public function render(): View
    {
        return view('filament-footer::footer');
    }
}