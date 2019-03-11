@extends('layouts.app') 

@section('content') {{-- search area --}}


@if($q == null)
    
    <div>
        <!--############################################################# -->
        <div style="padding: 10px">
            <span class="title is-size-5-mobile">New Release</span>
            
            <a href="#!" id="btnnewrelease" class="button is-rounded is-size-7-mobile is-pulled-right">See more</a>
            
            
            <span class="is-clearfix"></span>
        </div>
        <br class="is-hidden-mobile">
        <div id="newreleaseall"></div>
        <div id="newreleaseslide">
            <div class="columns withslick is-variable is-1">
                @forelse ($news as $book)
                <div class="column is-2 withslickcolumn">
                    <div class="card">
                        <div class="card-image">
                        <span class="ribbon icon has-text-white ">
                            <i class="fab fa-android fa-2x"></i>
                        </span>
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
                                    <p class="title is-6 is-size-7-mobile">{{ str_limit($book->judul, 12) }}</p>
                                    <p class="subtitle is-6 is-size-7-mobile">
                                        <a href="{{ url('/')}}/profil/{{$book->id_author}}" class="has-text-grey">
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
                                        <span class="has-text-info">IDR {{ number_format($book->harga, 0, ',', '.') }}</span>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card has-text-centered has-background-warning is-hidden-mobile" style="padding: 5px 0">
                        <a class="has-text-black" href="/book/{{$book->id}}" title="{{$book->judul}}">
                        
                        <span>See more</span>
                    </a>
                </div>
                    <div class="card has-text-centered has-background-info is-hidden-mobile" style="padding: 5px 0">
                            <a class="has-text-white" onclick="showPayModal('{{$book->id}}')">
                            <span class="icon">
                                <i class="fas fa-shopping-cart"></i>
                            </span>
                            <span>Buy</span>
                        </a>
                    </div>
                </div>

                
                @empty
                <h4 class="title" align="center">No Book</h4>
                @endforelse
            </div>
        </div>
        <!-- ################################################## -->
        <hr>
        <div style="padding: 10px">
            <span class="title is-size-5-mobile">Best Seller</span>
            <!--
            <a href="/somebooks" class="button is-rounded is-size-7-mobile is-pulled-right">Lihat Lainnya</a>
            -->
            <span class="is-clearfix"></span>
        </div>
        <br class="is-hidden-mobile">
        <div class="columns withslick is-variable is-1">
            @forelse ($bests as $book)
            <div class="column is-2 withslickcolumn">
                <div class="card">
                    <div class="card-image">
                    <span class="ribbon icon has-text-white ">
                        <i class="fab fa-android fa-2x"></i>
                    </span>
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
                                <p class="title is-6 is-size-7-mobile">{{ str_limit($book->judul, 12) }}</p>
                                <p class="subtitle is-6 is-size-7-mobile">
                                    <a href="{{ url('/')}}/profil/{{$book->id_author}}" class="has-text-grey">
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
                                    <span class="has-text-info">IDR {{ number_format($book->harga, 0, ',', '.') }}</span>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card has-text-centered has-background-warning is-hidden-mobile" style="padding: 5px 0">
                    <a class="has-text-black" href="/book/{{$book->id}}" title="{{$book->judul}}">
                    
                    <span>See more</span>
                </a>
            </div>
                <div class="card has-text-centered has-background-info is-hidden-mobile" style="padding: 5px 0">
                        <a class="has-text-white" onclick="showPayModal('{{$book->id}}')">
                        <span class="icon">
                            <i class="fas fa-shopping-cart"></i>
                        </span>
                        <span>Buy</span>
                    </a>
                </div>
            </div>
            @empty
            <h4 class="title" align="center">No Book</h4>
            @endforelse
        </div>

        <!--############################################################# -->
        <hr>
        <div style="padding: 10px">
            <span class="title is-size-5-mobile">Other Books</span>
            <!--
            <a href="/somebooks" class="button is-rounded is-size-7-mobile is-pulled-right">Lihat Lainnya</a>
            -->
            <span class="is-clearfix"></span>
        </div>
        <br class="is-hidden-mobile">
        <div class="columns withslick is-variable is-1">
            @forelse ($books as $book)
            <div class="column is-2 withslickcolumn">
                <div class="card">
                    <div class="card-image">
                    <span class="ribbon icon has-text-white ">
                        <i class="fab fa-android fa-2x"></i>
                    </span>
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
                                <p class="title is-6 is-size-7-mobile">{{ str_limit($book->judul, 12) }}</p>
                                <p class="subtitle is-6 is-size-7-mobile">
                                    <a href="{{ url('/')}}/profil/{{$book->id_author}}" class="has-text-grey">
                                        <!--@if ($q == null && $q == '') {{ $book->author->name}} @else {{ $book->name}} @endif-->
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
                                    <span class="has-text-info">IDR {{ number_format($book->harga, 0, ',', '.') }}</span>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card has-text-centered has-background-warning is-hidden-mobile" style="padding: 5px 0">
                    <a class="has-text-black" href="/book/{{$book->id}}" title="{{$book->judul}}">
                    
                    <span>See more</span>
                </a>
            </div>
                <div class="card has-text-centered has-background-info is-hidden-mobile" style="padding: 5px 0">
                        <a class="has-text-white" onclick="showPayModal('{{$book->id}}')">
                        <span class="icon">
                            <i class="fas fa-shopping-cart"></i>
                        </span>
                        <span>Buy</span>
                    </a>
                </div>
            </div>
            @empty
            <h4 class="title" align="center">No Book</h4>
            @endforelse
        </div>
    </div>
    
@else

    <div>
            <div style="padding: 10px">
                @if($cate == null)
                    <span class="subtitle">Search for : <i>{{$q}}</i></span><br>
                    <span class="header"><b>{{ count($books) }}</b> books found</span>
                @else
                    <span class="title">{{$cate}}</span>
                @endif
                    <!--
                    <a href="/somebooks" class="button is-rounded is-size-7-mobile is-pulled-right">Lihat Lainnya</a>
                    -->
                    <span class="is-clearfix"></span>
                </div>
                <br class="is-hidden-mobile">
                <div class="columns is-variable is-1">
                    @forelse ($books as $book)
                    <div class="column is-2">
                        <div class="card">
                            <div class="card-image">
                            <span class="ribbon icon has-text-white ">
                                <i class="fab fa-android fa-2x"></i>
                            </span>
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
                                        <p class="title is-6 is-size-7-mobile">{{ str_limit($book->judul, 12) }}</p>
                                        <p class="subtitle is-6 is-size-7-mobile">
                                            <a href="{{ url('/')}}/profil/{{$book->id_author}}" class="has-text-grey">
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
                                            <span class="has-text-info">IDR {{ number_format($book->harga, 0, ',', '.') }}</span>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card has-text-centered has-background-warning is-hidden-mobile" style="padding: 5px 0">
                            <a class="has-text-black" href="/book/{{$book->id}}" title="{{$book->judul}}">
                            
                            <span>See more</span>
                        </a>
                    </div>
                        <div class="card has-text-centered has-background-info is-hidden-mobile" style="padding: 5px 0">
                                <a class="has-text-white" onclick="showPayModal('{{$book->id}}')">
                                <span class="icon">
                                    <i class="fas fa-shopping-cart"></i>
                                </span>
                                <span>Buy</span>
                            </a>
                        </div>
                    </div>
                    @empty
                    <h4 class="title" align="center">No Book</h4>
                    @endforelse
                </div>
    </div>
@endif
    <!-- #################### MODAL #################### -->
    @forelse ($books as $book)
    <div class="modal" id="pay-modal{{$book->id}}">
        <div class="modal-background"></div>
        <div class="modal-card">
            <section class="modal-card-body">
                <div class="media">
                    <figure class="media-left">
                        <a href="#">
                            <p class="image is-128x128 is-3by4">
                                <img src="{{ asset('storage/public/book/penulis/'.$book->id_author.'/'.$book->id.'/'.$book->nameFile.'.jpg') }}"
                                    alt="pic{{$book->id}}">
                            </p>
                        </a>
                    </figure>
                    <div class="media-content" style="padding-top:10px">
                        <div class="content">
                            <p class="title is-size-5-touch">{{$book->judul}}</p>
                            <p class="subtitle is-size-6-touch">
                                <a href="{{ url('/')}}/profil/{{$book->id_author}}" class="has-text-grey">
                                    @if ($q == null && $q == '') {{ $book->author->name}} @else {{ $book->name}} @endif
                                </a>
                            </p>
                            <br class="is-hidden-touch">
                            <p class="title is-size-2 is-size-4-touch has-text-info">
                                IDR {{$book->harga}}
                                <br>
                                <span class="tag">{{ $book->kategori }}</span>
                            </p>
                            <p class="is-pulled-right">
                                <button class="button is-info is-small" onclick="window.location='{{ url('/')}}/belibuku/{{$book->id}}'">
                                    <span class="icon">
                                        <i class="fas fa-shopping-cart"></i>
                                    </span>
                                    <span>Buy</span>
                                </button>
                                <button class="button is-small" onclick="hidePayModal('{{$book->id}}')">Batalkan</button>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
    
        </div>
    </div>
    @empty
    @endforelse

    
@endsection