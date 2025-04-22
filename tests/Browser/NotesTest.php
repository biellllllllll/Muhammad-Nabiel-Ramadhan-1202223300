<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee(text: 'Notes')
                ->clickLink(link: 'Notes')
                ->press(button: 'Create Note')
                ->assertPathIs(path: '/create-note')
                ->type(field: 'Tittle   ', value: 'Tes note')
                ->type(field: 'Description', value: 'mengetes note')
                ->press(button: 'CREATE')
                ->assertPathIs(path: '/notes');

        });
    }
}
