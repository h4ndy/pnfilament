<?php

namespace App\Enums;

enum ProjectStatus: string
{
    case Pending = 'pending';
    case OnHold = 'on_hold';
    case OnProgress = 'on_progress';
    case Completed = 'completed';
    case Cancelled = 'cancelled';


    public function label(): string
    {
        return match ($this) {
            self::Pending => 'Pending',
            self::OnHold => 'On Hold',
            self::OnProgress => 'On Progress',
            self::Completed => 'Completed',
            self::Cancelled => 'Cancelled',

        };
    }

    public function getColor(): string | array | null
    {
        return match ($this) {
            self::Pending => 'info',
            self::OnHold => 'warning',
            self::OnProgress => 'secondary',
            self::Completed => 'success',
            self::Cancelled => 'danger',

        };
    }

    public static function toArray($method = 'label'): array
    {
        return collect(self::cases())->mapWithKeys(fn($type) => [
            $type->value => $type->$method()
        ])->toArray();
    }

}
