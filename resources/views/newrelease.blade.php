

<div class="columns is-multiline is-variable is-2">
                @forelse ($books as $book)
                <div class="column is-2">
                    <div class="card">
                        <div class="card-image">
                        <span class="ribbon icon has-text-white ">
                            <i class="fab fa-android"></i>
                        </span>
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

