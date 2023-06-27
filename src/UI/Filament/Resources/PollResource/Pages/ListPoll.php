<?php

namespace AdminKit\Polls\UI\Filament\Resources\PollResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use AdminKit\Polls\UI\Filament\Resources\PollResource;

class ListPoll extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = PollResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
