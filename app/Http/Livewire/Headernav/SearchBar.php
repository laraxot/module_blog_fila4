<?php

declare(strict_types=1);

namespace Modules\Blog\Http\Livewire\Headernav;

use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;
use Modules\Blog\Models\Article;
use Modules\Xot\Actions\GetViewAction;

class SearchBar extends Component
{
    public string $tpl = 'v1';

    public string $search = '';

    public function render(): Renderable
    {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute($this->tpl);

        $results = [];

        if ('' !== $this->search && '0' !== $this->search) {
            $results = Article::where('title', 'like', '%'.$this->search.'%')->get();
        }

        $view_params = [
            'results' => $results,
        ];

<<<<<<< HEAD
        return view((string) $view, $view_params);
=======
<<<<<<< HEAD
        return view((string) $view, $view_params);
=======
        return view($view, $view_params);
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
    }
}
