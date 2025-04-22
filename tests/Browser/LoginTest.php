<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->assertSee(text: 'Enterprise Application Development')
            ->clickLink(link: 'Log in')
            ->assertPathIs(path: '/login')
            ->type(field: 'Email', value: 'nabiel@gmail.com')
            ->type(field: 'Password', value: 'Nabiel123')
            ->press(button: 'LOG IN')
            >assertPathIs(path: '/dashboard');
        });
    }
}
