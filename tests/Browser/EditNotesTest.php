<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->assertSee(text: 'tes')
            ->clickLink(link: 'Edit')
            ->assertPathIs(path: 'edit-note-page/1')
            ->type(field: 'Tittle   ', value: 'Tes note 2')
            ->type(field: 'Description', value: 'mengetes note 2')
            ->press(button: 'UPDATE')
            ->assertPathIs(path: '/notes');
        });
    }
}
