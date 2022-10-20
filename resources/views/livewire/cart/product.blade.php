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
                        @foreach (App\Models\Product::all() as $product)
                            <tr>
                                <th scope="row">{{$product->id}}</th>
                                <td>{{$product->name}}</td>
                                <td>${{$product->price}}</td>
                                <td>
                                    <button class="btn btn-sm btn-primary">Add to Cart</button>
                                    <button class="btn btn-sm btn-danger">Delete of Cart</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
