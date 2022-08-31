<?php

namespace GetCandy\ScoutDatabaseEngine\Tests\Unit;

use GetCandy\ScoutDatabaseEngine\SearchIndex;
use GetCandy\ScoutDatabaseEngine\Tests\TestCase;
use GetCandy\ScoutDatabaseEngine\Tests\Stubs\Post;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class SearchTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function can_search_a_post()
    {
        $post = new Post();
        $post->title = 'Supercar';
        $post->body = 'Lamborghini';
        $post->save();

        $post = new Post();
        $post->title = 'Supercar';
        $post->body = 'Ferrari';
        $post->save();

        $post = new Post();
        $post->title = 'Supercar';
        $post->body = 'Aston Martin';
        $post->save();

        $post = new Post();
        $post->title = 'Supercar';
        $post->body = 'Mclaren';
        $post->save();

        $posts = Post::search('Lamborghini')->get();

        dump($posts);
    }
}
