<?php

namespace App\Http\Controllers;

use Tests\TestCase;
use App\Mobile;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
//require dirname(__DIR__) . 'app/Http/Controllers/MobilesController';

class authTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

     //$this->assertEquals($mobile->type, 'mobile');

     public function it_redirects_to_login_if_user_is_not_authenticated()
    {
        Auth::shouldReceive('check')->once()->andReturn(false);

        $response = $this->call('GET', 'home');

        // Now we have several ways to go about this, choose the
        // one you're most comfortable with.

        // Check that you're redirecting to a specific controller action
        // with a flash message
        

        // Only check that you're redirecting to a specific URI
        $this->assertRedirectedTo('login');

        // Just check that you don't get a 200 OK response.
        $this->assertFalse($response->isOk());

        // Make sure you've been redirected.
        $this->assertTrue($response->isRedirection());
    }
    public function it_returns_home_page_if_user_is_authenticated()
    {
        Auth::shouldReceive('check')->once()->andReturn(true);

        $this->call('GET', 'home');

        $this->assertResponseOk();
    }
}
