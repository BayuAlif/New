<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 10 Custom Login and Registration - Register Page</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <section>

        <div class="form-box">
    
            <div class="card-header">
                <h1 class="card-title">Register</h1>
            </div>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="input-field">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="John Doe" required>
                    </div>
                    <div class="input-field">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email"
                            placeholder="name@example.com" required>
                    </div>
                    <div class="input-field">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                    </div>
                    <div class="input-field">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password" required>
                    </div>
                    <div class="input-field">
                        <p class="dnt-acc">Have already an account? <a href="{{ route('login') }}" class="link">Login here</a></p>
                    </div>
                    <div class="input-field">
                            <button class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>