@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-space-between">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table table-hover">
                            @if($members)
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Birthday</th>
                                        <th scope="col">Department</th>
                                        <th scope="col">Position</th>
                                        <th scope="col">Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($members as $member)
                                            <tr>
                                                <td>{{ $member->id }}</td>
                                                <td>{{ $member->name }}</td>
                                                <td>{{ $member->surname }}</td>
                                                <td>{{ $member->email }}</td>
                                                <td>{{ $member->birthday }}</td>
                                                <td>{{ $member->department }}</td>
                                                <td>{{ $member->position }}</td>
                                                <td><button href="computers/{id}/edit">Edit</button></td>
                                            </tr>
                                    @endforeach
                                </tbody>
                            @else
                                No Mebers found.
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
