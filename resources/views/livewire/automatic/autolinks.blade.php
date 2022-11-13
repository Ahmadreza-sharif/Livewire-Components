@section('title', 'Posts')
<div>
    <div class="justify-content-center align-items-center d-flex">
        <div class="card col-8">
            <div class="card-header">
                <h3>Post: automatic links and title.</h3>
            </div>
            <div class="card-body">
                <div>
                    <div class="col-5 m-3 d-inline-block">
                        <h3>Add To Db</h3>
                        <label for="">Title:</label>
                        <input wire:model.prevent="title" type="text" class="form-control" placeholder="Title ...">
                    </div>
                    <div class="col-5 m-3 d-inline-block">
                        <label for="">Link:</label>
                        <input wire:model.prevent="link" type="text" class="form-control" placeholder="Link ...">
                    </div>
                    <div class="ms-3 me-3">
                        <button wire:click.prevent="save" class="btn btn-primary btn-sm">Add To Database</button>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="m-3">
                        <h3>Products</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Title</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (App\Models\product::all() as $product)
                                    <tr>
                                        <th scope="row">{{ $product->id }}</th>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->slug }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
