<div>
    <div class="justify-content-center align-items-center d-flex">
        <div class="col-8 card">
            <div>
                <div class="card-header">
                    <span>Automatic validation</span>
                </div>
                <div class="card-body">
                    <div>
                        @if(!empty($message))
                            <div class="alert alert-success" role="alert">
                                {{ $message }}
                            </div>
                        @endif
                        <div class="col-5 m-3 d-inline-block">
                            <h3>Add To Db</h3>
                            <label for="">Name:</label>
                            <input wire:model.prevent="name" type="text" class="@error('name')is-invalid @enderror form-control" placeholder="Title ...">
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-5 m-3 d-inline-block">
                            <label for="">slug:</label>
                            <input wire:model.prevent="slug" type="text" class="@error('slug')is-invalid @enderror form-control" placeholder="Link ...">
                            @error('slug')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-5 m-3 d-inline-block">
                            <label for="">description:</label>
                            <input wire:model.prevent="description" type="text" class="@error('description')is-invalid @enderror form-control" placeholder="Description ...">
                            @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-5 m-3 d-inline-block">
                            <label for="">price:</label>
                            <input wire:model.prevent="price" type="text" class="@error('price')is-invalid @enderror form-control" placeholder="price ...">
                            @error('price')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-5 m-3 d-inline-block">
                            <label for="">price:</label>
                            <select wire:model.prevent='category_id' name="" id="" class="form-control">
                                <option selected>Select Category</option>
                                @foreach (App\Models\category::all() as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="ms-3 me-3">
                            <button wire:click.prevent="save" class="btn btn-primary btn-sm">Add To Database</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
