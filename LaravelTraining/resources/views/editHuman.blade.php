<link href="{{ asset('css/form.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<center><h1>Edit Employee</h1></center>

<form method="POST" action="{{ route('update',$human->id)}}" class="addForm">
{{ csrf_field() }}
  <div class="form-group">
    <label>First Name</label>
    <input type="text" class="form-control" name="first_name" value={{ old('first_name', $human->first_name) }}>
    @if($errors->has('first_name'))
        <span class="error">
            {{ $errors->first('first_name')}}
        </span>
    @endif
  </div>

  <div class="form-group">
    <label>Middle Name</label>
    <input type="text" class="form-control" name="middle_name" value={{ old('middle_name', $human->middle_name) }}>
    @if($errors->has('first_name'))
        <span class="error">
            {{ $errors->first('middle_name')}}
        </span>
    @endif
  </div>

  <div class="form-group">
    <label>Last Name</label>
    <input type="text" class="form-control" name="last_name" value={{ old('last_name', $human->last_name) }}>
    @if($errors->has('first_name'))
        <span class="error">
            {{ $errors->first('last_name')}}
        </span>
    @endif
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" name="email" value={{ old('email', $human->email) }}>
    @if($errors->has('email'))
        <span class="error">
            {{ $errors->first('email')}}
        </span>
    @endif
  </div>

  <div class="form-group">
    <label>Age</label>
    <input type="text" class="form-control"  name="age" value={{ old('age', $human->age) }}>
    @if($errors->has('age'))
        <span class="error">
            {{ $errors->first('age')}}
        </span>
    @endif
  </div>

  <div class="form-group">
    <label for="gender">Gender&nbsp;&nbsp;&nbsp;</label>
    <input type="radio" name="gender" value="1" {{ old('gender', $human->gender == 1) ? 'checked' : '' }}>Male
    <input type="radio" name="gender" value="2" {{ old('gender', $human->gender == 2)  ? 'checked' : '' }}>Female
    @if($errors->has('gender'))
        <span class="error">
            {{ $errors->first('gender')}}
        </span>
    @endif
  </div>

  <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control"  name="address" value={{ old('address', $human->address) }}>
    @if($errors->has('address'))
        <span class="error">
            {{ $errors->first('address')}}
        </span>
    @endif
  </div>

  <center><button type="submit" class="btn btn-primary">Submit</button></center>
</form>