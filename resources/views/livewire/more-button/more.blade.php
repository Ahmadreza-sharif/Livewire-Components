<div>
    <div class="justify-content-center align-items-center d-flex">
        <div class="col-8 card">
            <div class="card-header">
                <h3>More Button</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Category</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                            @foreach ($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td>${{$product->price}}</td>
                                <td>{{$product->category->name}}</td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
                @if ($showMore)
                        <div class="col-2">
                            <button wire:click="loadData" class="btn btn-sm form-control btn-primary">Show More</button>
                        </div>
                    @endif
            </div>
        </div>
    </div>
</div>
