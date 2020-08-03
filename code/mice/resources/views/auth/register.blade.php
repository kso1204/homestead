@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                   

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        
                        <!--
                        <div class="form-group row">
                            <label for="u_tname" class="col-md-4 col-form-label text-md-right">{{ __('Prefix') }}</label>

                            <div class="col-md-6">
                                <input id="u_tname" type="u_tname" class="form-control @error('u_tname') is-invalid @enderror" name="u_tname" value="{{ old('u_tname') }}" required autocomplete="u_tname">

                                @error('u_tname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="u_fname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="u_fname" type="u_fname" class="form-control @error('u_fname') is-invalid @enderror" name="u_fname" value="{{ old('u_fname') }}" required autocomplete="u_fname">

                                @error('u_fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="u_lname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="u_lname" type="u_lname" class="form-control @error('u_lname') is-invalid @enderror" name="u_lname" value="{{ old('u_lname') }}" required autocomplete="u_lname">

                                @error('u_lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                      
                        
                        <div class="form-group row">
                            <label for="u_department" class="col-md-4 col-form-label text-md-right">{{ __('Department') }}</label>

                            <div class="col-md-6">
                                <input id="u_department" type="u_department" class="form-control @error('u_department') is-invalid @enderror" name="u_department" value="{{ old('u_department') }}" required autocomplete="u_department">

                                @error('u_department')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="u_company" class="col-md-4 col-form-label text-md-right">{{ __('Company') }}</label>

                            <div class="col-md-6">
                                <input id="u_company" type="u_company" class="form-control @error('u_company') is-invalid @enderror" name="u_company" value="{{ old('u_company') }}" required autocomplete="u_company">

                                @error('u_company')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="u_position" class="col-md-4 col-form-label text-md-right">{{ __('Position') }}</label>

                            <div class="col-md-6">
                                <input id="u_position" type="u_position" class="form-control @error('u_position') is-invalid @enderror" name="u_position" value="{{ old('u_position') }}" required autocomplete="u_position">

                                @error('u_position')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="u_address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="u_address" type="u_address" class="form-control @error('u_address') is-invalid @enderror" name="u_address" value="{{ old('u_address') }}" required autocomplete="u_address">

                                @error('u_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    -->
                    <div class="form-group row">
                        <label for="u_tname" class="col-md-4 col-form-label text-md-right">{{ __('Prefix') }}</label>

                        <div class="col-md-6">
                            <input id="u_tname" type="u_tname" class="form-control @error('u_tname') is-invalid @enderror" name="u_tname" value="{{ old('u_tname') }}" required autocomplete="u_tname">

                            @error('u_tname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <?php
                    $countries = DB::select('select * from countries');
                   ?>
                   <div class="form-group row">
                       <label for="u_country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                       <div class="col-md-6">
                           <select name="u_country" class="form-control" required autocomplete="u_country">
                               @foreach ($countries as $country)
                                   <option value="{{$country->country_name}}">
                                       {{$country->country_name}}
                                   </option>
                               @endforeach
                           </select>
                       </div>
                   </div>
                        <div class="form-group row">
                            <label for="u_mobile" class="col-md-4 col-form-label text-md-right">{{ __('Mobile') }}</label>

                            <div class="col-md-2">
                                <input id="u_mobile_1" type="text" class="form-control @error('u_mobile_1') is-invalid @enderror" name="u_mobile_1" required autocomplete="u_mobile_1">
                            
                                @error('u_mobile_1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            
                            <div class="col-md-2">
                                <input id="u_mobile_2" type="text" class="form-control " name="u_mobile_2" required autocomplete="u_mobile_2">
                            </div>
                            
                            <div class="col-md-2">
                                <input id="u_mobile_3" type="text" class="form-control " required autocomplete="u_mobile_3">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="u_tel" class="col-md-4 col-form-label text-md-right">{{ __('Tel') }}</label>

                            <div class="col-md-2">
                                <input id="u_tel_1" type="text" class="form-control @error('u_tel_1') is-invalid @enderror" name="u_tel_1" required autocomplete="u_tel_1">
                            </div>
                            
                            <div class="col-md-4">
                                <input id="u_tel_2" type="text" class="form-control @error('u_tel_2') is-invalid @enderror" name="u_tel_2" required autocomplete="u_tel_2">
                            </div>
                            
                            @error('u_tel_1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                        @error('u_tel_2')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
