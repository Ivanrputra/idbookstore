@extends('layouts.app')

@section('content')

{{-- search area --}}
<!-- <div class="search-div" style="background-color: #2874f0;width:100%;">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
        <form class="" role="search">
            <div class="input-group">
                <input type="text" class="form-control input-search" placeholder="Search for Books, Autor and more" name="q">
                <div class="input-group-btn">
                    <button class="btn btn-default btn-search" type="submit">
                        <svg width="15px" height="15px">
                            <path d="M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868 11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0 2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895 6.487-6.467c0-3.572-2.905-6.467-6.487-6.467 "></path>
                        </svg>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>   -->   

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
