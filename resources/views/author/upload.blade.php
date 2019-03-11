@extends('author.layouts.app')

@section('content')
<!-- BREADCRUMB -->
<nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ url('/author/home')}}">Home</a></li>
            <li class="is-active"><a href="#" aria-current="page">Upload Book</a></li>
        </ul>
        </nav>
    

        <!-- CONTENT -->
        <div class="columns is-centered">
            <div class="column">
                <div class="card">
                    <div class="card-header">
                        <div class="card-header-title">Upload Book</div>
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
                            {!! Form::open(['url' => 'author/home/postBook', 'files'=>'true', 'enctype'=>"multipart/form-data"]) !!}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="field">
                                <label class="label">Book Title</label>
                                <div class="control">
                                    {!! Form::text('judul', null, array('class'=>'input')) !!}
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Price</label>
                                <div class="control">
                                    {!! Form::number('harga', null, array('class'=>'input')) !!}
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Category</label>
                                <div class="control select is-fullwidth">
                                    <select name="kategori">
                                        <option value="" selected disabled hidden>Choose</option>
                                        <option value="Biographies">Biographies</option>
                                        <option value="Business & Investment">Business & Investment</option>
                                        <option value="Child Book">Child Book</option>
                                        <option value="Comic">Comic</option>
                                        <option value="Cook, Food & Drink">Cook, Food & Drink</option>
                                        <option value="Fiction & Literature">Fiction & Literature</option>
                                        <option value="Health, Mind & Body">Health, Mind & Body</option>
                                        <option value="History">History</option>
                                        <option value="Religious & Spiritual">Religious & Spiritual</option>
                                        <option value="Romance">Romance</option>
                                        <option value="Technique">Technique</option>
                                    </select>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Pages</label>
                                <div class="control">
                                    {!! Form::number('pages', null, array('class'=>'input')) !!}
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Language</label>
                                <div class="control select is-fullwidth">
                                    <select name="language">
                                      <option value="Indonesia">Indonesia</option>
                                      <option value="English">English</option>
                                    </select>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Description</label>
                                <div class="control is-fullwidth">
                                    {!! Form::textarea('deskripsi', null, array('class'=>'textarea','rows'=>3)) !!}
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Cover Book</label>
                                <div class="control is-fullwidth">
                                    <input type="file" name="coverBook" id="coverBook" class="button">
                                </div>
                                
                            </div>
                            <div class="field">
                                <label class="label">File EPUB</label>
                                <div class="control is-fullwidth">
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

       

@endsection
