<?php

declare(strict_types=1);

namespace Modules\Blog\Filament\Resources\TextWidgetResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\Blog\Filament\Resources\TextWidgetResource;

class CreateTextWidget extends CreateRecord
{
    protected static string $resource = TextWidgetResource::class;

    protected function getRedirectUrl(): string
    {
<<<<<<< HEAD
        return (string) static::getResource()::getUrl('index');
=======
<<<<<<< HEAD
        return (string) static::getResource()::getUrl('index');
=======
        return static::getResource()::getUrl('index');
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
    }
}
