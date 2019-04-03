@extends('layouts.app')

@section('content')
<div class="columns">
    <div class="column is-8">
        <div class="card is-tablet is-desktop">
            <div class="media">
                <div class="media-content">
                    <div class="columns">
                        <div class="column is-3">
                            <figure class="image is-3by4">
                                <img src="{{ asset('storage/book/penulis/'.$book->id_author.'/'.$book->id.'/'.$book->nameFile.'.jpg') }}"
                                    alt="pic-{{$book->id}}">
                            </figure>
                            <br>
                            <p class="has-text-centered has-text-danger has-background-light">
                                <span class="subtitle is-3 has-text-danger">4,0</span>
                                <br>
                                <span class="icons">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </span>

                                <p class="has-text-centered has-text-dark has-background-light is-size-7">
                                    <span>Total</span>
                                    <span class="icon">
                                        <i class="fas fa-user"></i>
                                    </span>
                                    <span>10</span>
                                </p>
                            </p>
                        </div>
                        <div class="column" style="padding: 30px">
                            <h1 class="title is-size-4-mobile">{{$book->judul}}</h1>
                            <h2 class="subtitle is-5 is-size-6-mobile">
                                <a href="#">{{$book->author->name}}</a>
                                <br>
                                <span class=" subtitle is-7">{{ date('d M Y', strtotime($book->created_at)) }}</span>
                            </h2>
                            @if (!is_null($user) && count($cekbeli) > 0)
                                <a class="button is-info is-pulled-right" href="{{ url('/')}}/book_view/?book={{ $book->id_author.'/'.$book->id.'/'.$book->nameFile }}.epub'">
                                    <span class="icon">
                                        <i class="fab fa-readme"></i>
                                    </span>
                                    <span>Go to Read</span>
                                </a>
                                <button class="button is-success is-pulled-right">
                                    <span class="icon">
                                        <i class="fas fa-download"></i>
                                    </span>
                                    <span>Download APK</span>
                                </button>    
                            @else
                                <button class="button is-info is-pulled-right" onclick="showPayModal('{{$book->id}}')">
                                    <span class="icon">
                                        <i class="fas fa-shopping-cart"></i>
                                    </span>
                                    <span>Buy</span>
                                </button>    
                            @endif
                            

                            
                            <strong class="header">IDR {{ number_format($book->harga, 0, ',', '.') }}</strong>
                            <div class="is-clearfix"></div>
                            <hr>
                            <h1 class="title is-6 is-size-7-mobile">SYNOPSIS</h1>
                            <p class="is-size-7-mobile has-text-justified">{{$book->deskripsi}}</p>
                            <br>
                            <h1 class="title is-6 is-size-7-mobile">ADDITIONAL INFORMATION</h1>
                            <div class="columns is-mobile is-size-6-mobile">
                                <div class="column">
                                    <span class="title is-6">Published on</span><br>
                                    <span>{{ date('d M Y', strtotime($book->created_at)) }}</span>
                                </div>
                                <div class="column">
                                    <span class="title is-6">Pages</span><br>
                                    <span>{{$book->halaman}}</span>
                                </div>
                                <div class="column">
                                    <span class="title is-6">Language</span><br>
                                    <span>{{$book->bahasa}}</span>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="section">
                        <span class="subtitle is-5">Feedback</span>
                        <button class="button is-rounded is-pulled-right is-size-7-mobile">
                            <span class="icon">
                                <i class="fas fa-pencil-alt"></i>
                            </span>
                            <span>Give Your Feedback</span>
                        </button>
                        <span class="is-clearfix"></span>
                        <br>
                        <article class="media is-size-7-mobile">
                            <figure class="media-left">
                                <p class="image is-64x64">
                                    <img src="https://bulma.io/images/placeholders/128x128.png">
                                </p>
                            </figure>
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <span class="is-pulled-right ">
                                            <a href="" class="icon has-text-danger">
                                                <i class="far fa-heart fa-2x"></i>
                                            </a>
                                        </span>
                                        <strong>John Smith</strong>
                                        <small class="has-text-grey">7 Juli 2018</small>
                                    </p>
                                    <p>
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id consectetur
                                        eligendi quaerat modi sed nulla?
                                    </p>
                                </div>
                            </div>
                        </article>
                        <article class="media is-size-7-mobile">
                            <figure class="media-left">
                                <p class="image is-64x64">
                                    <img src="https://bulma.io/images/placeholders/128x128.png">
                                </p>
                            </figure>
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <span class="is-pulled-right ">
                                            <a href="" class="icon has-text-danger">
                                                <i class="fas fa-heart fa-2x"></i>
                                            </a>
                                        </span>
                                        <strong>John Smith</strong>
                                        <small class="has-text-grey">7 Juli 2018</small>

                                    </p>
                                    <p>
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id consectetur
                                        eligendi quaerat modi sed nulla?
                                    </p>
                                </div>
                            </div>
                        </article>
                        <a href="#" class="is-pulled-right">See All Feedbacks</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ############################# SIDEBAR KANAN (BUKU LAIN) ################################### -->

    <div class="column is-4">
        <!-- ### PREVIEW BUKU, SKIP DULU ### 
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">
                    Book Review
                </p>
            </header>
            <div class="card-content">
                <div class="content">
                    >- Ebook kecil belum ada <-
                </div>
            </div>
            <footer class="card-footer">
                <a href="#" class="card-footer-item">
                    <span class="icon">
                        <i class="fas fa-arrow-circle-left"></i>  
                    </span>
                    <span>Previous</span>
                </a>
                <a href="#" class="card-footer-item">
                    <span>Next</span>
                    <span class="icon">
                        <i class="fas fa-arrow-circle-right"></i>  
                    </span>
                </a>
            </footer>
        </div>
        <br>
        -->
        <div style="padding: 10px">
            <span class="title is-size-5">Other Books</span>
            <!-- <a href="#" class="button is-rounded is-size-7-mobile is-pulled-right">Lihat Lainnya</a> -->
            <span class="is-clearfix"></span>
        </div>
        @forelse ($simil as $book) <div class="card" style="margin-bottom: 10px">
            <div class="media">
                <figure class="media-left">
                    <a href="#">
                        <p class="image is-128x128 is-3by4">
                           <img src="{{ asset('storage/book/penulis/'.$book->id_author.'/'.$book->id.'/'.$book->nameFile.'.jpg') }}"
                                    alt="pic-{{$book->id}}">
                        </p>
                    </a>
                </figure>
                <div class="media-content" style="padding-top:10px">
                    <div class="content">
                        <p class="title is-6">{{ $book->judul }}</p>
                        <!-- <p class="subtitle is-6">
                            <a href="#" class="has-text-grey">Winston Brown</a>
                        </p> -->
                        
                        <p class="subtitle is-7 has-text-justified">
                            {{$book->deskripsi}}
                        </p>
                        <p class="level is-mobile is-6">
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
                                &nbsp;
                            </span>

                        </p>
                    </div>
                </div>
            </div>
    </div>
    @empty
    <h4 class="title" align="center">No Book</h4>
    @endforelse
</div>

</div>

<!-- Modal -->
<div class="modal" id="pay-modal{{$book->id}}">
    <div class="modal-background"></div>
    <div class="modal-card">
        <section class="modal-card-body">
            <div class="media">
                <figure class="media-left">
                    <a href="#">
                        <p class="image is-128x128 is-3by4">
                            <img src="{{ asset('storage/book/penulis/'.$book->id_author.'/'.$book->id.'/'.$book->nameFile.'.jpg') }}"
                                alt="pic{{$book->id}}">
                        </p>
                    </a>
                </figure>
                <div class="media-content" style="padding-top:10px">
                    <div class="content">
                        <p class="title is-size-5-touch">{{$book->judul}}</p>
                        <p class="subtitle is-size-6-touch">
                            <a href="#" class="has-text-grey">{{$book->author->name}}</a>
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
@endsection