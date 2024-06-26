<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <div class="container mt-4">  
      <h1 class="mt-4">SignUp Form</h1>
     {{-- <pre>

      @if ($errors->all())
      <ul>
      @foreach ($errors->all() as $error )
        
       <li>{{$error}}</li>
      @endforeach
     </ul>
     @endif
     </pre> --}}
      <form action="{{route('addusers')}}" method="post">
        @csrf
        <div class="form-group">
          <label for="username">Name:</label>
          <input type="text" value="{{ old('username')}}" class="form-control" id="username" name="username" placeholder="Name">
          <span class="text-danger">
            @error('username')
              {{$message}}
            @enderror
          </span>
        </div>

        <div class="form-group">
          <label for="useremail">Email:</label>
          <input type="text" value="{{ old('useremail')}}" class="form-control" id="useremail" name="useremail" placeholder="Email">
          <span class="text-danger">
            @error('useremail')
              {{$message}}
            @enderror
          </span>       
        </div>

        <div class="form-group">
          <label for="age">Age:</label>
          <input type="number" value="{{ old('age')}}" class="form-control" id="age" name="age" placeholder="Age">
          <span class="text-danger">
            @error('age')
              {{$message}}
            @enderror
          </span>
        </div>

        <div class="form-group">
          <label for="phone">Phone Number:</label>
          <input type="text" value="{{ old('phone')}}" class="form-control" id="phone" name="phone" placeholder="Phone Number">
          <span class="text-danger">
            @error('phone')
              {{$message}}
            @enderror
          </span>
        </div>

        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" value="{{ old('password')}}" class="form-control" id="password" name="password" placeholder="Password">
          <span class="text-danger">
            @error('password')
              {{$message}}
            @enderror
          </span>
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384
