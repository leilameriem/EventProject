@extends('layouts.auth')

@section('content')

<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Formulaire d'inscription à l'événement</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                      
                      

                        <div class="form-row">
                             <div class="name">{{ __('E-Mail Address') }}</div>
                            <div class="value">
                                <div class="input-group">
                                    <input id="email" type="email" class="form-control input--style-5 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>


                       <div class="form-row">
                            <div class="name"> {{ __('Password') }}</div>
                           <div class="value">
                                <div class="input-group">
                                <input id="password" type="password" class="form-control input--style-5 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </div>
                        
   
                     <!--div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn--radius-2 btn--red">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div-->





                            <div class="row row-space">
                                    <div class="col-2">
                                         <button type="submit" class="btn btn--radius-2 btn--red">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                </button>
                                    </div>
                                    <div class="col-3">
                                          <button  class="btn btn--radius-2 btn--blue" href="{{route('FrontEnd.events_detail')}}">
                                    Annuler
                                </button>
                                    </div>
                     </div>

                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
