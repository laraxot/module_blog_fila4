<?php

declare(strict_types=1);

namespace Modules\Blog\Filament\Resources\CategoryResource\Pages;

use LaraZeus\SpatieTranslatable\Actions\LocaleSwitcher;
use Filament\Actions\DeleteAction;
use Filament\Actions;
use Modules\Blog\Filament\Resources\CategoryResource;
use Modules\Lang\Filament\Resources\Pages\LangBaseEditRecord;

class EditCategory extends LangBaseEditRecord
{
    protected static string $resource = CategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            LocaleSwitcher::make(),
            DeleteAction::make(),
        ];
    }
}
