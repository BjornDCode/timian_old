<div class="plan">
    <div class="plan-header">
        <h2>{{ $name }}</h2>
        <h3>{{ $formattedPrice }},-</h3>
    </div>
    <ul class="benefits">
        @foreach ($benefits as $benefit)
            <li>{{ $benefit->value }}</li>
        @endforeach
    </ul>
    <checkout-form name="{{ $name }}" description="{{ $description }}" :price="{{ $price }}"></checkout-form>
</div>
