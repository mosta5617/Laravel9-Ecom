@extends('admin.layouts.template')

@section('page_title')
    All Product
@endsection

@section('content')
    
<div class="container">
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Image</th>
            <th scope="col">Price</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Electronics</td>
            <td>100</td>
            <td>
                <a href="" class="btn btn-primary btn-sm">Edit</a>
                <a href="" class="btn btn-warning btn-sm">Delete</a>
            </td>
          </tr>
        </tbody>
      </table>
</div>

@endsection