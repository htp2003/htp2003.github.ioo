<!-- resources/views/auth/login.blade.php -->

{{-- <form method="POST" action="{{ route('login') }}">
    @csrf

    <label for="email">Email</label>
    <input type="email" name="email" id="email" required>
    <br/>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" required>

    <button type="submit">Login</button>
</form> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>



    <section class="vh-100 gradient-custom" style="background: linear-gradient(45deg, #1CB5E0, #DFC3F0);">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-white text-dark" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">
                                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                <p class="text-white-50 mb-5">Please enter your email and password!</p>

                                <form action="{{ route('login') }}" method="POST" class="text-start">
                                    @csrf

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <div class="form-outline form-white mb-4">
                                        <input type="email" id="email" class="form-control form-control-lg" name="email" required />
                                        <label class="form-label" for="email">Email</label>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="password" class="form-control form-control-lg" name="password" required />
                                        <label class="form-label" for="password">Password</label>
                                    </div>

                                    <button class="btn btn-outline-dark btn-lg px-5" type="submit" style="background-color: #3693DD; color: #FFFFFF; display: block; margin: 0 auto;">Login</button>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>




