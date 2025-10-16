@extends('auth.master')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-4 mx-auto">
                <h4 class="text-center mb-4">تغییر رمزعبور</h4>

                <form method="POST" action="{{  route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

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
                        <label class="form-label">رمز عبور جدید</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">تکرار رمز عبور جدید</label>
                        <input id="confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="password">
                    </div>

                    <div class="d-flex justify-content-between m-5">
                        <button type="submit" class="btn  w-100 btn-primary">تغییر رمز</button>
                    </div>

                </form>
            </div>
        </div>
    </div>


@endsection
