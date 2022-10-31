<div>
    @section('header', 'Inline update')
    <div class="d-flex align-items-center justify-content-center">
        <div class="card col-8">
            <div class="card-header">
                <h3 class="card-title">inline update</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $index => $product)
                                <tr>
                                    <th scope="row">{{ $product['id'] }}</th>
                                    <td>
                                        @if ($editedProductIndex === $index || $editedProductField === $index . 'name')
                                            <div class="col-10">
                                                <input class="form-control form-control-sm" type="text"
                                                    name="" id="">
                                            </div>
                                        @else
                                            {{ $product['name'] }}
                                        @endif

                                    </td>
                                    <td>
                                        @if ($editedProductIndex === $index || $editedProductField === $index . 'name')
                                            <div class="col-10">
                                                <input class="form-control form-control-sm" type="text"
                                                    name="" id="">
                                            </div>
                                        @else
                                            ${{ $product['price'] }}
                                        @endif

                                    </td>
                                    <td>
                                        @if ($editedProductIndex === $index || (isset($editedProductField)) && (int)(explode('.', $editedProductField)) ===  $index)
                                        <button class="btn btn-sm btn-success">Save</button>
                                        @else
                                        <button class="btn btn-sm btn-primary">Update</button>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
