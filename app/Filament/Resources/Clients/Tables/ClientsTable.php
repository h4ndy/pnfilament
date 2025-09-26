<?php

namespace App\Filament\Resources\Clients\Tables;

use Filament\Tables\Table;
use App\Enums\ClientStatus;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Actions\ForceDeleteBulkAction;

class ClientsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email address')
                    ->searchable(),
                TextColumn::make('phone')
                    ->searchable(),
                TextColumn::make('city')
                    ->searchable(),
                TextColumn::make('status')
                    ->badge()
                    ->color(fn(string $state): string => ClientStatus::tryFrom($state)?->getColor() ?? 'active')
                    ->formatStateUsing(fn(string $state) => ClientStatus::tryFrom($state)?->label() ?? $state),
                TextColumn::make('creator.name')
                    ->label('Created by')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('updater.name')
                    ->label('Updated by')
                    ->numeric()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('deleter.name')
                    ->label('Deleted by')
                    ->numeric()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
                TrashedFilter::make()
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make()->before(function ($record, DeleteAction $action) {
                    // Mutasi / update record dulu sebelum dihapus
                    $record->update([
                        'deleted_by' => auth()->id(),
                    ]);

                    // kalau mau batal hapus setelah mutate:
                    // $action->cancel();


                }),
                Action::make('restore')
                ->label('Restore')
                ->color('success')
                ->icon('heroicon-o-arrow-path')
                ->requiresConfirmation()
                ->visible(fn ($record) => $record->trashed()) // hanya tampil kalau soft deleted
                ->action(fn ($record) => $record->restore()),

            // 🔹 Force Delete Action
            Action::make('forceDelete')
                ->label('Hapus Permanen')
                ->color('danger')
                ->icon('heroicon-o-trash')
                ->requiresConfirmation()
                ->visible(fn ($record) => $record->trashed())
                ->action(fn ($record) => $record->forceDelete()),


            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
