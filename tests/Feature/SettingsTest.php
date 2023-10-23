<?php

use App\Filament\Notifications\CustomNotification;

test('will store a custom property', function() {

    \Pest\Livewire\livewire(\App\Filament\Pages\Settings::class)
        ->callAction('click_me')
        ->assertNotified(
            CustomNotification::make('testing')
                ->title('Test message')
                ->size('lg')
        );
});
