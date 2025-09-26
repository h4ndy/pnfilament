<?php

namespace App\Enums;

enum Priority : string
{
    case Low = 'low';
    case Medium = 'medium';
    case High = 'high';

    public function label(): string
    {
        return match ($this) {
            self::Low => 'Low',
            self::Medium => 'Medium',
            self::High => 'High',

        };
    }

    public function getColor(): string | array | null
    {
        return match ($this) {
            self::Low => 'success',
            self::Medium => 'warning',
            self::High => 'danger',
        };
    }

    public static function toArray($method = 'label'): array
    {
        return collect(self::cases())->mapWithKeys(fn($type) => [
            $type->value => $type->$method()
        ])->toArray();
    }
}
