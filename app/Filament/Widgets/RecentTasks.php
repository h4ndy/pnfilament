<?php

namespace App\Filament\Widgets;

use app\Models\Task;
use App\Enums\Priority;
use Filament\Tables\Table;
use App\Enums\ProjectStatus;
use Filament\Widgets\TableWidget;
use Filament\Actions\BulkActionGroup;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;

class RecentTasks extends TableWidget
{
    protected int | string | array $columnSpan = 'full';
    public function table(Table $table): Table
    {
        return $table
            ->query(fn (): Builder => Task::query())
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
            ])
            ->filters([
                //
            ])
            ->headerActions([
                //
            ])
            ->recordActions([
                //
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    //
                ]),
            ]);
    }
}
