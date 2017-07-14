<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;

class SubscriptionsController extends Controller
{

    public function __construct() {
        $this->middleware('auth', compact('plans'));
    }

    public function index()
    {
        $plans = Plan::with('benefits')->get();

        return view('plans.index', compact('plans'));
    }

    public function create()
    {
        $plan = request('plan');
        $stripeToken = request('stripeToken');
        $user = auth()->user();

        $user->newSubscription($plan, $plan)->create($stripeToken);

        return redirect()->route('dashboard');

    }

}
