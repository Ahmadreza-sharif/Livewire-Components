<div>
    <div class="justify-content-center d-flex align-item-center">
        <div class="card col-8">
            <div class="card-header">
                <h3>
                    Quiz
                </h3>
            </div>
            <div class="card-body">
                @section('header', 'Quiz')
                @if (is_null($result))
                    @foreach ($questions as $question)
                        @if ($loop->iteration == $currentQuestion)
                            <h5>
                                question {{ $currentQuestion }}
                                /
                                {{ $questions->count() }}
                                :
                                {{ $question->question }}
                            </h3>
                            @foreach ($question->options as $option)
                                <input wire:model='answer' type="radio" value="{{ $option->id }}">
                                {{ $option->option }} <br>
                            @endforeach
                        @endif
                    @endforeach
                @else
                    quiz finished.
                    result : {{ $this->result }}/{{ $questions->count() }}
                @endif
            </div>
        </div>
    </div>
</div>
