@extends('admin.layouts.appa')

@section('content')
<div class="container">
        <div class="columns is-centered">
            <div class="column is-desktop is-one-third">
                <div style="hero">
                    <div class="hero-body">
                        <div class="has-text-centered">
                                <img src="{{ asset('img/IDBOOK_PN.png') }}" alt="" style="width:auto;height:75px;">
                            
                            <h2 class="subtitle">
                                Admin -- Login
                            </h2>
                        </div>
                    </div>
                </div>
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/login') }}">
                    {{ csrf_field() }}
                    <div class="field">
                        <label class="label">Email</label>
                        <p class="control has-icons-left">
                          <input class="input{{ $errors->has('email') ? ' is-danger' : '' }}" type="email" name="email" value="{{ old('email') }}" required autofocus>
                          <span class="icon is-small is-left">
                            <i class="fas fa-user"></i>
                          </span>
                        </p>
                        @if ($errors->has('email'))
                            <p class="help is-danger">{{ $errors->first('email') }}</p>
                        @endif
                      </div>
                      <div class="field">
                        <label class="label">Password</label>
                        <p class="control has-icons-left">
                          <input class="input{{ $errors->has('password') ? ' is-danger' : '' }}" type="password" name="password" required>
                          <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                          </span>
                        </p>
                        @if ($errors->has('password'))
                            <p class="help is-danger">{{ $errors->first('password') }}</p>
                        @endif
                      </div>
                      <div class="field">
                        <p class="control">
                            <button type="submit" class="button is-info">
                                <span class="icon">
                                    <i class="fas fa-sign-in-alt"></i>
                                </span>
                                <span>Masuk</span>
                            </button>
                        </p>
                        </div>
                </form>
            </div>
        </div>
    </div>

@endsection
