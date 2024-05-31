@extends('frontend.include.layout2')

@section('title', 'Contact Us | GTech Digital')
@section('description',
    'Contact GTech for your upcoming project via phone, email or filling up the contact form. Phone-
    0203 598 5956, 0330 380 1000, Email - info@gtechdigital.co.uk')

@section('content')

    <div class="section-start">
        <div class="container">
            <div class="">
                <a href="{{ route('course.index') }}" class="btn btn-success">Show Course</a>
            </div>

            <!-- Display success message -->
            @if (session('success'))
                <div class="alert alert-success" id="success-alert">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('course.update', $course->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input class="form-control" type="text" placeholder="Enter Course Name" name="name" value="{{ $course->name ?? old('name') }}">
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <div class="form-check">
                        <!-- Hidden input to ensure a value of 0 if the checkbox is not checked -->
                        <input type="hidden" name="status" value="0">
                        <input class="form-check-input" type="checkbox" name="status" value="1" {{ $course->status ? 'checked' : '' }}>
                        <label class="form-check-label">
                            Active
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Update Course</button>
            </form>
        </div>
    </div>

@endsection
