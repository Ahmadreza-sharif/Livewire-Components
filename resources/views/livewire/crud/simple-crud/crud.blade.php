<div>
    @section('header','crud')
    <div class="justify-content-center align-items-center d-flex">
        <div class="col-8 card">
            <div class="card-header">
                <h3>Simple Crud</h3>
            </div>
            <div class="card-body">
                <div>
                    <button wire:click.prevent='insert()' type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Add New Product
                    </button>
                </div>
                <hr>
                <div>
                    <div>
                        <h5>Products</h5>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Description</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (App\Models\product::all() as $product)
                                    <tr :wire:key="{{ $product->index }}">
                                        <th scope="row">{{ $product->id }}</th>
                                        <th scope="">{{ $product->name }}</th>
                                        <th scope="">{{ $product->slug }}</th>
                                        <th scope="">{{ $product->description }}</th>
                                        <th wire:click.prevent="update({{ $product->id }})"><span
                                                class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">Update</span></th>
                                        <th wire:click.prevent="delete({{ $product->id }})"><span
                                                class="btn btn-danger btn-sm">Delete</span></th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Button trigger modal -->

            <!-- Modal -->
            <div wire:ignore class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Product</h5>
                            <button wire:click.prevent="resetAll()" type="button" class="btn-close"
                                data-bs-dismiss="modal" aria-label="Close"class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <label for="">Title:</label>
                            <input class="form-control" type="text" wire:model.defer="product.name">
                            <label for="">Slug:</label>
                            <input class="form-control" type="text" wire:model.defer="product.slug">
                            <label for="">Description:</label>
                            <input class="form-control" type="text" wire:model.defer="product.description">
                        </div>
                        <div class="modal-footer">
                            <button data-bs-toggle="modal" data-bs-target="#exampleModal" wire:click.prevent='save()'
                                type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
