@extends('layouts.app')

@section('content')
 

    <div>
        <!--############################################################# -->
        <div style="padding: 10px">
            <span class="title is-size-5-mobile">My Books</span>
            <!--
            <a href="/somebooks" class="button is-rounded is-size-7-mobile is-pulled-right">Lihat Lainnya</a>
            -->
            <span class="is-clearfix"></span>
        </div>
        <br class="is-hidden-mobile">
        <div class="columns is-multiline is-variable is-1">
            @forelse ($books as $book)
            <div class="column is-2">
                <div class="card">
                    <div class="card-image">
                    <!-- <span class="ribbon icon has-text-white ">
                        <i class="fab fa-android fa-2x"></i>
                    </span> -->
                    <a href="/book/{{$book->id}}" title="{{$book->judul}}">
                        <figure class="image is-3by4">
                            <img src="{{ asset('storage/book/penulis/'.$book->id_author.'/'.$book->id.'/'.$book->nameFile.'.jpg') }}"
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
                                        
                                    </a>
                                </p>
                            </div>
                        </div>

                        <div class="content">
                            
                        </div>
                    </div>
                </div>
                <div class="card has-text-centered has-background-success is-hidden-mobile" style="padding: 10px 0">
                    <a class="has-text-white">
                        <span class="icon">
                            <i class="fas fa-download"></i>
                        </span>
                        <span>Download APK</span>
                    </a>
                </div>
                <div class="card has-text-centered has-background-info is-hidden-mobile" style="padding: 10px 0">
                    <a class="has-text-white" href="{{ url('/')}}/book_view/?book={{ $book->id_author.'/'.$book->id.'/'.$book->nameFile }}.epub">
                        <span class="icon">
                            <i class="fab fa-readme"></i>
                        </span>
                        <span>Go to Read</span>
                    </a>
                </div>
            </div>

            
            @empty
            <h4 class="title" align="center">No Book</h4>
            @endforelse
        </div>
    </div>


@endsection
