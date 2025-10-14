@extends('auth.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-4 mx-auto">
    <h4 class="text-center mb-4">ورود</h4>

        <form method="POST" action="{{ route('login') }}">
            @csrf

        <div class="mb-3">
            <label class="form-label">ایمیل</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">رمز عبور</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>


                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">مرا به خاطر بسپار</label>
                    </div>
                </div>


        <div class="d-flex justify-content-between m-5">
            <button type="submit" class="btn w-50 btn-outline-primary">ورود</button><br>
            <a href="{{route('register')}}" class="btn btn-outline-secondary">ثبت نام</a>
        </div>
            <div class="mb-5">
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">رمز عبور خود را فراموش کرده اید؟</a>
                @endif
            </div>

    </form>
</div>
</div>
</div>

@endsection
