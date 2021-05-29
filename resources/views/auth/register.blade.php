@extends('layouts.auth')

@section('content')
<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Formulaire de connection à l'événement</h2>
                </div> <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                           
                       <div class="form-row">
                             <div class="name">{{ __('Name') }}</div>
                            <div class="value">
                                <div class="input-group">
                                    <input id="name" type="text" class="form-control input--style-5 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>

                        

                         <div class="form-row">
                             <div class="name">{{ __('E-Mail Address') }}</div>
                            <div class="value">
                                <div class="input-group">
                                    <input id="email" type="email" class="form-control input--style-5 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>



                    

                       <div class="form-row">
                             <div class="name">{{ __('Password') }}</div>
                            <div class="value">
                                <div class="input-group">
                                     <input id="password" type="password" class="form-control input--style-5 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>



                         <div class="form-row">
                             <div class="name">{{ __('Confirm Password') }}</div>
                            <div class="value">
                                <div class="input-group">
                                     <input id="password-confirm" type="password" class="form-control input--style-5" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <label class="label label--block">choisir</label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Organisateur 
                                    <input type="radio" checked="checked" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">participant
                                    <input type="radio" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                     


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
  

                 <div class="row row-space">
                                    <div class="col-2">
                                          <button type="submit" class="btn btn--radius-2 btn--red">
                                     {{ __('Register') }}
                                </button>
                                    </div>
                                    <div class="col-3">
                                          <button  class="btn btn--radius-2 btn--blue" href="{{route('FrontEnd.events_detail')}}">
                                    Annuler
                                </button>
                                    </div>
                                </div>

   
                      <!--div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn--radius-2 btn--red">
                                     {{ __('Register') }}
                                </button>

                            
                            </div>
                             <div class="col-md-4 offset-md-8">
                                <button type="submit" class="btn btn--radius-2 btn--red">
                                     {{ __('Register') }}
                                </button>

                            
                            </div-->


                            
                        <div>



                    </form>
                </div>
            </div>
        </div>
</div>

@endsection
