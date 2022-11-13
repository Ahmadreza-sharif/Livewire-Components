<div>
    <div class="justify-content-center align-items-center d-flex">
        <div class="col-8 card">
            @section('header', 'filtering')
            <div class="card-header">
                <h3>Filter Products</h3>
            </div>
            <div class="card-body">
                <div>
                    <div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">
                                        <label>
                                            title:
                                        </label>
                                        <input wire:model='searchColumn.name' type="text"
                                            placeholder="Search Name ..." class="form-control">
                                    </th>
                                    <th scope="col">
                                        <label>
                                            slug:
                                        </label>
                                        <input wire:model='searchColumn.slug' type="text"
                                            placeholder="Search Slug ..." class="form-control">
                                    </th>
                                    <th scope="col">
                                        <label>
                                            Description:
                                        </label>
                                        <input wire:model='searchColumn.description' type="text"
                                            placeholder="Search Description ..." class="form-control">
                                    </th>
                                    <th scope="col">
                                        <label>
                                            Price:
                                        </label>
                                        <input wire:model='searchColumn.price.0' type="text" placeholder="Min"
                                            class="form-control">
                                        <span>To</span>
                                        <input wire:model='searchColumn.price.1' type="text" placeholder="Max"
                                            class="form-control">
                                    </th>
                                    <th scope="col">
                                        <label>
                                            Category:
                                        </label>
                                        <select class="form-select" wire:model='searchColumn.category_id'>
                                            <option value="">Open this select menu</option>
                                            @foreach (App\Models\category::all() as $cat)
                                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                            @endforeach
                                        </select>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($products))
                                    @foreach ($products as $product)
                                        <tr>
                                            <th scope="row">{{ $product->id }}</th>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->slug }}</td>
                                            <td>{{ $product->description }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ $product->category->name }}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <h3>Not Found.</h3>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
