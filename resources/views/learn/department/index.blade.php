@extends('frontend.include.layout2')


@section('content')

    <div class="section-start">
            <div class="container">
                <div class="">
                    <a href="{{ route('department.create') }}" class="btn btn-success">Add Department</a>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
@endsection
