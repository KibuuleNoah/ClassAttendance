@extends("layout")

@section("content")
    <div>
        <b class="text-danger">Noah</b>
        <form method="post" class="max-w-md mx-auto p-4 bg-white rounded shadow-md" action="{{ route('students.store') }}">
            @csrf
            <h2 class="text-lg font-bold mb-4">Student Registration</h2>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="firstname">
                    Firstname
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="firstname" name="firstname" type="text" placeholder="Enter your firstname" value="{{ old('firstname') }}">
                @error("firstname")
                <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="lastname">
                    Lastname
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="lastname" name="lastname" type="text" placeholder="Enter your lastname" value="{{ old('lastname') }}">
                @error("lastname")
                <div class="error">{{ $message }}</div>
                @enderror

            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="class">
                    Class
                </label>
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="class" name="class">
                    <option value="">Select a class</option>

                    @foreach($classes as $class)
                        <option value="{{ $class }}" {{ old('class') == $class ? 'selected' : '' }}>{{ $class }}</option>
                    @endforeach

                </select>
                @error("class")
                <div class="error">{{ $message }}</div>
                @enderror

            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="gender">
                    Gender
                </label>

                @foreach($genders as $gender)

                <div class="flex items-center mb-2">
                    <input class="mr-2" id="{{ $gender }}" type="radio" name="gender" value="{{ $gender }}" {{ old('gender') == $gender ? 'checked' : '' }} >
                    <label class="text-gray-700 text-sm" for="male">Male</label>
                </div>

                @endforeach

                @error("gender")
                <div class="error">{{ $message }}</div>
                @enderror

            </div>

            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Register
            </button>
        </form>
    </div>

@endsection

{{-- <select name="field_name"> --}}
{{--   @foreach($options as $value => $text) --}}
{{--     <option value="{{ $value }}" {{ old('field_name') == $value ? 'selected' : '' }}> --}}
{{--       {{ $text }} --}}
{{--     </option> --}}
{{--   @endforeach --}}
{{-- </select> --}}

{{-- @foreach($options as $value => $text) --}}
{{--   <div> --}}
{{--     <input type="radio" name="field_name" value="{{ $value }}" {{ old('field_name') == $value ? 'checked' : '' }}> --}}
{{--     <label>{{ $text }}</label> --}}
{{--   </div> --}}
{{-- @endforeach --}}
