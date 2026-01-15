<div class="filament-footer w-full text-center py-4">
    <p class="text-sm text-gray-600 dark:text-gray-400">
        {!! __('filament-footer::footer.copyright_message', [
            'app_name' => config('app.name', 'Portal'),
            'company_name' => config('filament-footer.company_name', 'Tapp Network'),
            'company_link' => '<a href="' . config('filament-footer.company_url', 'https://tappnetwork.com') . '" target="_blank" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300 underline">' . __('filament-footer::footer.company_link_text', ['company_name' => config('filament-footer.company_name', 'Tapp Network')]) . '</a>',
            'year' => date('Y'),
        ]) !!}
    </p>
</div>
