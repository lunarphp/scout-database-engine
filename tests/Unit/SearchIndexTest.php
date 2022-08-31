<?php

namespace GetCandy\ScoutDatabaseEngine\Tests\Unit;

use GetCandy\ScoutDatabaseEngine\SearchIndex;
use GetCandy\ScoutDatabaseEngine\Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SearchIndexTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_create_model()
    {
        $searchIndex = new SearchIndex();
        $searchIndex->key = 1;
        $searchIndex->index = 'posts';
        $searchIndex->field = 'title';
        $searchIndex->content = 'Test 1 2 3';
        $searchIndex->save();

        $this->assertInstanceOf(SearchIndex::class, $searchIndex);
    }
}
