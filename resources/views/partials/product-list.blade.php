<style>
    .mt-2 {
    margin-top: .5rem !important;
    margin-bottom: 0.5rem;
}
</style>

@foreach($products as $product)
    <div class="col-md-4 mb-4">
        <div class="card">
            <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}" data-image="{{ $product->image }}">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{ $product->description }}</p>
                @php
                    $totalPrice = $product->price +
                                  ($product->price * ($product->service_charge_percentage / 100)) +
                                  ($product->price * ($product->gst_percentage / 100)) +
                                  $product->delivery_fee;
                @endphp
                <p class="card-text text-danger fw-bold">₹{{ number_format($totalPrice, 2) }}</p>
                <div class="charges mt-2">
                    <p class="card-text text-muted">
                        <small>Base Price: ₹{{ number_format($product->price, 2) }}</small>
                    </p>
                    <p class="card-text text-muted">
                        <small>Service Charge ({{ $product->service_charge_percentage }}%): ₹{{ number_format($product->price * ($product->service_charge_percentage / 100), 2) }}</small>
                    </p>
                    <p class="card-text text-muted">
                        <small>GST ({{ $product->gst_percentage }}%): ₹{{ number_format($product->price * ($product->gst_percentage / 100), 2) }}</small>
                    </p>
                    <p class="card-text text-muted">
                        <small>Delivery Fee: ₹{{ number_format($product->delivery_fee, 2) }}</small>
                    </p>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    @auth
                        <button class="btn btn-primary add-to-cart"
                                data-id="{{ $product->id }}"
                                data-name="{{ $product->name }}"
                                data-description="{{ $product->description }}"
                                data-price="{{ $product->price }}"
                                data-image="{{ $product->image }}"
                                data-service-charge="{{ $product->service_charge_percentage }}"
                                data-gst="{{ $product->gst_percentage }}"
                                data-delivery="{{ $product->delivery_fee }}">Add to Cart</button>
                        <button class="btn btn-outline-danger like-product" data-id="{{ $product->id }}" title="Like Product">
                            <i class="fas fa-thumbs-up"></i>
                        </button>
                        <button class="btn btn-outline-success wishlist-product" data-id="{{ $product->id }}" title="Add to Wishlist">
                            <i class="fas fa-heart"></i>
                        </button>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary">Login to Add to Cart</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
@endforeach
