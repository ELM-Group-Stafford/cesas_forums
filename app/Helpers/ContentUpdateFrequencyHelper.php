<?php

namespace App\Helpers;

use Arr;

class ContentUpdateFrequencyHelper
{
    public const NEVER = 'never';
    public const DAILY = 'daily';
    public const WEEKLY = 'weekly';
    public const MONTHLY = 'monthly';

    public function all(): array
    {
        return [
            static::NEVER => trans('content-update-frequencies.never'),
            static::DAILY => trans('content-update-frequencies.daily'),
            static::WEEKLY => trans('content-update-frequencies.weekly'),
            static::MONTHLY => trans('content-update-frequencies.monthly'),
        ];
    }

    public function keys(): array
    {
        return array_keys($this->all());
    }

    public function get(string $updateFrequency): ?string
    {
        return Arr::get($this->all(), $updateFrequency, static::NEVER);
    }
}
