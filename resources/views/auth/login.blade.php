@extends('layouts.app')

@section('content')
    <div class="row align-items-center justify-content-center g-0 min-vh-100">

        <div class="col-lg-5 col-md-8 py-8 py-xl-0">
            <!-- Card -->
            <div class="card shadow ">
                <!-- Card body -->
                <div class="card-body p-6">
                    <div class="mb-4">
                        <a href="../index.html"><img src="../assets/images/brand/logo/logo-icon.svg" class="mb-4"
                                alt="logo-icon"></a>
                        <h1 class="mb-1 fw-bold">{{ __('Login') }}</h1>
                        <span>Don’t have an account? <a href="{{ route('register') }}"
                                class="ms-1">{{ __('Register') }}</a></span>
                    </div>
                    <!-- Form -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Username -->
                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password"
                                placeholder="**************" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- Checkbox -->
                        <div class="d-lg-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label " for="remember">{{ __('Remember Me') }}</label>
                            </div>
                            <div>
                                <a href="forget-password.html">Forgot your password?</a>
                            </div>
                        </div>
                        <div>
                            <!-- Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary ">{{ __('Login') }}</button>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="mt-4 text-center">
                            <!--Facebook-->
                            <a href="#" class="btn-social btn-social-outline btn-facebook">
                                <i class="mdi mdi-facebook fs-4"></i>
                            </a>
                            <!--Twitter-->
                            <a href="#" class="btn-social btn-social-outline btn-twitter">
                                <i class="mdi mdi-twitter fs-4"></i>
                            </a>
                            <!--LinkedIn-->
                            <a href="#" class="btn-social btn-social-outline btn-linkedin">
                                <i class="mdi mdi-linkedin"></i>
                            </a>
                            <!--GitHub-->
                            <a href="#" class="btn-social btn-social-outline btn-github">
                                <i class="mdi mdi-github"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
