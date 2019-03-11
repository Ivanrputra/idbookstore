@extends('author.layouts.app')

@section('content') 
<!-- BREADCRUMB -->
<nav class="breadcrumb" aria-label="breadcrumbs">
    <ul>
        <li><a href="#">Home</a></li>
        <li class="is-active"><a href="#" aria-current="page">List Book</a></li>
    </ul>
    </nav>

    <!-- CONTENT -->
    <div class="card">
        <div class="card-header">
            <div class="card-header-title">List Book</div>
        </div>
        <div class="card-content">
            <table class="table is-striped is-fullwidth">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                      @foreach ($list_buku as $b)
                			<tr>
		                        <td class="has-text-centered" width="10%">{{$b->id}}</td>
		                        <td>{{$b->judul}}</td>
		                        <td>{{$b->harga}}</td>
		                        <td class="" width="15%">
                                @if($b->status == 'sudah')
                                <button class='button is-success is-small'>
                                    <span class=icon'>
                                        <i class='fas fa-check-circle'></i>
                                    </span>
                                </button>
                              @else
                              <a href="forum/{{$b->id}}" id="{{$b->id}}" class='button is-info is-small'>
                                <span class=icon'>
                                    <i class='fas fa-comments'></i>
                                </span>
                                <span>Forum</span>
                              </a>
                              @endif
		                        </td>
		                        <td class="" width="15%">
                                    <a href="#" class="button is-link is-small" title="Detail" onclick="showDetailBookModal('{{$b->id}}')">
	                                    <span class="icon">
	                                        <i class="fas fa-eye"></i>
	                                    </span>
	                                </a>
                                    <a href="{{ url('/author/listbuku/edit/'.$b->id.'')}}" class="button is-info is-small" title="Edit">
	                                    <span class="icon">
	                                        <i class="fas fa-pencil-alt"></i>
	                                    </span>
	                                </a>
	                                <a href="{{ url('/author/hapusbuku/'.$b->id.'')}}" class="button is-danger is-small" title="Delete">
	                                    <span class="icon">
	                                        <i class="far fa-trash-alt"></i>
	                                    </span>
	                                </a>
		                        </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- #################### MODAL #################### -->
    @foreach ($list_buku as $b)
    <div class="modal" id="detail-modal{{$b->id}}">
        <div class="modal-background"></div>
        <div class="modal-card">
                <header class="modal-card-head">
                        <span class="modal-card-title">Detail</span>
                        <button class="button" onclick="hideDetailBookModal('{{$b->id}}')">Close</button>
                      </header>
            <section class="modal-card-body">
                <div class="media">
                    <figure class="media-left">
                        <a href="#">
                            <p class="image is-128x128 is-3by4">
                                <img src="{{ asset('storage/public/book/penulis/'.$b->id_author.'/'.$b->id.'/'.$b->nameFile.'.jpg') }}"
                                    alt="pic{{$b->id}}">
                            </p>
                        </a>
                    </figure>
                    <div class="media-content" style="padding-top:10px">
                        <div class="content">
                            <table class="table">
                                <tr>
                                    <th width="15%">Title</th>
                                    <td>: {{$b->judul}}</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>: {{$b->deskripsi}}</td>
                                </tr>
                                <tr>
                                    <th>Category</th>
                                    <td>: {{$b->kategori}}</td>
                                </tr>
                                <tr>
                                    <th>Pages</th>
                                    <td>: {{$b->halaman}}</td>
                                </tr>
                                <tr>
                                    <th>Language</th>
                                    <td>: {{$b->bahasa}}</td>
                                </tr>
                                <tr>
                                    <th>Price</th>
                                    <td>: IDR {{ number_format($b->harga, 0, ',', '.') }}</td>
                                </tr>
                                <tr>
                                    <th>Published on</th>
                                    <td>: {{ date('d M Y', strtotime($b->created_at)) }}</td>
                                </tr>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    @endforeach


@endsection
