@extends('layouts.web')

@section('content')

<body>
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a>
                        <span>Register</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section Begin -->
    <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2>Register</h2>
                        <form action="{{ route('register') }}" method="post" class="beta-form-checkout" id="my-form">
                            @csrf
                            <div class="form-input @error('email') has-error has-feedback @enderror">
                                <label for="email">Email address</label>
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                    autocomplete="email" required>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div> <br>

                            <div class="form-input @error('name') has-error has-feedback @enderror">
                                <label for="name">Full name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name') }}" autocomplete="name" required>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div> <br>

                            <div class="form-input @error('address') has-error has-feedback @enderror">
                                <label for="name">Address</label>
                                <input type="text" name="address"
                                    class="form-control @error('address') is-invalid @enderror"
                                    value="{{ old('address') }}" autocomplete="address" required>
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div> <br>

                            <div class="form-input @error('phone') has-error has-feedback @enderror">
                                <label for="name">Phone</label>
                                <input type="number" name="phone"
                                    class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}"
                                    autocomplete="phone" required>
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div> <br>

                            <div class="form-input @error('city') has-error has-feedback @enderror">
                                <label for="name">City</label>
                                <input type="text" name="city" class="form-control @error('city') is-invalid @enderror"
                                    value="{{ old('city') }}" autocomplete="city" required>
                                @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div> <br>

                            <div class="form-input @error('password') has-error has-feedback @enderror">
                                <label for="password">Password</label>
                                <input type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    autocomplete="new-password" required>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div> <br>

                            <div class="form-input @error('password_confirm') has-error has-feedback @enderror">
                                <label for="password_confirm">Confirm password</label>
                                <input type="password" name="password_confirmation" class="form-control"
                                    autocomplete="new-password" required>
                                @error('password_confirm')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <button type="submit" class="site-btn register-btn" id="btn-submit"
                                style="border: none">REGISTER</button>
                        </form>
                        <div class="switch-login">
                            <a href="{{ route('login') }}" class="or-login">Or Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->
</body>
@endsection
