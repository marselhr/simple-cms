@extends('layouts.app')

@section('content')
    <div class="row align-items-center justify-content-center g-0 min-vh-100">
        <div class="col-lg-5 col-md-8 py-8 py-xl-0">
            <!-- Card -->
            <div class="card shadow">
                <!-- Card body -->
                <div class="card-body p-6">
                    <div class="mb-4">
                        <a href="../index.html"><img src="../assets/images/brand/logo/logo-icon.svg" class="mb-4"
                                alt="logo"></a>
                        <h1 class="mb-1 fw-bold">{{ __('Register') }}</h1>
                        <span>Already have an account?
                            <a href="{{ route('login') }}" class="ms-1">{{ __('Login') }}</a></span>
                    </div>
                    <!-- Form -->
                    <form>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Username -->
                            <div class="mb-3">
                                <label for="name" class="col-md-4 col-form-label">{{ __('Username') }}</label>

                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>

                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">

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
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password" placeholder="**************">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Confirm Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <!-- Checkbox -->
                            <div class="mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="agreeCheck">
                                    <label class="form-check-label" for="agreeCheck"><span>I agree to the <a
                                                href="terms-condition-page.html">Terms of
                                                Service </a>and
                                            <a href="terms-condition-page.html">Privacy Policy.</a></span></label>
                                </div>
                            </div>
                            <div>
                                <!-- Button -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
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
