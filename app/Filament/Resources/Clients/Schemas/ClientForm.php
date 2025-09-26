<?php

namespace App\Filament\Resources\Clients\Schemas;

use App\Enums\ClientStatus;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;

class ClientForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('phone')
                    ->tel(),
                Textarea::make('address')
                    ->columnSpanFull(),
                TextInput::make('city'),
                ToggleButtons::make('status')
                    ->options(ClientStatus::toArray())
                    ->colors(ClientStatus::toArray('getColor'))
                    ->grouped()
                    ->default('active')
                    ->markAsRequired()
                    ->enum(ClientStatus::class)
                    ->required(),
            ]);
    }
}
