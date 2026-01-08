<?php

declare(strict_types=1);

namespace Modules\Blog\Traits;

trait HasContentEditor
{
    public static function getContentEditor(string $field): string
    {
        $defaultEditor = config('filament-blog.editor');

        return $defaultEditor::make($field)
<<<<<<< HEAD
            ->label((string) __('filament-blog::filament-blog.content'))
=======
<<<<<<< HEAD
            ->label((string) __('filament-blog::filament-blog.content'))
=======
            ->label(__('filament-blog::filament-blog.content'))
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
            ->required()
            ->toolbarButtons(config('filament-blog.toolbar_buttons'))
            ->columnSpan([
                'sm' => 2,
            ]);
    }
}
