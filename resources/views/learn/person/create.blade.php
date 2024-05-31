@extends('frontend.include.layout2')

@section('title', 'Contact Us | GTech Digital')
@section('description',
    'Contact GTech for your upcoming project via phone, email or filling up the contact form. Phone-
    0203 598 5956, 0330 380 1000, Email - info@gtechdigital.co.uk')

@section('content')

    <div class="section-start">
        <div class="container">
            <div class="">
                <a href="{{ route('person.index') }}" class="btn btn-success">Show Person</a>
            </div>

            <form action="{{ route('person.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input class="form-control" name="name" type="text" value="{{ old('name') }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input class="form-control" name="email" type="email" value="{{ old('email') }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Age</label>
                    <input class="form-control" name="age" type="number" value="{{ old('age') }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input class="form-control" name="address" type="text" value="{{ old('address') }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Department</label>
                    <select class="form-select" name="department">
                        <option selected>Department</option>
                        @foreach ($departments as $department)
                            <option value="{{$department->id}}">{{ $department->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Course</label>
                    <select class="form-select" name="course">
                        <option selected>Course</option>
                        @foreach ($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Add Person</button>
            </form>
        </div>

    </div>

@endsection
