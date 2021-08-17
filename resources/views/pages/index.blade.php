@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-expand-md navbar-inverse shadow-sm primarytry">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" class="" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Offices</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Events & Activities</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Services & Multimedia</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About US</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
            </li>
        </ul>
    </nav>

        {{-- <nav class="navbar navbar-expand-md navbar-inverse shadow-sm">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/posts">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
            </ul>
        </nav> --}}
@endsection