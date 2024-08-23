<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Ebube App</title>

    <style>
        #submit-btn{
            background-color: blue;
            padding: 20;
            font-size: 15px;
            font-weight: 700;
            border-radius: 5px;
            border: none;
        }
    </style>
</head>
<body>


<div class="container">
    
        @if (session('fail'))
          <div class="alert alert-danger text-center">{{session('fail')}}</div>
          @elseif (session('success'))
          <div class="alert alert-success text-center">{{session('success')}}</div>
        @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Signup') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('signup') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('UserName') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <button id="submit-btn" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>