@extends('layouts.front.base')
@section('base.content')
    @include('layouts.front.partials.header')
@yield('master.content')
    @include('layouts.front.partials.footer')
@endsection