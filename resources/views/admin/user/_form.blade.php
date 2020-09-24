<div class="form-group">
    <label for="exampleInputUsername1">Username</label>
    <input type="text" name="name" value="{{old('name',isset($newuser)?$newuser->name:null)}}"  class="form-control" id="exampleInputUsername1" placeholder="Username">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" value="{{old('email',isset($newuser)?$newuser->email:null)}}" class="form-control" id="exampleInputEmail1" placeholder="Email">
    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="text" name="phone" value="{{old('phone',isset($newuser)?$newuser->phone:null)}}" class="form-control" id="exampleInputEmail1"  placeholder="phone">
    @error('phone')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
