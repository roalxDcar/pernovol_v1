@extends('layouts.principal')

@section('content')
<div class="app-content content">
    <div class="content-header row">
    </div>
    <div class="content-overlay">
    </div>
    <div class="content-wrapper">
        <div class="content-body">
            <section class="row flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 m-0">
                            <div class="card-header border-0">
                                <div class="card-title text-center">
                                    <div class="p-1">
                                        <img alt="branding logo" src="{!! asset('assets/app-assets/images/logo/logo-dark.png') !!}"/>
                                    </div>
                                </div>
                                <h2 class="card-subtitle line-on-side text-center">
                                    <span>
                                        Ingresar al Sistema
                                    </span>
                                </h2>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form  method="POST" action="{{ route('login') }}" class="form-horizontal form-simple" method="POST" novalidate="">
                                        @csrf
                                        <fieldset class="form-group position-relative has-icon-left mb-0">
                                            <input class="form-control" id="email" name="email" placeholder="Email" required="" type="text">
                                                <div class="form-control-position">
                                                    <i class="la la-user">
                                                    </i>
                                                </div>
                                            </input>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input class="form-control" id="password" name="password" placeholder="Contraseña" required="" type="password">
                                                <div class="form-control-position">
                                                    <i class="la la-key">
                                                    </i>
                                                </div>
                                            </input>
                                        </fieldset>
                                        {{--
                                        <div class="form-group row">
                                            <div class="col-sm-6 col-12 text-center text-sm-left">
                                                <fieldset>
                                                    <input class="chk-remember" id="remember-me" type="checkbox">
                                                        <label for="remember-me">
                                                            Remember Me
                                                        </label>
                                                    </input>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-6 col-12 text-center text-sm-right">
                                                <a class="card-link" href="recover-password.html">
                                                    Forgot Password?
                                                </a>
                                            </div>
                                        </div>
                                        --}}
                                        <button class="btn btn-primary btn-block" type="submit">
                                            <i class="ft-unlock">
                                            </i>
                                            INGRESAR
                                        </button>
                                    </form>
                                </div>
                            </div>
                            {{--
                            <div class="card-footer">
                                <div class="">
                                    <p class="float-xl-left text-center m-0">
                                        <a class="card-link" href="recover-password.html">
                                            Recover
                                            password
                                        </a>
                                    </p>
                                    <p class="float-xl-right text-center m-0">
                                        New to Moden Admin?
                                        <a class="card-link" href="register-simple.html">
                                            Sign Up
                                        </a>
                                    </p>
                                </div>
                            </div>
                            --}}
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
