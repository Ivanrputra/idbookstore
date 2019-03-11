@extends('admin.layouts.app')

@section('content')
<!-- BREADCRUMB -->
<nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="#">Home</a></li>
            <li class="is-active"><a href="{{ url('/admin/templatecover')}}" aria-current="page">Full Sample</a></li>
        </ul>
        </nav>
    
        <!-- CONTENT -->
        <div class="columns is-centered">
            <div class="column is-6">
                <div class="card">
                    <div class="card-header">
                        <div class="card-header-title">Upload Full Sample</div>
                    </div>
                    <div class="card-content">
                        @if (count($errors) > 0)
                            <div class="notification is-danger">
                                <button class="delete"></button>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        {!! Form::open(['url' => 'admin/postSample', 'files'=>'true', 'enctype'=>"multipart/form-data"]) !!}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="field">
                                {!! Form::label('Template Name') !!}
                                <div class="control">
                                        {!! Form::text('nama_sample', null, array('class'=>'input')) !!}
                                </div>
                            </div>
                            <div class="field">
                                {!! Form::label('Cover') !!}
                                <div class="file">
                                    <label class="file-label">
                                            {!! Form::file('cover', array('class'=>'file-input')) !!}
                                      <span class="file-cta">
                                        <span class="file-icon">
                                          <i class="fas fa-upload"></i>
                                        </span>
                                        <span class="file-label">
                                          Choose a file…
                                        </span>
                                      </span>
                                    </label>
                                </div>
<br>
                                {!! Form::label('Sample (.zip)') !!}
                                <div class="file">
                                    <label class="file-label">
                                            {!! Form::file('sample', array('class'=>'file-input')) !!}
                                      <span class="file-cta">
                                        <span class="file-icon">
                                          <i class="fas fa-upload"></i>
                                        </span>
                                        <span class="file-label">
                                          Choose a file…
                                        </span>
                                      </span>
                                    </label>
                                </div>
                            </div>
                            <div class="field">
                                {!! Form::submit('Upload Sample', array('class'=>'button is-info')) !!}
                            </div>
                            {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>



@endsection
