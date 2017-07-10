<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AuthTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function an_authorized_but_non_subscribed_user_will_see_the_plans_page()
    {
        // Given we have a non subscribed user
        $user = create('App\User');

        // When they login
        $this->signIn($user);

        // They should see the plans page
        $this->assertRedirect('/plans');

    }

}
