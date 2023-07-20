<?php

namespace App\Filament\Resources\ReplyResource\Pages;

use App\Filament\Resources\ReplyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageReplies extends ManageRecords
{
    protected static string $resource = ReplyResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
