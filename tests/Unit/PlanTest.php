<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PlanTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_plan_has_benefits()
    {
        // $channel = create('App\Channel');
        // $thread = create('App\Thread', ['channel_id' => $channel->id]);
        //
        // $this->assertTrue($channel->threads->contains($thread));


        // Given we have a plan and plan benefit
        $plan = create('App\Models\Plan');
        $planBenefit = create('App\Models\PlanBenefit', ['plan_id' => $plan->id]);

        // The plan will contain the benefits
        $this->assertTrue($plan->benefits->contains($planBenefit));
    }

}
