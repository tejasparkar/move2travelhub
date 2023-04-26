
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.8.2/dist/alpine.min.js"></script>
<div class="container">

<div>
<h1>Dashboard</h1>
<div > 



</div>

<ul class=" justify-content-end nav nav-tabs">
  
  @auth
  <li class="nav-item">
  <span>
  Welcome {{auth()->user()->name}} &nbsp;
  </span>
  </li>
  <li class="nav-item">
    <form action="/logout" class="inline" method="POST">
    @csrf
    <button class="btn btn-danger" onclick="return confirm('Are you sure you want to Logout?')" type="submit">
    <i class="fa close"></i>  
    Logout</button>
    </form>
  
  </li>

  @else
  <li class="nav-item">
  <button class="btn btn-success">Login</button>
  </li>
  <li class="nav-item">
  <button class="btn btn-primary">Register</button>
  </li>
  @endauth

</ul>

</div>


@if(session('sucess'))
<div class="alert alert-success alert-dismissible" x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"  role="alert">
  <p>{{session('sucess')}}</p>
</div>
   
@elseif(session('error'))
<div class="alert alert-danger alert-dismissible fade show"  x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"   role="alert">
  <p>{{session('error')}}</p>  
</div>     
@endif






<form action="{{ route('package.create')}}" method="GET" >
    @csrf
    <button class="btn btn-success">Create a Holiday Package</button>
</form>

@if($packages->count())
<div class="table-responsive">
<table class="table table-striped table-bordered">
  <tr>
    <th class="align-middle">Package Image</th>
    <th>Package Title</th>
    <th>Package Description</th>
    <th colspan="2">Actions</th>
  </tr>
  @foreach($packages as $package)
  <tr>
    <td class="align-middle" style="text-align: center;vertical-align: center;"> <img height="70px" src="/storage/{{$package->coverImage}}" alt="" srcset=""></td>
  <td id="package{{$package->id}}"> {{$package['title']}} </td>
    <td>{{$package->description}}</td>
    <td >
    

    <div class="row">
    <div class="col" style="flex: 0 0 1%;">
        <form action="{{ route('package.edit',$package->id) }}" method="GET">
            @csrf
        <button class="btn btn-primary"  id="edit{{$package->id}}" aria-labelledby="edit{{$package->id}} package{{$package->id}}" type="submit">Edit</button>
        </form>  
        </div>
        <div class="col">
        <form action="{{ route('package.destroy',$package->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" id="delete{{$package->id}}" onclick="return confirm('Are you sure you want to delete?')" aria-labelledby="delete{{$package->id}} package{{$package->id}}" type="submit">Delete</button>
        </form>
        </div>
        
    </div>
    </td>
    
  </tr>
@endforeach
</table>  
</div>

@else
<p>No Packages found</p>
@endif
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>