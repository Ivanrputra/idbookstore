@extends('author.layouts.app')

@section('content')
<!-- BREADCRUMB -->
<nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ url('/author/home')}}">Home</a></li>
            <li><a href="{{ url('/author/listbuku')}}">List Book</a></li>
            <li class="is-active"><a href="#" aria-current="page">Edit</a></li>
        </ul>
        </nav>
    
        @foreach ($book as $b)
            
        
        <!-- CONTENT -->
        <div class="columns is-centered">
            <div class="column">
                <div class="card">
                    <div class="card-header">
                        <div class="card-header-title">Edit Book</div>
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
                            {!! Form::open(['url' => 'author/listbuku/edit/'.$b->id, 'files'=>'true', 'enctype'=>"multipart/form-data"]) !!}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="field">
                                <label class="label">Book Title</label>
                                <div class="control">
                                    {!! Form::text('judul', $b->judul, array('class'=>'input')) !!}
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Price</label>
                                <div class="control">
                                    {!! Form::number('harga', $b->harga, array('class'=>'input')) !!}
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Category</label>
                                <div class="control select is-fullwidth">
                                    <select name="kategori">
                                        <option value="Biographies" {{ ($b->kategori == 'Biographies') ? "selected" : "" }} >Biographies</option>
                                        <option value="Business & Investment" {{ ($b->kategori == 'Business & Investment') ? "selected" : "" }} >Business & Investment</option>
                                        <option value="Child Book" {{ ($b->kategori == 'Child Book') ? "selected" : "" }}>Child Book</option>
                                        <option value="Comic" {{ ($b->kategori == 'Comic') ? "selected" : "" }}>Comic</option>
                                        <option value="Cook, Food & Drink" {{ ($b->kategori == 'Cook, Food & Drink') ? "selected" : "" }}>Cook, Food & Drink</option>
                                        <option value="Fiction & Literature" {{ ($b->kategori == 'Fiction & Literature') ? "selected" : "" }}>Fiction & Literature</option>
                                        <option value="Health, Mind & Body" {{ ($b->kategori == 'Health, Mind & Body') ? "selected" : "" }}>Health, Mind & Body</option>
                                        <option value="History" {{ ($b->kategori == 'History') ? "selected" : "" }}>History</option>
                                        <option value="Religious & Spiritual" {{ ($b->kategori == 'Religious & Spiritual') ? "selected" : "" }}>Religious & Spiritual</option>
                                        <option value="Romance" {{ ($b->kategori == 'Romance') ? "selected" : "" }}>Romance</option>
                                        <option value="Technique" {{ ($b->kategori == 'Technique') ? "selected" : "" }}>Technique</option>
                                    </select>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Pages</label>
                                <div class="control">
                                    {!! Form::number('pages', $b->halaman, array('class'=>'input')) !!}
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Language</label>
                                <div class="control select is-fullwidth">
                                    <select name="language">
                                      <option value="Indonesia" {{ ($b->bahasa == 'Indonesia') ? "selected" : "" }}>Indonesia</option>
                                      <option value="English" {{ ($b->bahasa == 'English') ? "selected" : "" }}>English</option>
                                    </select>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Description</label>
                                <div class="control is-fullwidth">
                                    {!! Form::textarea('deskripsi', $b->deskripsi, array('class'=>'textarea','rows'=>3)) !!}
                                </div>
                            </div>
                            <div class="field">
                                
                                <label class="label">Cover Book</label>
                                
                                <div class="control is-fullwidth">
                                    <input type="checkbox" name="reuploadcover"> Check if you want to reupload cover book <br>
                                    <input type="file" name="coverBook" id="coverBook" class="button">
                                </div>
                                
                            </div>
                            <div class="field">
                                <label class="label">File EPUB</label>
                                <div class="control is-fullwidth">
                                    <input type="checkbox" name="reuploadbook"> Check if you want to reupload epub <br>
                                    <input type="file" name="book" id="book" class="button">
                                </div>
                            </div>
                            <div class="field">
                                {!! Form::submit('Submit', array('class'=>'button is-info')) !!}
                            </div>
                            {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        @endforeach
       

@endsection
