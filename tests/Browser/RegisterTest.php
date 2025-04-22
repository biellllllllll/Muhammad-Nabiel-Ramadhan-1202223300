<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(callback: function (Browser $browser): void{
            $browser->visit(url: '/')
                    ->assertSee(text: 'Enterprise Application Development')
                    ->clickLink(link: 'Register')
                    ->assertPathIs(path: '/register')
                    ->type(field: 'Name', value: 'Nabiel')
                    ->type(field: 'Email', value: 'ramadhan@gmail.com')
                    ->type(field: 'Password', value: 'Nabiel123')
                    ->type(field: 'Confirm Password', value: 'Nabiel123')
                    ->press(button: 'REGISTER')
                    >assertPathIs(path: '/dashboard');

        });
    }
}
