<?php

declare(strict_types=1);

namespace Modules\Blog\Console\Commands;

use Illuminate\Console\Command;
use Modules\Blog\Models\Article;
use Webmozart\Assert\Assert;

class ShowArticleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blog:article-show {articleId}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Visualizza articolo';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $articleIdRaw = $this->argument('articleId');
        $articleId = is_scalar($articleIdRaw) ? (string) $articleIdRaw : '[ID non valido]';
        Assert::notNull($article = Article::firstWhere(['id' => $articleId]), '['.__LINE__.']['.__FILE__.']');

        $ratings = $article->ratings()
            ->where('user_id', null)
            ->get();

        $title = is_scalar($article->title) ? (string) $article->title : '[Titolo non valido]';
        $this->info($title);
        $header = ['id', 'title', 'is_winner', 'count', 'sum', 'avg', 'tot'];
        $rows = [];
        foreach ($ratings as $rating) {
            /** @var \Modules\Blog\Models\Article $tmpArticle */
            $tmpArticle = $article->loadSum(['ratings as value_sum' => static function ($query) use ($rating): void {
                $query
                    ->where('ratings.id', $rating->id)
                    ->where('rating_morph.user_id', '!=', null);
            }], 'rating_morph.value')
                ->loadSum(['ratings as value_tot' => static function ($query) use ($ratings): void {
                    $query
                        ->whereIn('ratings.id', $ratings->modelKeys())
                        ->where('rating_morph.user_id', '!=', null);
                }], 'rating_morph.value')
            /*
            ->loadAvg(['ratings as value_avg' => static function ($query) use ($rating) {
                $query
                    ->where('ratings.id', $rating->id)
                    ->where('rating_morph.user_id', '!=', null);
            }], 'rating_morph.value')
            */
                ->loadCount(['ratings as value_count' => static function ($query) use ($rating): void {
                    $query
                        ->where('ratings.id', $rating->id)
                        ->where('rating_morph.user_id', '!=', null);
                }], 'rating_morph.value');

            // Use getAttribute to safely access dynamic properties
            $sum = (int) ($tmpArticle->getAttribute('value_sum') ?? 0);
            $tot = (int) ($tmpArticle->getAttribute('value_tot') ?? 0);
            $count = (int) ($tmpArticle->getAttribute('value_count') ?? 0);
            $avg = $tot > 0 ? round($sum * 100 / $tot, 2) : 0;
            $data = [$rating->id, $rating->title, $rating->pivot?->is_winner,  $count, $sum, $avg, $tot];
            $rows[] = $data;
        }
        $this->table($header, $rows);
    }
}
