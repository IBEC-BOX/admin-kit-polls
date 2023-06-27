<?php

declare(strict_types=1);

namespace AdminKit\Polls\Providers;

use Filament\PluginServiceProvider;
use AdminKit\Polls\UI\Filament\Resources\PollResource;

class FilamentServiceProvider extends PluginServiceProvider
{
    public static string $name = 'polls';

    protected array $resources = [
        PollResource::class,
    ];
}
