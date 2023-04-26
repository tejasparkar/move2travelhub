
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


<div class="login-content">

<div class="container">

   <div style="margin-top:100px" class="form-group row justify-content-md-center ">
    <div class="col col-lg-6">
    <h4>Login to move2travelhub</h4>
    <form action='/users/authenticate' method="POST">
            @csrf
            <div class="form-group">
            <input class="form-control" name="email" type="email" placeholder="Enter email address" value="{{old('email')}}" />
            @error('email')
            <small style="color:red !important" id="" class="form-text text-muted">{{$message}}</small>
            @enderror
            </div>
            <div class="form-group">
            <input class="form-control" name="password" value="{{old('password')}}" type="password" placeholder="Enter password" />
            @error('password')
            <small style="color:red !important" id="" class="form-text text-muted">{{$message}}</small>
            @enderror
            </div>
           
            <div class="form-btn mar-bottom-20">
            <button class="btn btn-primary" type="submit">Login</button>
            </div>
        </form>
    </div>
   </div>



</div>
</div>



