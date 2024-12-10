@extends("layout")

@section("title","Dash")

@section("content")

<div>

    <div class="text-center font-extrabold">DashBoard</div>

    @if (count($students) > 0)

        @foreach($students as $student)

            <a
                class="text-red-600 m-10 rounded-lg bg-white px-6 py-8 shadow-xl ring-1 ring-slate-900/5"
                href="{{ route('students.show',['student'=> $student['id']]) }}"

                >{{ $student['firstname'] }} - {{ $student['lastname'] }}
            </a>

        @endforeach

    @else

        <div>No Students Yet</div>

    @endif

</div>
@endsection
