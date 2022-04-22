<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
        <div class="container mt-3 px-4 ">
            <div class="row">
              
            <form action="{{url('/')}}/login" method="post">
                @csrf
                <h1>Customer Login </h1>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email"   class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value=" ">
                    @error('email')
                    <span class="text-warning" role="alert">{{ $message }}</span>
                    @enderror
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="spassword" class="form-label">Password</label>
                    <input type="password" name="password"  class="form-control" id="spassword">
                    @error('password')
                    <span class="text-warning" role="alert">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>  
    </div>
  
  </body>
</html>
