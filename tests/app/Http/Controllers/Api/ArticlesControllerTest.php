<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ArticlesControllerTest extends TestCase
{
    use DatabaseMigrations;
    use WithoutMiddleware;

    public function testIndexMethodReturnsAllArticles()
    {
        $user = factory(App\User::class)->create();

        $articles = factory(App\Article::class, 2)->create(['user_id' => $user->id]);

        $this
            ->get(route('articles.index'))
            ->seeStatusCode(200);

        foreach ($articles as $article) {
            $this->seeJson([
                'topic' => $article->topic,
                'text' => $article->text,
            ]);
        }
    }

    public function testShowMethodReturnsAParticularArticle()
    {
        $user = factory(App\User::class)->create();

        $article = factory(App\Article::class)->create(['user_id' => $user->id]);

        $this
            ->get(route('articles.show', [$article->id]))
            ->seeStatusCode(200)

            ->seeJson([
                'topic' => $article->topic,
                'text' => $article->text,
            ]);
    }
    public function testDeleteMethodDeleteAParticularArticle()
    {
        $user = factory(App\User::class)->create();

        $article = factory(App\Article::class)->create(['user_id' => $user->id]);

        $this
            ->delete(route('articles.destroy', [$article->id]))
            ->seeStatusCode(200)
            ->notSeeInDatabase('articles', ['id' => $article->id, 'topic' => $article->topic]);
    }
}
