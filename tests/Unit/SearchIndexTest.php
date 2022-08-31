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
        $searchIndex->model_id = 1;
        $searchIndex->index = 'posts';
        $searchIndex->field = 'title';
        $searchIndex->language_code = 'en';
        $searchIndex->content = 'Test 1 2 3';
        $searchIndex->save();

        $this->assertInstanceOf(SearchIndex::class, $searchIndex);
    }
}
