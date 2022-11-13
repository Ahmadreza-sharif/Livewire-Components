<div>
    @section('header', 'Votes')
    <div class="d-flex align-items-center justify-content-center">
        <div class="card col-8">
            <div class="card-header">
                <h3>Vote for Comments.</h3>
            </div>
            <div class="card-body">
                <div>
                    @foreach (App\Models\comment::all() as $comment)
                        @livewire('vote.post', ['comment' => $comment])
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @section('css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
            integrity="sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endsection
    @section('js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
            integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @endsection

</div>
