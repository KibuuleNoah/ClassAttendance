@extends("layout")

@section("content")
    <div>
        <b>{{ $student["firstname"] }} {{ $student["lastname"] }}</b>
        <ul>
            <li>Class: {{ $student["class"] }}</li>
            <li>Gender: {{ $student["gender"] }}</li>
            <li><small>joined {{ $student["created_at"] }}</small></li>
        </ul>
    </div>
@endsection
