<div>
    @section('header', 'Cart')

    <div class="d-flex align-items-center justify-content-center">
        <div class="card col-8 ">
            <div class="card-header">
                <h3>Cart and Favorites</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @livewire('cart.cart')
                        @livewire('cart.favorite')
                        @forelse($products as $product)
                            <tr>
                                <th scope="row">{{ $product->id }}</th>
                                <td>{{ $product->name }}</td>
                                <td>${{ $product->price }}</td>
                                <td>
                                    @if (!\App\Models\cart::where('product_id', $product->id)->first())
                                        <button wire:click.prevent="addToCart({{ $product->id }})"
                                            class="btn btn-sm btn-primary">Add to Cart</button>
                                    @else
                                        <button wire:click.prevent="removeOfCart({{ $product->id }})"
                                            class="btn btn-sm btn-danger">Delete of Cart</button>
                                    @endif
                                </td>
                                <td>

                                    @if (!\App\Models\favorite::where('product_id', $product->id)->first())
                                        <i wire:click.prevent="addFavorite({{$product->id}})" class="fa-solid fa-heart"></i>
                                    @else
                                        <i wire:click.prevent="removeFavorite({{$product->id}})" style="color: red;" class="fa-solid fa-heart"></i>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <h3>Not Found.</h3>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
