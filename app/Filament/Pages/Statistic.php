<?php

namespace App\Filament\Pages;

use BackedEnum;
use Filament\Pages\Dashboard;
use Filament\Facades\Filament;
use App\Filament\Widgets\TaskChart;
use App\Filament\Widgets\RecentTasks;
use App\Filament\Widgets\ProjectChart;
use App\Filament\Widgets\RecentProjects;
use App\Filament\Widgets\SystemOverview;

class Statistic extends Dashboard
{

    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-document-text';
    protected static string $routePath = 'statistic';
    protected static ?string $title = 'Statistik Project';
    protected static ?int $navigationSort = 1;

    public function getWidgets(): array
    {
        return [
            SystemOverview::class,
            RecentProjects::class,
            RecentTasks::class,
            ProjectChart::class,
            TaskChart::class
        ];
    }
    public static function canAccess(): bool
    {
        $user = Filament::auth()->user();

        return $user && $user->can('page_Statistic');
    }



}
