@extends('author.layouts.app')

@section('content') 
<!-- BREADCRUMB -->
<nav class="breadcrumb" aria-label="breadcrumbs">
    <ul>
        <li><a href="#">Home</a></li>
        <li class="is-active"><a href="#" aria-current="page">List Naskah</a></li>
    </ul>
    </nav>

    <!-- CONTENT -->
    <div class="card">
        <div class="card-header">
            <div class="card-header-title">List Naskah</div>
        </div>
        <div class="card-content">
            <table class="table is-striped is-fullwidth">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Title</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @php $count=1 @endphp
                      @foreach ($list_docs as $b)
                			<tr>
		                        <td class="has-text-centered" width="10%">{{$count}}</td>
                                @php $count++ @endphp
		                        <td>{{explode('.',$b->judul)[0]}}</td>
                                <td>
                                <a class="button is-info is-fullwidth" type="button" target="_blank" href="statusnaskah/{{$b->id}}" >
                                        Lihat
                                    </a>
                                </td>
                        @endforeach
                </tbody>
            </table>
            
        </div>
    </div>

@endsection
