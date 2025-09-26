<?php

namespace App\Filament\Resources\Tasks\Tables;

use App\Enums\Priority;
use Filament\Tables\Table;
use App\Enums\ProjectStatus;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class TasksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('project.name')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('category.name')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('status')
                    ->badge()
                     ->color(fn(string $state): string => ProjectStatus::tryFrom($state)?->getColor() ?? 'pending')
                    ->formatStateUsing(fn(string $state) => ProjectStatus::tryFrom($state)?->label() ?? $state),
                TextColumn::make('priority')
                    ->badge()
                     ->color(fn(string $state): string => Priority::tryFrom($state)?->getColor() ?? 'low')
                    ->formatStateUsing(fn(string $state) => Priority::tryFrom($state)?->label() ?? $state),
                TextColumn::make('due_date')
                    ->date()
                    ->sortable(),
                ImageColumn::make('image_path'),
                TextColumn::make('assigner.name')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('creator.name')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('updater.name')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('deleted_by')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
