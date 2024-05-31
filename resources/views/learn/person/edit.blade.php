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

            <form>
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Age</label>
                    <input class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Department</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Department</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Course</label>
                    <select class="form-select" aria-label="Default select example">

                        <option selected>Course</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Update Person</button>
            </form>
        </div>

    </div>

@endsection
