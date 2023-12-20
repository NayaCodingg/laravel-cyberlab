@extends('user.layout.skeleton')

@section('app')

@include('user.components.navbar') 

<main id="main">
    @yield('content')
</main>


@include('user.components.footer')

@endsection