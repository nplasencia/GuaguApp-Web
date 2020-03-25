<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AppsModulesTest extends TestCase
{
    /** @test */
    function testLoadAppsSummaryPage()
    {
        $this->get('/apps')
            ->assertStatus(200)
            ->assertSee('We are in the summary of apps');
    }

    /** @test */
    function testLoadAppsNewPage()
    {
        $this->get('/app/new')
             ->assertStatus(200)
             ->assertSee('We are creating a new app');
    }

    /** @test */
    function testLoadAppDetail()
    {
        $this->get('/app/35')
             ->assertStatus(200)
             ->assertSee('We are on the detail of the app with id 35');
    }
}
