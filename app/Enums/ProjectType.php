<?php

namespace App\Enums;

enum ProjectType: string
{
    case Project = 'project';
    case Task = 'task';


    public function label(): string
    {
        return match ($this) {
            self::Project => 'Project',
            self::Task => 'Task',
        };
    }

    public function getColor(): string | array | null
    {
        return match ($this) {
            self::Project => 'info',
            self::Task => 'success',
        };
    }

    public static function toArray($method = 'label'): array
    {
        return collect(self::cases())->mapWithKeys(fn($type) => [
            $type->value => $type->$method()
        ])->toArray();
    }

}
