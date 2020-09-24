<div class="form-group">
    <label for="exampleInputUsername1">Category Name</label>
    <input type="text" name="name" value="{{old('name',isset($category)?$category->name:null)}}"  class="form-control" id="exampleInputUsername1" placeholder="Category">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group form-control">
    <label for="status" class="font-weight-bold">Status : </label>
    <label class="font-weight-bold" for="active">
    <input type="radio" name="status" value="Active" @if(old('status',isset($category)?$category->status:null) == 'Active') checked @endif id="active">
    Active</label>
    <label class="font-weight-bold" for="inactive">
    <input type="radio" name="status" value="Inactive" @if(old('status',isset($category)?$category->status:null) == 'Inactive') checked @endif id="inactive">
    Inactive</label>
    @error('status')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
