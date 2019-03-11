@extends('admin.layouts.app')

@section('content')

<!-- BREADCRUMB -->
<nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ url('/admin/home')}}">Home</a></li>
            <li class="is-active"><a href="{{ url('admin/home')}}" aria-current="page">Dashboard</a></li>
        </ul>
        </nav>
    
        <!-- CONTENT -->
        <section class="hero is-bold is-info">
        <div class="hero-body">
            <div class="container">
            <h1 class="title">
                Hello, Admin.
            </h1>
            <h2 class="subtitle">
                I hope you are having a great day!
            </h2>
            </div>
        </div>
        </section>
        <br>
        
            <div class="tile is-ancestor has-text-centered">
                <div class="tile is-parent">
                    <a class="tile is-child box">
                        <p class="title">{{$c_authors}}</p>
                        <p class="subtitle">Authors</p>
                    </a>
                </div>
                <div class="tile is-parent">
                        <a class="tile is-child box">
                            <p class="title">{{$c_books}}</p>
                            <p class="subtitle">Books</p>
                        </a>
                    </div>
                    <div class="tile is-parent">
                            <a class="tile is-child box">
                                <p class="title">{{$c_users}}</p>
                                <p class="subtitle">Users</p>
                            </a>
                        </div>
                    <div class="tile is-parent">
                            <a class="tile is-child box">
                                <p class="title">{{$c_covertemplate[0]->ct}}</p>
                                <p class="subtitle">Cover Templates</p>
                            </a>
                        </div>
                        <div class="tile is-parent">
                                <a class="tile is-child box">
                                    <p class="title">{{$c_coverepub[0]->ce}}</p>
                                    <p class="subtitle">EPUB Templates</p>
                                </a>
                            </div>
            </div>
@endsection
