@extends('user_template.layouts.template')

@section('page_title')
    Flayer | Shipping Address
@endsection

@section('main-content')

<h2> Shipping Address </h2>
@if ($errors->any())
<div class="alert alert-danger" role="alert">
          @foreach ($errors->all() as $error)
              {{ $error }}
          @endforeach
  </div>
@endif
<form action="{{ route('addshippingaddress') }}" method="POST">
    @csrf
    <div class="row mb-3">
      <label for="phonenumber" class="col-sm-2 col-form-label">Phome Number</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="phonenumber" name="phonenumber">
      </div>
    </div>
    <div class="row mb-3">
        <label for="Address" class="col-sm-2 col-form-label">City/Village Name</label>
        <div class="col-sm-6">
            <textarea name="address" id="Address" cols="30" rows="5" class="form-control"></textarea>
        </div>
    </div>
    <div class="row mb-3">
        <label for="postalcode" class="col-sm-2 col-form-label">Postal Code</label>
        <div class="col-sm-6">
          <input type="number" class="form-control" id="postalcode" name="postalcode">
        </div>
    </div>
    <div class="row mb-3">
        <label for="submit" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-6">
            <input type="submit" value="Next" class="btn btn-primary">
        </div>
    </div>
</form>


@endsection