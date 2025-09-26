<?php

namespace App\Filament\Resources\Tasks\Schemas;

use App\Enums\Priority;
use App\Enums\ProjectStatus;
use Filament\Schemas\Schema;
use PhpParser\Node\Expr\Print_;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;

class TaskInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('description')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('project_id')
                    ->numeric(),
                TextEntry::make('category_id')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('status')
                    ->badge()
                    ->color(fn(string $state): string => ProjectStatus::tryFrom($state)?->getColor() ?? 'pending')
                    ->formatStateUsing(fn(string $state) => ProjectStatus::tryFrom($state)?->label() ?? $state),
                TextEntry::make('priority')
                    ->badge() ->color(fn(string $state): string => Priority::tryFrom($state)?->getColor() ?? 'pending')
                    ->formatStateUsing(fn(string $state) => Priority::tryFrom($state)?->label() ?? $state),
                TextEntry::make('due_date')
                    ->date()
                    ->placeholder('-'),
                ImageEntry::make('image_path')
                    ->placeholder('-'),
                TextEntry::make('assigned_to')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('creator.name')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('updater.name')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('deleter.name')
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
