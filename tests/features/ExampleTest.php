<?php

class ExampleTest extends FeaturesTestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    function test_basic_example()
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
