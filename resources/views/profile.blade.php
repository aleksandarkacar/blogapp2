@extends('layout.default')

@section('content')
<h1>Welcome to your profile!</h1>
<h2>Username: {{ $user->name }}</h2>
<h2>Email: {{ $user->email }}</h2>
<h2>Password: {{ $user->password }}</h2>






    
@endsection