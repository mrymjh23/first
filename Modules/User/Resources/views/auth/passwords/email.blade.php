@extends('User::auth.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4 mx-auto">

                <h4 class="text-center mb-4">بازیابی رمزعبور</h4>

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    @if (session('status'))
                        <div class="alert " role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="mb-3">
                        <label class="form-label">ایمیل :</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between m-5">
                        <button type="submit" class="btn mx-2 w-100 btn-primary">بازیابی </button><br>
                    </div>


                </form>
            </div>
        </div>
    </div>

@endsection
