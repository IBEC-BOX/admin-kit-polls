<?php

namespace AdminKit\Polls\UI\Filament\Resources\PollResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use AdminKit\Polls\UI\Filament\Resources\PollResource;

class EditPoll extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = PollResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
