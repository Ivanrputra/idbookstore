@extends('admin.layouts.app')

@section('content')

<!-- BREADCRUMB -->
<nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ url('/admin/home')}}">Home</a></li>
            <li class="is-active"><a href="{{ url('/admin/konfirmasipublish')}}" aria-current="page">Publish Confirmation</a></li>
        </ul>
        </nav>
    
        <!-- CONTENT -->
    <div class="card">
        <div class="card-header">
            <div class="card-header-title">Transaction Table</div>
        </div>
        <div class="card-content">
            <table class="table is-striped is-fullwidth">
                <thead>
                    <tr>
                        <th>Book ID</th>
                        <th>Author</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Forum</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($unpublish as $b)
                    <tr>
                        <td class="has-text-centered" width="10%">{{$b->id}}</td>
                        <td>{{$b->name}}</td>
                        <td>{{$b->judul}}</td>
                        <td>{{$b->harga}}</td>
                        <td class="has-text-centered" width="15%">
                            <a href="confirm_publish/{{$b->id}}" id="{{$b->id}}" class="button is-warning is-small">
                                <span>Pending</span>
                            </a>
                        </td>
                        <td class="has-text-centered" width="15%">
                                <a href="forum/{{$b->id}}" class="button is-info is-small">
                                    <span class="icon">
                                        <i class="far fa-comments"></i>
                                    </span>
                                    <span>Chat</span>
                                </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
