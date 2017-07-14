@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-body">
                        <h1>Plans</h1>

                        <plans :plans="{{ $plans }}"></plans>

                        {{-- <div class="plans">
                            @foreach ($plans as $plan)
                                @component('plans.plan', ['benefits' => $plan->benefits, 'description' => $plan->description, 'formattedPrice' => $plan->getFormattedPrice()])
                                    @slot('name')
                                        {{ $plan->name }}
                                    @endslot

                                    @slot('price')
                                        {{ $plan->price }}
                                    @endslot
                                @endcomponent
                            @endforeach
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
