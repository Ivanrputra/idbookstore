@extends('admin.layouts.app')

@section('content') 
<!-- BREADCRUMB -->
<nav class="breadcrumb" aria-label="breadcrumbs">
    <ul>
        <li><a href="#">Home</a></li>
        <li class="is-active"><a href="#" aria-current="page">Status Naskah</a></li>
    </ul>
    </nav>

    <!-- CONTENT -->
    <div class="card">
        <div class="card-header">
            <div class="card-header-title">
            {{$naskah}}
            </div>
        </div>
        <div class="card-content">
            <table class="table is-striped is-fullwidth">
                <thead>
                    <tr>
                        <th>Pengirim</th>
                        <th>Pesan</th>
                        <th>naskah</th>
                    </tr>
                </thead>
                <tbody>
                    @php $id_author=0; @endphp
                      @foreach ($status as $b)
                			<tr>
		                        <td>
                                @if($b->id_admin==0)
                                    author
                                    @php $id_author = $b->id_author; @endphp
                                @else
                                    admin
                                @endif
                                </td>
                                <td>{{$b->message}}</td>
                                <td>
                                <a class="button is-info is-fullwidth" href="{{ asset('storage/book/penulis/'.$id_author.'/doc/'.$b->id_naskah.'/'.$b->title_naskah) }}" >Download</a>
                                </td>
                        @endforeach
                </tbody>
            </table>
            
            @php $new_title = explode(".",$b->title_naskah)[0]; @endphp
            {!! Form::open(['url' => 'admin/reply_stat/'.$b->id_naskah.'/'.$id_author.'', 'files'=>'true', 'enctype'=>"multipart/form-data"]) !!}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="field">
                    <div class="control">
                        {!! Form::hidden('judul',$new_title) !!}
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

@endsection
