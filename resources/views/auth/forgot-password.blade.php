<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WMoney - Register</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/icon/mw.png') }}">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">

</head>

<body class="d-flex align-items-center justify-content-center">

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 ">
                <img src="{{ asset('assets/img/img-forgot.png') }}" alt="MoneyWise App" class="img-fluid">
            </div>
            <div class="col-lg-6">
                <div class="form-container p-4" style="border-radius: 20px">
                    <h1 class="form-title">Forgot Password</h1>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input id="email" type="email" class="form-control" name="email" required
                                autocomplete="email">
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>



                        <button type="submit" class="btn btn-ungu btn-block">Submit</button>

                    </form>

                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-CZwr4zVuM9vMpcJCCGjzBCDVPtLarLkZMg/yD2j2MR5J1Y4U3QCzqYwTCtJlSGI/" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-+0n0xVW2eSR5Lqk5KA7w5fjMouJwMmwZym0kqjv0r6h7Z1KS7xfovrFNYuw3hwpH" crossorigin="anonymous">
    </script>
</body>

</html>
