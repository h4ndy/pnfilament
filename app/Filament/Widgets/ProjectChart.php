<?php

namespace App\Filament\Widgets;

use App\Models\Project;
use Filament\Support\RawJs;
use App\Enums\ProjectStatus;
use Filament\Widgets\ChartWidget;

class ProjectChart extends ChartWidget
{
    protected ?string $heading = 'Project Chart';
    protected ?string $description = 'An Chart of some analytics.';

    protected function getOptions(): RawJs
    {
        return RawJs::make(<<<JS
        {
            plugins: { legend: { display: false }, datalabels: { display: false } },
            scales: { x: { display: false }, y: { display: false } },
            responsive: true,
            maintainAspectRatio: false,
            aspectRatio: 1
        }
        JS);
    }

    protected function getContainerHeight(): ?string
    {
        return '400px';
    }
    protected function getData(): array
    {

        $projects = Project::query()
            ->selectRaw('status, COUNT(*) as total')
            ->groupBy('status')
            ->get();


        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Project',
                    'data' => $projects->pluck('total'),
                    'backgroundColor' => $this->generateColors($projects->count()),
                ],
            ],
            'labels' => array_map(
                fn($status) => ProjectStatus::from($status)->label(),
                $projects->pluck('status')->toArray()
            ),
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
    private function generateColors(int $count): array
    {
        $colors = [
            '#34d399',
            '#f87171',
            '#60a5fa',
            '#a78bfa',
            '#f472b6',
            '#22d3ee',
            '#94a3b8',
            '#fbbf24',
        ];

        return collect(range(1, $count))
            ->map(fn($i) => $colors[($i - 1) % count($colors)])
            ->toArray();
    }
}
