<div>
    @section('header','MutliStep')
    <div class="d-flex align-items-center justify-content-center">
        <div class="card col-8">
            <div class="card-header">
                <h3>Multiple Step Form</h3>
            </div>
            <div class="card-body">
                <div>
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item" wire:click.prevent="changeStep(1)">
                                        <a
                                            class="nav-link {{$currentStep == 1 ? ' bg-primary text-white' : ' '}}">From</a>
                                    </li>
                                    <li class="nav-item" wire:click.prevent="changeStep(2)">
                                        <a
                                            class="nav-link {{$currentStep == 2 ? ' bg-primary text-white' : ' '}}">To</a>
                                    </li>
                                    <li class="nav-item" wire:click.prevent="changeStep(3)">
                                        <a
                                            class="nav-link  {{$currentStep == 3 ? ' bg-primary text-white' : ' '}} ">Passenger</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <form wire:submit.prevent='nextStep()'>
                    <div class="mt-3">
                        @if($currentStep == 1)
                        <div class="row">
                            <div class="col-5">
                                <span for="">From the Country:</span>
                                <select wire:model="FromCountry" class="form-select form-select-sm" name="" id="">
                                    @foreach ($countries as $country)
                                        <option value="{{$country['id']}}">{{$country['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-5">
                                <span for="">From the City:</span>
                                <select wire:model='FromCity' class="form-select form-select-sm" name="" id="">
                                    @foreach ($fromCity as $city)
                                        <option value="{{$city['id']}}">{{$city['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @elseif ($currentStep == 2 )
                        <br>
                        <div class="row">
                            <div class="col-5">
                                <span for="">To the Country:</span>
                                <select class="form-select form-select-sm" name="" id="" wire:model="ToCountry">
                                    @foreach ($countries as $country)
                                        <option value="{{$country['id']}}">{{$country['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-5">
                                <span for="">To the City:</span>
                                <select wire:model="ToCity" class="form-select form-select-sm" name="" id="">
                                    @foreach ($toCity as $city)
                                        <option value="{{$city['id']}}">{{$city['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @else
                        <br>
                        <div class="row">
                            <div class="col-5">
                                <span for="">Adults:</span>
                                <input type="number" class="form-control form-control-sm" value="0" wire:model='adult'>
                            </div>
                            <div class="col-5">
                                <span for="">Children:</span>
                                <input type="number" class="form-control form-control-sm" value="0" wire:model='children'>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-5">
                                Price : ${{number_format($price)}}
                            </div>
                        </div>
                        @endif
                        <br>
                        <div class="col-2">
                            <button class="btn-sm btn btn-primary">
                                @if ($currentStep < 3)
                                    Next
                                @else
                                    Submit
                                @endif
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>