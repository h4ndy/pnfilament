<?php

namespace App\Filament\Widgets;

use App\Models\Task;
use App\Models\User;
use App\Models\Client;
use App\Models\Project;
use Filament\Support\Icons\Heroicon;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class SystemOverview extends StatsOverviewWidget

{

    protected ?string $heading = 'Analytics';

    protected ?string $description = 'An overview of some analytics.';

    protected static bool $isLazy = false;
    protected function getStats(): array
    {

        return [

            Stat::make('Users', User::count())
                ->icon(Heroicon::Users)
                ->description('Number of users')
                ->descriptionIcon('heroicon-m-arrow-trending-up', IconPosition::Before),
            Stat::make('Clients', Client::count())
                ->description('Number of clients')
                ->icon(Heroicon::UserCircle),
            Stat::make('Projects', Project::count())
                ->description('Number of projects')
                ->icon(Heroicon::Cube),
            Stat::make('Tasks', Task::count())
                ->description('Number of taskas')
                ->icon(Heroicon::QueueList),
        ];
    }

}
