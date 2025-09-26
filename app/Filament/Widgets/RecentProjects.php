<?php

namespace App\Filament\Widgets;

use App\Models\Project;
use Filament\Tables\Table;
use App\Enums\ProjectStatus;
use Filament\Widgets\TableWidget;
use Filament\Actions\BulkActionGroup;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;

class RecentProjects extends TableWidget
{
    protected int | string | array $columnSpan = 'full';
    
    public function table(Table $table): Table
    {
        return $table
            ->query(fn (): Builder => Project::query())
            ->columns([
                 TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('code')
                    ->searchable(),
                TextColumn::make('start_date')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('end_date')
                    ->dateTime()
                    ->sortable(),
                ImageColumn::make('image_path'),
                TextColumn::make('status')
                    ->badge()
                    ->color(fn(string $state): string => ProjectStatus::tryFrom($state)?->getColor() ?? 'low')
                    ->formatStateUsing(fn(string $state) => ProjectStatus::tryFrom($state)?->label() ?? $state),
                    TextColumn::make('client.name')
                    ->searchable(),
                TextColumn::make('category.name')
                    ->searchable(),
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
