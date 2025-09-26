<?php

namespace App\Enums;

enum ClientStatus: string
{
    case Active = 'active';
    case InActive = 'inactive';


    public function label(): string
    {
        return match ($this) {
            self::Active => 'Active',
            self::InActive => 'Inactive',
        };
    }

    public function getColor(): string | array | null
    {
        return match ($this) {
            self::Active => 'success',
            self::InActive => 'danger',
        };
    }

    public static function toArray($method = 'label'): array
    {
        return collect(self::cases())->mapWithKeys(fn($type) => [
            $type->value => $type->$method()
        ])->toArray();
    }

}
