@extends('author.layouts.appa')

@section('content')
<div class="container">
        <div class="columns is-centered">
            <div class="column is-desktop is-one-third">
                <div style="hero">
                    <div class="hero-body">
                        <div class="has-text-centered">
                                <img src="{{ asset('img/IDBOOK_PN.png') }}" alt="" style="width:auto;height:75px;">
                            <h2 class="subtitle">
                                Author -- Register
                            </h2>
                        </div>
                    </div>
                </div>
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/author/register') }}" style="padding: 10px">
                    {{ csrf_field() }}
                        <div class="field">
                            <label class="label">Name</label>
                                <p class="control has-icons-left">
                                  <input class="input{{ $errors->has('name') ? ' is-danger' : '' }}" name="name" type="text" value="{{ old('name') }}" required autofocus>
                                  <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                  </span>
                                </p>
                                @if ($errors->has('name'))
                                    <p class="help is-danger">{{ $errors->first('name') }}</p>
                                    @endif
                              </div>
                              <div class="field">
                                    <label class="label">Email</label>
                                    <p class="control has-icons-left">
                                      <input class="input{{ $errors->has('email') ? ' is-danger' : '' }}" name="email" type="email"  value="{{ old('email') }}" required autofocus>
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
                                      <input class="input{{ $errors->has('password') ? ' is-danger' : '' }}" name="password" type="password" required>
                                      <span class="icon is-small is-left">
                                        <i class="fas fa-lock"></i>
                                      </span>
                                    </p>
                                    @if ($errors->has('password'))
                                    <p class="help is-danger">{{ $errors->first('password') }}</p>
                                    @endif
                                  </div>
                      <div class="field">
                            <label class="label">Confirm Password</label>
                          <p class="control has-icons-left has-icons-right">
                            <input class="input" type="password" name="password_confirmation" required>
                            <span class="icon is-small is-left">
                              <i class="fas fa-lock"></i>
                            </span>
                            <span class="icon is-small is-right">
                                  <i class="fas fa-check"></i>
                                </span>
                          </p>
                        </div>
                        <div class="field">
                            <label class="checkbox">
                                <input type="checkbox">
                                I agree to the <a href="#">terms and conditions</a>
                              </label>
                        </div>
                      <div class="field">
                          
                            
                        <p class="control">
                            <button type="submit" class="button is-info">
                                
                                <span>Register</span>
                                <span class="icon">
                                        <i class="fas fa-sign-in-alt"></i>
                                    </span>
                            </button>
                        </p>
                        </div>
                </form>
            </div>
        </div>
    </div>

<!-- ################################### -->
@endsection
