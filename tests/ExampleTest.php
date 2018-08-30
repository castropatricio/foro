<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $user = factory(App\User::class)->create([
            'name' => 'Duilio Palacios',
            'email' => 'admin@styde.net',
        ]);

//        $user = factory(App\User::class)->create();

        $this->actingAs($user, 'api');

        $this->visit('api/user')
            ->see('Duilio Palacios')
            ->see('admin@styde.net');
    }
}
