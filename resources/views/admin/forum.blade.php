@extends('admin.layouts.app')

@section('content') 
<style>
  .card-content {
      height: 400px;
      overflow-y: scroll;
  }
</style>
<!-- BREADCRUMB -->
<nav class="breadcrumb" aria-label="breadcrumbs">
  <ul>
      <li><a href="{{ url('/admin/home')}}">Home</a></li>
      <li><a href="{{ url('/admin/konfirmasipublish')}}">Publish Confirmation</a></li>
      <li class="is-active"><a href="#" aria-current="page">Forum</a></li>
  </ul>
</nav>

<!-- CONTENT -->
<div class="card">
  <div class="card-header">
      <div class="card-header-title">Chat with Author</div>
  </div>
  <div class="card-content" style="background-color:powderblue">
      @foreach ($chat as $b)

        @if($b->writer == 'admin')
          <div class="has-text-right is-small">
              <small>{{ date('Y-m-d, H:i', strtotime($b->created_at)) }}</small>
              <strong>You</strong>
          </div>
          <div class="box has-background-light column is-7 is-offset-5">
              <p>{{$b->message}}</p>
          </div>
        @else
          <div class="has-text-left is-small">
              <strong>{{$b->writer}}</strong> 
              <small>{{ date('Y-m-d, H:i', strtotime($b->created_at)) }}</small>
          </div>
          <div class="box column is-7">
              <p>{{$b->message}}</p>
          </div>
        @endif
      @endforeach
    
  </div>
  <footer class="card-footer">
          {!! Form::open(['url' => 'admin/postReply', 'enctype'=>"multipart/form-data", 'class'=>"column is-12 card-footer-item"]) !!}
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="field is-grouped">
              <span class="control is-expanded">
                  <input class="input is-fullwidth" name="message" type="text" placeholder="Type a message..">
              </span>
              <input type="hidden" name="id" value="{{$id_book}}">
              <span class="control">
                  
                  <button type="submit" class="button is-info">
                      <span>Send</span>
                      <span class="icon">
                          <i class="fas fa-paper-plane"></i>
                      </span>
                  </button>
              </span>
          </div>
          {!! Form::close() !!}
  </footer>
</div>

@endsection
