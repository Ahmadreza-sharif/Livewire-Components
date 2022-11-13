<div>
    @section('header', 'Three Category')
    <div class="d-flex align-items-center justify-content-center">
        <div class="card col-8">
            <div class="card-header">
                <h3>Post: automatic links and title.</h3>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="save">
                    <div>
                        <div class="col-5 m-3 d-inline-block">
                            <h3>Add To Db</h3>
                            <label for="">Company</label>
                            <input wire:model.prevent="title" type="text" class="form-control" placeholder="Title ...">
                        </div>
                        <div class="col-5 m-3 d-inline-block">
                            <label for="">Country</label>
                            <select wire:model="country" class="form-select form-select-sm"
                                aria-label=".form-select-sm example">
                                <option selected>Select Country</option>
                                @foreach (App\Models\country::all() as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-5 m-3 d-inline-block">
                            <label for="">States</label>
                            <select wire:model="state" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected>Select State</option>
                                @foreach ($states as $state)
                                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-5  ms-3 me-3 d-inline-block">
                            <label for="">City</label>
                            <select wire:model="city" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected>Select City</option>
                                @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="ms-3">
                            <button class=" btn-sm btn btn-primary">
                                Add
                            </button>
                        </div>
                    </div>
                </form>
                <hr>
                <div class="row">
                    <div class="m-3">
                        <h3>Products</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">state</th>
                                    <th scope="col">city</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (App\Models\company::all() as $company)
                                    <tr>
                                        <th scope="row">{{ $company->id }}</th>
                                        <th scope="row">{{ $company->title }}</th>
                                        <th scope="row">{{ $company->country->name }}</th>
                                        <th scope="row">{{ $company->state->name }}</th>
                                        <th scope="row">{{ $company->city->name }}</th>
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
