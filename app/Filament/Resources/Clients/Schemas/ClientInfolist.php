<?php

namespace App\Filament\Resources\Clients\Schemas;

use App\Enums\ClientStatus;
use Filament\Schemas\Schema;
use Filament\Infolists\Components\TextEntry;

class ClientInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('email')
                    ->label('Email address'),
                TextEntry::make('phone')
                    ->placeholder('-'),
                TextEntry::make('address')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('city')
                    ->placeholder('-'),
                TextEntry::make('status')
                    ->badge()
                    ->color(fn(string $state): string => ClientStatus::tryFrom($state)?->getColor() ?? 'active')
                    ->formatStateUsing(fn(string $state) => ClientStatus::tryFrom($state)?->label() ?? $state),
                TextEntry::make('creator.name')
                    ->label('Created by')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('updater.name')
                    ->label('Updated by')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('deleter.name')
                    ->label('Deleted by')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
