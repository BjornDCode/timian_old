<div class="plan">
    <div class="plan-header">
        <h2>{{ $name }}</h2>
        <h3>{{ $price }},-</h3>
    </div>
    <ul class="benefits">
        @foreach ($benefits as $benefit)
            <li>{{ $benefit->value }}</li>
        @endforeach
    </ul>
    <button type="button" class="btn btn-primary" name="button">Select Plan</button>
</div>
