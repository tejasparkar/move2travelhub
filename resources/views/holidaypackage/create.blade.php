
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<div class="container">
<h1>create a holiday package</h1>

<form action="/package" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group row">
        <div class="col">
        <label for="title">Package Title</label>
        <input placeholder="Package Title" value="{{old('title')}}" class="form-control" type="text" name="title" id="title">
        @error('title')
        <small style="color:red !important" id="" class="form-text text-muted">{{$message}}</small>
        @enderror
        </div>
        <div class="col">
        <label for="description">Description</label>
        <input placeholder="Short Description about package" class="form-control" value="{{old('description')}}"  type="text" name="description" id="description">
        @error('description')
        <small style="color:red !important" id="" class="form-text text-muted">{{$message}}</small>
        @enderror
        </div>

    </div>
    
    <div class="form-group row">
    <div class="col">
    <label for="location">Location</label>
    <input type="text" placeholder="Location of package" class="form-control" name="location"  value="{{old('location')}}"  id="location">
    @error('location')
        <small style="color:red !important" id="" class="form-text text-muted">{{$message}}</small>
     @enderror
    </div>
    <div class="col">
    <label for="coverImage">Cover Image</label>
    <input  class="form-control" type="file" name="coverImage" id="coverImage">
    @error('coverImage')
        <small style="color:red !important" id="" class="form-text text-muted">{{$message}}</small>
        @enderror
    </div>
    <div class="col">
    <label for="tags">Tags</label>
    <input  class="form-control" type="text" name="tags" value="{{old('tags')}}"  id="tags">
    @error('tags')
        <small style="color:red !important" id="" class="form-text text-muted">{{$message}}</small>
        @enderror
    </div>
    <div class="col">
    <label for="price">Price</label>
    <input placeholder="Price in ₹"  class="form-control" type="text" name="price" value="{{old('price')}}"  id="price">
    @error('price')
        <small style="color:red !important" id="" class="form-text text-muted">{{$message}}</small>
        @enderror
    </div>
    <div class="col">
    <label for="days/nights">Days/nights</label>
    <input placeholder="days/nights"  class="form-control" type="text" name="days/nights" value="{{old('days/nights')}}"  id="days/nights">
    @error('days/nights')
        <small style="color:red !important" id="" class="form-text text-muted">{{$message}}</small>
        @enderror
    </div>
    <div class="col">
    <label for="ratings">Ratings</label>
    <input placeholder="ratings"  class="form-control" type="text" name="ratings" value="{{old('ratings')}}"  id="ratings">
    @error('ratings')
        <small style="color:red !important" id="" class="form-text text-muted">{{$message}}</small>
    @enderror
    </div>
    <div class="col">
    <label for="numberOfdaysItenary">No of days</label>
    <select onchange="appendItenaryInputs()" class="form-select" name="numberOfdaysItenary" id="numberOfdaysItenary" value="{{old('numberOfdaysItenary')}}">
        @for($i=1; $i<51;$i++)
        <option value="{{$i}}">{{$i}}</option>
        @endfor
    </select>
    @error('numberOfdaysItenary')
        <small style="color:red !important" id="" class="form-text text-muted">{{$message}}</small>
        @enderror
    </div>
    </div>
    <div id="itenary">
    <div class="form-group" >
    <label for="itenaryday1">Day 1 Itinerary</label>
    <input  class="form-control" type="text" name="itenaryday1" value="{{old('itenaryday1')}}"  id="itenaryday1">
    @error('itenaryday1')
        <small style="color:red !important" id="" class="form-text text-muted">{{$message}}</small>
        @enderror
    </div>
    </div>
    
    <div class="form-group">
    <label for="longDescription">More Details of Package</label>
    <textarea  class="form-control" name="longDescription" id="longDescription" cols="30" rows="10">{{old('longDescription')}}</textarea>
    @error('longDescription')
        <small style="color:red !important" id="" class="form-text text-muted">{{$message}}</small>
        @enderror
    </div>
    <button class="btn btn-primary" type="submit">Create</button>
</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<script>
    const output = document.getElementById("itenary");
    const appendItenaryInputs = ()=>{
        output.innerHTML = "";
        const value = document.getElementById("numberOfdaysItenary").value;
       // console.log(value.value);
        for (var index = 1; index <= value; ++index) {
          output.innerHTML += ` <div class="form-group" >
    <label for="itenaryday${index}">Day ${index} Itinerary</label>
    <input  class="form-control" type="text" name="itenaryday${index}" value="{{old('itenaryday${index}')}}"  id="itenaryday${index}">
        @error('itenaryday${index}')
        <small style="color:red !important" id="" class="form-text text-muted">{{$message}}</small>
        @enderror
    </div>`        
        }
    }
</script>