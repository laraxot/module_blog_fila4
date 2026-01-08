<?php

declare(strict_types=1);

namespace Modules\Blog\Providers\Filament;

use LaraZeus\SpatieTranslatable\SpatieTranslatablePlugin;
use Filament\Panel;
use Modules\Xot\Providers\Filament\XotBasePanelProvider;
use Pboivin\FilamentPeek\FilamentPeekPlugin;

class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'Blog';

    public function panel(Panel $panel): Panel
    {
        $panel->plugins([
            // FilamentPeekPlugin::make(),
            SpatieTranslatablePlugin::make(),
        ]);

        return parent::panel($panel);
    }
}
