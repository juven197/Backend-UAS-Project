@extends('layouts.auth')

@section('content')
    <section class="gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-black border-white text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-4 mt-md-4 pb-4">

                                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                <p class="text-white-50 mb-5">Please enter your username and password!</p>

                                <form method="POST" action="{{ route('auth.login.post') }}">
                                    @csrf
                                    <div class="form-outline form-white mb-4">
                                        <input type="email" id="typeEmailX" name="email"
                                               class="form-control form-control-lg"/>
                                        <label class="form-label" for="typeEmailX">Email</label>
                                    </div>

                                    <div class="form-outline form-white mb-1">
                                        <input type="password" id="password" name="password"
                                               class="form-control form-control-lg"/>
                                        <label class="form-label" for="password">Password</label>
                                    </div>
                                    @if($errors->has('email') || $errors->has('password'))
                                        <div class="alert alert-danger" role="alert">
                                            Invalid email or password. Please try again.
                                        </div>
                                    @endif
                                    <div class="mb-4" style="text-align: right">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            Remember me
                                        </label>
                                    </div>
                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                                    <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a>
                                    </p>
                                </form>
                            </div>

                            <div>
                                <p class="mb-0">Dont have an account?
                                </p>
                                <a href="{{ route('auth.register.index') }}" class="text-white-50 fw-bold">Register</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
