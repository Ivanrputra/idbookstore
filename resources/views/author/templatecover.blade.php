@extends('author.layouts.app')

@section('content')

    <!-- BREADCRUMB -->
    <nav class="breadcrumb" aria-label="breadcrumbs">
    <ul>
        <li><a href="#">Home</a></li>
        <li class="is-active"><a href="#" aria-current="page">Template Cover</a></li>
    </ul>
    </nav>

    <!-- CONTENT -->
    <div class="columns is-multiline">
            @forelse ($template as $t)
            
            <div class="column is-3">
                    
                <div class="card">
                        <a  href="#" data-toggle="modal" data-target="#yourModal{{$t->id}}">
                    <div class="card-image">
                        <figure class="image is-3by4">
                            <img src="{{ asset('storage/public/template/Cover/'.$t->nama_file.'.jpg') }}" alt="">
                        </figure>
                    </div>
                </a>
                    <div class="card-content">
                        <div class="field">
                            <label>{{$t->nama}}</label>
                            <a class="button is-info is-fullwidth" type="button" target="_blank" href="{{ asset('storage/public/template/Cover/'.$t->nama_file.'.jpg') }}" >
                                Download
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <h4 align="center">No Template</h4>
            @endforelse
        </div>



@endsection
