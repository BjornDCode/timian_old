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
        $user = create('App\Models\User');

        // When they login
        $this->signIn($user);

        // When they access the dashboard
        $response = $this->get('/dashboard');

        // They should see the plans page
        $response->assertRedirect('/plans');

    }

    /** @test */
    public function an_authorized_user_can_see_the_plans_page()
    {

        $user = create('App\Models\User');
        $plan = create('App\Models\Plan');

        $this->signIn($user);

        $response = $this->get('/plans');

        $response->assertSee($plan->name);

    }

    /** @test */
    public function a_non_authorized_user_cannot_see_the_plans_page()
    {

        $this->withExceptionHandling();

        $user = create('App\Models\User');

        $response = $this->get('/plans');

        $response->assertRedirect('/login');

    }

}
