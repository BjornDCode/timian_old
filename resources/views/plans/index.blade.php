@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-body">
                        <h1>Plans</h1>

                        <plans :plans="{{ $plans }}"></plans>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
