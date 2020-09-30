<div class="form-group">
    <label for="exampleInputUsername1" class="font-weight-bold">Author Name : </label>
    <input type="text" name="name" value="{{old('name',isset($author)?$author->name:null)}}"  class="form-control" id="exampleInputUsername1" placeholder="Author Name">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="exampleInputEmail1" class="font-weight-bold">Author Email : </label>
    <input type="email" name="email" value="{{old('email',isset($author)?$author->email:null)}}" class="form-control" id="exampleInputEmail1" placeholder="Author Email">
    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="exampleInputEmail1" class="font-weight-bold">Author Phone : </label>
    <input type="text" name="phone" value="{{old('phone',isset($author)?$author->phone:null)}}" class="form-control" id="exampleInputEmail1"  placeholder="Author Phone">
    @error('phone')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="exampleInputEmail1" class="font-weight-bold">Author Address : </label>
    <input type="text" name="address" value="{{old('address',isset($author)?$author->address:null)}}" class="form-control" id="exampleInputEmail1"  placeholder="Author Address">
    @error('address')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="exampleInputEmail1" class="font-weight-bold">Author Image : </label>
    <input type="file" class="form-control" name="image">
    @error('image')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="exampleInputEmail1" class="font-weight-bold">Status : </label>
    <label  class="font-weight-bold" for="active">
        <input type="radio" name="status" value="Active" @if(old('status',isset($author)?$author->status:null) == 'Active') checked @endif id="active"> Active
    </label>
    <label class="font-weight-bold" for="inactive">
        <input type="radio" name="status" value="Inactive" @if(old('status',isset($author)?$author->status:null) == 'Inactive') checked @endif id="inactive"> Inactive
    </label>
    @error('image')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
