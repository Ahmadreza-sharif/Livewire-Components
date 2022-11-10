<div>
    @section('header', 'Quiz')
    @if (is_null($result))
        @foreach ($questions as $question)
            @if ($loop->iteration == $currentQuestion)
                <h3>
                    question {{ $currentQuestion }}
                    /
                    {{ $questions->count() }}
                    :
                    {{ $question->question }}
                </h3>
                @foreach ($question->options as $option)
                    <input wire:model='answer' type="radio" value="{{$option->id}}"> {{$option->option}} <br>
                @endforeach
            @endif
        @endforeach
    @else
        quiz finished.
        result : {{ $this->result }}/{{ $questions->count() }}
    @endif
</div>
