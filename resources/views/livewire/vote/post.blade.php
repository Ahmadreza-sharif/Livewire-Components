<div>
    <div class="row m-3">
        <div>
            <div class="col-1 d-inline-block">
                <div>
                    <a wire:click.prevent='vote(1)'>
                        <i class="fa-solid d-block fa-sort-up"></i>
                    </a>
                    <span id class="d-block">{{ $sumVote }}</span>
                    <a wire:click.prevent='vote(-1)'>
                        <i class="fa-solid d-block fa-sort-down"></i>
                    </a>
                </div>
            </div>
            <div class="col-10 d-inline-block">
                {{ $comment->body }}
            </div>
        </div>
    </div>
</div>
