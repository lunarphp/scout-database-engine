<?php

namespace GetCandy\ScoutDatabaseEngine\Tests\Unit;

use GetCandy\ScoutDatabaseEngine\SearchIndex;
use GetCandy\ScoutDatabaseEngine\Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SearchIndexTest extends TestCase
{
    //use RefreshDatabase;

    /** @test */
    public function can_create_model()
    {
        $searchIndex = new SearchIndex();

        $this->assertInstanceOf(SearchIndex::class, $searchIndex);
    }
}
