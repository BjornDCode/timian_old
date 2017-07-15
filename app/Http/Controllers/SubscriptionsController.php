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

        try {
            $user->newSubscription($plan, $plan)->create($stripeToken);
        } catch (\Exception $e) {
            return response()->json(['status' => $e->getMessage()], 422);
        }

        return [
            'status' => 'Success'
        ];

    }

    public function subscribed()
    {
        return redirect()
            ->route('dashboard')
            ->with('flash', 'You are now subscribed')
            ->with('flash-type', 'success');
    }

}
