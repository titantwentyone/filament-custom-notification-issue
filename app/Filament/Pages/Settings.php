<?php

namespace App\Filament\Pages;

use App\Filament\Notifications\CustomNotification;
use Filament\Actions\Action;
use Filament\Forms\Components\Actions;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Pages\Page;

class Settings extends Page implements HasForms
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.settings';

    protected function getHeaderActions(): array
    {
        return [
            Action::make('click_me')
                ->label('Click Me')
                ->action(function() {
                    CustomNotification::make('testing')
                        ->persistent()
                        ->title('Test message')
                        ->size('lg')
                        ->send();
                })
        ];
    }
}
