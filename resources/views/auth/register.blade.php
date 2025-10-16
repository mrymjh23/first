@extends('auth.master')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-4 mx-auto">
                <h4 class="text-center mb-4">ثبت ‌نام</h4>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">نام </label>
                        <input id="name" type="text" class="form-control" @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">ایمیل</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">موبایل</label>
                        <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile">
                        @error('mobile')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">رمز عبور</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">تکرار رمز عبور</label>
                        <input id="confirm" type="password" class="form-control" name="password_confirmation"
                               required autocomplete="password">
                    </div>

                    <div class="d-flex justify-content-between m-5">
                        <button type="submit" class="btn  w-100 btn-primary">ثبت‌ نام</button>
                    </div>
                    <div class="mb-5">
                            <a class="btn btn-link" href="{{ route('login') }}">قبلا ثبت نام کرده اید؟</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
