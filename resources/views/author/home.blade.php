@extends('author.layouts.app')

@section('content')
<!-- BREADCRUMB -->
<nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ url('/author/home')}}">Home</a></li>
            <li class="is-active"><a href="#" aria-current="page">Dashboard</a></li>
        </ul>
        </nav>
    
        <!-- CONTENT -->
        <section class="hero is-bold is-warning">
        <div class="hero-body">
            <div class="container">
            <h1 class="title has-text-white">
                Hello, {{ Auth::guard('authors')->user()->name }}.
            </h1>
            <h2 class="subtitle">
                You are logged in!
            </h2>
            </div>
        </div>
        </section>
        <br>
        <div class="columns">
            
            <div class="column">
                <div class="notification is-white">
                    <figure class="image is-64x64" style="float:left">
                        <img src="{{asset('img/sigil.png')}}">
                    </figure>
                    <strong>Tools for make an EPUB</strong> <br>
                    <a href="https://github.com/Sigil-Ebook/Sigil/releases" class="button is-link" target="_blank">
                        <span class="icon">
                            <i class="fas fa-download"></i>
                        </span>
                        <span>Download Here</span>
                    </a>
                </div>
            </div>
            
            <div class="column">
                    <div class="notification is-white">
                        <figure class="image is-64x64" style="float:left">
                            <img src="{{asset('img/doc-file-format-symbol.png')}}">
                        </figure>
                        {!! Form::open(['url' => 'author/home/postDoc', 'files'=>'true', 'enctype'=>"multipart/form-data"]) !!}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="field">
                                <label class="label">Judul Naskah</label>
                                <div class="control">
                                    {!! Form::text('judul', null, array('class'=>'input')) !!}
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Dokumen Naskah</label>
                                <div class="control is-fullwidth">
                                    <input type="file" name="book" id="book" class="button">
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Deskripsi kepada Editor</label>
                                <div class="control">
                                    {!! Form::textarea('deskripsi', null, array('class'=>'input')) !!}
                                </div>
                            </div>
                            {!! Form::submit('Submit', array('class'=>'button is-link')) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
          </div>
        

@endsection
