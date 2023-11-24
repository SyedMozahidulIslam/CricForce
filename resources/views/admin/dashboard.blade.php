@extends('admin.layout.dashboard')

@section('content')
<div class="mt-5">



    <h2>Welcome to Admin Dashboard</h2> <br>

    @if(isset($user))

    <h2>User Name: {{ $user->name }}</h2>
      
        <h5>Joined Date: {{ $user->created_at->format('Y-m-d') }}</h5>
    @endif

</div>
@endsection
