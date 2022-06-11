<div class="row">
    @foreach($ticket->comments as $comment)
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header" style="padding-bottom: 1.5rem;">
                    <h4 class="card-title">{{ $comment->user->name }}</h4>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                        {{ $comment->comment }}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
