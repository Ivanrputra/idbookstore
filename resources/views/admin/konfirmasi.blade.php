@extends('admin.layouts.app')

@section('content')

<!-- BREADCRUMB -->
<nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ url('/admin/home')}}">Home</a></li>
            <li class="is-active"><a href="{{ url('/admin/konfirmasi')}}" aria-current="page">Payment Confirmation</a></li>
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
                                <th>ID</th>
                                <th>Title</th>
                                <th>User</th>
                                <th>Payment Status</th>
                                <th>Confirmation Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($beli as $b)
                            <tr>
                                <td class="has-text-centered" width="10%">{{$b->id}}</td>
                                <td>{{$b->judul}}</td>
                                <td>{{$b->name}}</td>
                                <td class="has-text-centered" width="15%">
                                    @if($b->status_pembayaran == 'Sudah Bayar')
                                        <a href="confirmpembayaran/{{$b->id}}" class="button is-success is-small" id="{{$b->id}}">
                                            <span class="icon">
                                                <i class="fas fa-check-circle"></i>
                                            </span>
                                            <span>Done</span>
                                        </a>
                                    @else
                                        <a href="confirmpembayaran/{{$b->id}}" id="{{$b->id}}" class="button is-warning is-small">
                                            <span>Pending</span>
                                        </a>
                                    @endif
                                </td>
                                <td class="has-text-centered" width="15%">
                                    @if($b->status_konfirmasi == 'Sudah Dikonfirmasi')
                                        <a href="confirm/{{$b->id}}" class="button is-success is-small" id="{{$b->id}}">
                                            <span class="icon">
                                                <i class="fas fa-check-circle"></i>
                                            </span>
                                            <span>Done</span>
                                        </a>
                                    @else
                                        <a href="confirm/{{$b->id}}" id="{{$b->id}}" class="button is-warning is-small">
                                            <span>Pending</span>
                                        </a>
                                    @endif
                                </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
@endsection
