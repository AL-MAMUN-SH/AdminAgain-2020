<div class="form-group">
    <label for="" class="font-weight-bold">Category Type : </label>
    <select class="form-control" name="category_id" id="category">
        <option value="" class="font-weight-bold">Select</option>
        @foreach($categories as  $id=>$category)
            <option class="text-black font-weight-bold" @if(old('category_id',isset($post)?$post->category_id:null) == $id) selected @endif value="{{$id}}">{{$category}}</option>
        @endforeach
    </select>
    @error('category_id')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="" class="font-weight-bold">Author Name  :</label>
    <select class="form-control" name="author_id" id="author">
        <option value="" class="font-weight-bold">Select</option>
        @foreach($authors as  $id=>$author)
            <option value="{{$id}}" @if(old('author_id',isset($post)?$post->author_id:null) == $id)selected @endif>{{$author}}</option>
        @endforeach
    </select>
    @error('author_id')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="exampleInputUsername1" class="font-weight-bold">Title : </label>
    <input type="text" name="title" value="{{old('title',isset($post)?$post->title:null)}}" class="form-control" placeholder="Post Title">
    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="exampleInputEmail1" class="font-weight-bold">Details </label>
    <textarea class="form-control" name="details" id="exampleInputEmail1" cols="30" rows="8">{{old('details',isset($post)?$post->details:null)}}</textarea>
    @error('details')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="exampleInputEmail1" class="font-weight-bold">Post Image : </label>
    <input type="file" class="form-control" name="image">
    @error('image')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="exampleInputEmail1" class="font-weight-bold">Is Featured : </label>
    <label for="is_featured"  class="font-weight-bold" >
    <input type="checkbox" name="is_featured" value="1" @if(old('is_featured',isset($post)?$post->is_featured:null) == 1) checked @endif id="is_featured"> Yes
    </label>
    @error('is_featured')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="exampleInputEmail1" class="font-weight-bold">Status : </label>
    <label  class="font-weight-bold" for="publish">
        <input type="radio" name="status" value="Publish" @if(old('status',isset($post)?$post->status:null) == 'Publish') checked @endif id="publish"> Publish
    </label>
    <label class="font-weight-bold" for="unpublish">
        <input type="radio" name="status" value="Unpublish" @if(old('status',isset($post)?$post->status:null) == 'Unpublish') checked @endif id="unpublish"> Unpublish
    </label>
    @error('status')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
