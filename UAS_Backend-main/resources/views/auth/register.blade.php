@extends('layouts.auth')

@section('content')
    <section class="gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-black border-white text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-4 mt-md-4 pb-4">

                                <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
                                <p class="text-white-50 mb-5">Please enter your login and password!</p>

                                <form method="POST" action="{{ route('auth.register.index') }}">
                                    @csrf
                                    @if($errors->any())
                                        <div class="alert alert-danger" role="alert">
                                            Incorrect registration information. Please check the entered information and try again.
                                        </div>
                                    @endif
                                    <div class="form-outline form-white mb-4">
                                        <input type="text" id="name" name="name" class="form-control form-control-lg"/>
                                        <label class="form-label" for="name">Name</label>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="email" id="email" name="email"
                                               class="form-control form-control-lg"/>
                                        <label class="form-label" for="email">Email</label>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="password" name="password"
                                               class="form-control form-control-lg"/>
                                        <label class="form-label" for="password">Password</label>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="password-confirm" name="password_confirmation"
                                               class="form-control form-control-lg"/>
                                        <label class="form-label" for="password-confirm">Repeat password</label>
                                    </div>

                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Register
                                    </button>
                                </form>
                            </div>

                            <div>
                                <p class="mb-0">Already have an account?
                                </p>
                                <a href="{{route('auth.login.index')}}" class="text-white-50 fw-bold">Login</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
