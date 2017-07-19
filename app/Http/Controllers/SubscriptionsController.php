<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\Plan;
use App\Http\Requests\SubscribeFormRequest;


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

    public function create(SubscribeFormRequest $requests)
    {
        $plan = request('plan');
        $stripeToken = request('stripeToken');
        $user = auth()->user();

        if ($user->isActive()) {
            return response()->json(['status' => 'You are already subscribed'], 403);
        }

        try {
            $user->newSubscription($plan, $plan)->create($stripeToken);
        } catch (Exception $e) {
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
