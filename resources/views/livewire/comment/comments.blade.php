<div>
    @section('header', 'Comments')
    <div class="d-flex align-items-center justify-content-center">
        <div class="card col-8">
            <div class="card-header">
                <h3 class="card-title">Comments</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div>
                        <form wire:submit.prevent='save'>
                            <div class="d-inline-block">
                                <label for="">Comment :</label>
                                <input class="form-control form-control-sm" wire:model.defer='comment_text'
                                    type="text" name="" id="">
                            </div>
                            <div class="d-inline-block">
                                <button class="btn btn-sm btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row m-3">
                    <div class="row">
                        @forelse ($comments as $comment)
                            <div class="border-top pt-3 pb-3">
                                <h5>User 1</h5>
                                <p>{{$comment->comment_text}}</p>
                                <a class="btn btn-primary btn-sm" wire:click='reply({{$comment->id}})'>Replie to this Comment</a>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
