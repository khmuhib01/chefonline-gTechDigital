@extends('frontend.include.layout2')

@section('title', 'Contact Us | GTech Digital')
@section('description',
    'Contact GTech for your upcoming project via phone, email or filling up the contact form. Phone-
    0203 598 5956, 0330 380 1000, Email - info@gtechdigital.co.uk')

@section('content')

    <div class="section-start">
        <div class="container">
            <div class="">
                <a href="{{ route('department.index') }}" class="btn btn-success">Show Department</a>
            </div>

            <form>
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input class="form-control" type="text" placeholder="Enter Department Name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" checked>
                        <label class="form-check-label">
                            Active
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Add Department</button>
            </form>
        </div>

    </div>

@endsection
