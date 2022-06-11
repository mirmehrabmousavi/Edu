@extends('admin.layout.app')


@section('content')
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">تیکت ها</h4>
                </div>
                <div class="card-content">
                    <div class="table-responsive">
                        @if ($tickets->isEmpty())
                            <p>تیکت وجود ندارد</p>
                        @else
                            <table class="table table-striped mb-0">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">دسته بندی</th>
                                    <th scope="col">عنوان</th>
                                    <th scope="col">وضعیت</th>
                                    <th scope="col">آخرین ویرایش</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tickets as $ticket)
                                    <tr>
                                        <th scope="row">{{$loop->index+1}}</th>
                                        <td>{{ $ticket->category_id }}</td>
                                        <td><a href="{{ url('tickets/'. $ticket->ticket_id) }}">
                                                #{{ $ticket->ticket_id }} - {{ $ticket->title }}
                                            </a></td>
                                        <td>@if ($ticket->status === 'باز است')
                                                <div class="badge pill-badge badge-success">{{ $ticket->status }}</div>
                                            @else
                                                <div class="badge pill-badge badge-danger">{{ $ticket->status }}</div>
                                            @endif</td>
                                        <td>{{$ticket->updated_at->toJalali()->formatDifference()}}</td>
                                        <td>
                                            @if($ticket->status === 'باز است')
                                                <a href="{{ url('tickets/' . $ticket->ticket_id) }}"
                                                   class="btn bg-gradient-primary mr-1 mb-1 waves-effect waves-light">پاسخ</a>
                                                <form action="{{ url('admin/close_ticket/' . $ticket->ticket_id) }}"
                                                      method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn bg-gradient-danger mr-1 mb-1 waves-effect waves-light">بستن</button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
