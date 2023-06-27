<?php

namespace AdminKit\Polls\UI\Filament\Resources\PollResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use AdminKit\Polls\UI\Filament\Resources\PollResource;

class CreatePoll extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = PollResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
