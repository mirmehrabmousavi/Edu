@extends('layout.app')

@section('content')
    <ul>
        <li>{{$course->title}}</li>
        <li>{{$course->desc}}</li>
        <li>{{$course->b_desc}}</li>
        <li>{{$course->c_poster}}</li>
        <li>{{$course->time}}</li>
        <li>{{$course->status}}</li>
    </ul>
@endsection
