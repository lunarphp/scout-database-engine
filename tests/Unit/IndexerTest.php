<?php

namespace GetCandy\ScoutDatabaseEngine\Tests\Unit;

use GetCandy\ScoutDatabaseEngine\SearchIndex;
use GetCandy\ScoutDatabaseEngine\Tests\TestCase;
use GetCandy\ScoutDatabaseEngine\Tests\Stubs\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;

class IndexerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function indexes_post()
    {
        $post = new Post();
        $post->title = 'Example Post';
        $post->body = 'Test 1 2 3';
        $post->save();

        $this->assertInstanceOf(Post::class, $post);
    }
}
