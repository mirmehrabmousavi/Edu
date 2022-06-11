@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header" style="padding-bottom: 1.5rem;">
                    <h4 class="card-title">{{ $ticket->ticket_id }}# - {{ $ticket->title }}</h4>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <p>{{ $ticket->message }}</p>
                        <p>دسته بندی : {{ $ticket->category_id }}</p>
                        <p style="display: inline-block">@if ($ticket->status === 'باز است')</p>
                        وضعیت :
                        <div class="badge badge-pill badge-success">{{ $ticket->status }}</div>@else
                            وضعیت :
                            <div class="badge badge-pill badge-danger">{{ $ticket->status }}</div>@endif
                        <br>
                        <br>
                        <p>تاریخ : {{ $ticket->created_at->diffForHumans() }}</p>
                    </div>
                </div>
            </div>
            <hr>
            @include('tickets.comments')
            <hr>
            @include('tickets.reply')
        </div>
    </div>
@endsection
