<div wire:poll.5>
    <div wire:ignore>
        @section('title','chart')
        {!! $chart->container() !!}
        @section('js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
            {!! $chart->script() !!}
        @endsection
    </div>
</div>
