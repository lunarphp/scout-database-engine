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
    public function can_index_a_post()
    {
        $post = new Post();
        $post->title = 'Example Post';
        $post->body = 'Test 1 2 3';
        $post->save();

        $this->assertInstanceOf(Post::class, $post);

        $this->assertDatabaseCount('search_index', 2);

        $this->assertDatabaseHas('search_index', [
            'key' => $post->getScoutKey(),
            'index' => $post->searchableAs(),
            'field' => 'title',
            'content' => $post->title,
        ]);
    }

    /** @test */
    public function deletes_outdated_index_data()
    {
        $searchIndex = new SearchIndex();
        $searchIndex->key = '10';
        $searchIndex->index = 'posts';
        $searchIndex->field = 'title';
        $searchIndex->content = 'To be deleted';
        $searchIndex->save();

        $post = new Post();
        $post->id = 10;
        $post->title = 'Example Post';
        $post->body = 'Test 1 2 3';
        $post->save();

        $this->assertDatabaseMissing('search_index', [
            'key' => '10',
            'index' => 'posts',
            'field' => 'title',
            'content' => 'To be deleted',
        ]);
    }

    /** @test */
    public function deletes_old_index_data()
    {
        $post = new Post();
        $post->id = 15;
        $post->title = 'Example Post';
        $post->body = 'Test 1 2 3';
        $post->save();

        $this->assertDatabaseHas('search_index', [
            'key' => '15',
            'index' => 'posts',
            'field' => 'title',
            'content' => 'Example Post',
        ]);

        $post->delete();

        $this->assertDatabaseMissing('search_index', [
            'key' => '15',
            'index' => 'posts',
            'field' => 'title',
            'content' => 'Example Post',
        ]);
    }
}
