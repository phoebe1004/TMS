@extends('layouts.admin')

@section('content')
    <div class="card-body">
        <table id="table" class="table table-primary table-bordered table-striped">

            <thead class="table">
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email Address</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Country</th>
                    <th>Postal code</th>
                    <th>About me</th>

                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($members as $member)
                    <tr class="task{{ $member->id }}">
                        <td>{{ $member->id }}</td>
                        <td>{{ $member->username }}</td>
                        <td>{{ $member->email_address }}</td>
                        <td>{{ $member->first_name }}</td>
                        <td>{{ $member->last_name }}</td>
                        <td>{{ $member->address }}</td>
                        <td>{{ $member->city }}</td>
                        <td>{{ $member->country }}</td>
                        <td>{{ $member->postal_code }}</td>
                        <td>{{ $member->about_me }}</td>
    <td>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="{{ route('members.edit', $member->id) }}">
                <button class="btn btn-primary"><i class="fa fa-pen-to-square fa-bounce"></i></button></a>

            <a href="#" onclick="return confirm('Are you sure you want to Delete {{ $member->username }}?');">
                <form action="{{ route('members.destroy', $member->id) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type=submit class="btn btn-danger"><i class="fa fa-trash fa-beat"></i></button>
                </form>
            </a>
        </div>
    </td>
    </tr>
    @endforeach
    </tbody>
    </table>

    </div>
    </div>

@endsection
