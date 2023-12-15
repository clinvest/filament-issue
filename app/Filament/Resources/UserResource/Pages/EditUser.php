<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('Test arguments')
                    ->arguments(['argument-1' => 'XXX'])
                    ->action(function (array $arguments): array {
                        dd($arguments);
                        return $arguments;
                    })
        ];
    }
}