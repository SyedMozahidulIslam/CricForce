@extends('admin.layout.dashboard')

@section('content')
    <div class="container mt-5">
        <h1>User List</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if ($user->roles->contains('role', 'admin'))
                                Admin
                            @else
                                User
                            @endif
                        </td>
                        <td>
                            @if (!$user->roles->contains('role', 'admin'))
                            <form action="{{ route('make.admin', $user->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success">Make Admin</button>
                                </form>
                                @else
                                <form action="{{ route('remove.admin', $user->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Remove Admin</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
