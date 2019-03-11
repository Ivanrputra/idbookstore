@extends('layouts.app') 

@section('content')
<div class="columns">
    <div class="column is-2" align="center">
        <figure class="image is-128x128">
            <img src="https://openclipart.org/download/247324/abstract-user-flat-1.svg">
        </figure><br>
        <a href="" class="button is-small">Edit Profil</a>
    </div>
    <div class="column is-10" style="padding: 20px">
        <h1 class="title">{{$admin->name}}</h1>
        <h3 class="subtitle">
                <strong>{{count($books)}}</strong> Books
                &nbsp;
                <strong>10</strong> Following
        </h3>
        <div>
            <strong>About:</strong><br>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id excepturi perspiciatis, sapiente aliquam dolor dolore!
            </p>
            
        </div>
    </div>
</div>
<hr>
<div class="columns is-multiline is-mobile is-variable is-1">
        @forelse ($books as $book)
        <div class="column is-2-desktop is-4-mobile">
                <div class="card">
                        <div class="card-image">
                        <a href="/book/{{$book->id}}" title="{{$book->judul}}">
                            <figure class="image is-3by4">
                                <img src="{{ asset('storage/public/book/penulis/'.$book->id_author.'/'.$book->id.'/'.$book->nameFile.'.jpg') }}"
                                    alt="pic-{{$book->id}}">
                            </figure>
                            </a>
                        </div>
                        <div class="card-content" style="padding: 10px">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-6 is-size-7-mobile">{{ str_limit($book->judul, 16) }}</p>
                                    <p class="subtitle is-6 is-size-7-mobile">
                                        <a href="{{ url('/')}}/profil/{{$book->id_author}}" class="has-text-grey">
                                            {{ $book->author->name}}
                                        </a>
                                    </p>
                                </div>
                            </div>
    
                            <div class="content">
                                <p class="level is-mobile is-6 is-size-7-mobile">
                                    <span class="level-left has-text-danger">
                                            <span class="level-item">
                                                <span class="icon is-small">
                                                    <i class="fas fa-star"></i>
                                                    &nbsp;
                                                </span>
                                                <span>4,2</span>
                                            </span>
                                    </span>
                                    <span class="level-right">
                                        <span class="has-text-info">Rp {{$book->harga}}</span>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card has-text-centered has-background-info is-hidden-mobile" style="padding: 10px 0">
                            <a class="has-text-white" onclick="showPayModal('{{$book->id}}')">
                            <span class="icon">
                                <i class="fas fa-shopping-cart"></i>
                            </span>
                            <span>Buy</span>
                        </a>
                    </div>
        </div>
        @empty
            <h4 align="center">No Book</h4>
        @endforelse
    </div>
@endsection