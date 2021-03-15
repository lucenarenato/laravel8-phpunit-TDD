<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class RegisterUserTest extends DuskTestCase
{
    /** @test */
    public function check_if_root_site_is_correct()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
    }

    /** @test */
    public function check_if_login_function_is_working()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->type('email', 'teste@teste.com')
                ->type('password', '12345678')
                ->press('login') //->press('Log in')
                ->assertPathIs('/dashboard');
        });
    }

    /** @test */
    public function check_if_register_function_is_working()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                ->type('name', 'User Test')
                ->type('email', 'user@teste.com')
                ->type('password', '12345678')
                ->type('password_confirmation', '12345678')
                ->press('Register') 
                ->assertPathIs('/dashboard');
                //->assetSee('dashboard')
        });
    }
}
