@extends('admin.layouts.template')

@section('page_title')
   Edit Product Image
@endsection

@section('content')
    
<div class="container">

  @if ($errors->any())
  <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
    </div>
  @endif

    <form action="{{ route('updateimage') }}" method="POST">
      @csrf
      <input type="hidden" value="{{ $image_info->id }}" name="image_id">
        <div class="form-group row">
          <label for="category_name" class="col-sm-2 col-form-label">Previous Image</label>
          <div class="col-sm-5">
            <td> <img src="{{ asset($image_info->product_image) }}" alt="" style="width: 100px" class="img-thumbnail"> </td>
          </div>
        </div>

        <div class="form-group row">
            <label for="product_image" class="col-sm-2 col-form-label"> New Image</label>
            <div class="col-sm-5">
              <input type="file" class="form-control" id="product_image" name="product_new_image" placeholder="Product Image">
            </div>
        </div>
 
        <div class="form-group row text-right">
          <div class="col-sm-5 ">
            <button type="submit" class="btn btn-primary ">Update Image</button>
          </div>
        </div>
      </form>
</div>

@endsection