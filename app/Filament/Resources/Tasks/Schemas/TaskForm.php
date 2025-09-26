<?php

namespace App\Filament\Resources\Tasks\Schemas;

use App\Enums\Priority;
use App\Enums\ProjectStatus;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;

class TaskForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                Select::make('project_id')
                    ->relationship('project', 'name')
                    ->preload()
                    ->searchable()
                    ->required(),
                Select::make('category_id')
                   ->relationship('category', 'name')
                    ->preload()
                    ->searchable()
                    ->required(),
                Select::make('status')
                    ->options(ProjectStatus::toArray())
                    ->default('pending')
                    ->required(),
                Select::make('priority')
                    ->options(Priority::toArray())
                    ->default('medium')
                    ->required(),
                DatePicker::make('due_date'),
                FileUpload::make('image_path')
                    ->image(),
                Select::make('assigned_to')
                    ->relationship('assigner','name')
                    ->searchable()
                    ->preload(),
            ]);
    }
}
