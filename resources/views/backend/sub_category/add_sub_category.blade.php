@extends('backend.backend_master')
@section('page-title', 'Add | Category')
@section('custom-head')
<link rel="stylesheet" href="{{asset('backend')}}/assets/css/lib/datatable/dataTables.bootstrap.min.css">
@endsection
@section('page-content')
<?php
  $category_list = App\Category::All();
 ?>
<div class="col-lg-12">
<div class="card">
    <div class="card-header"><strong>Sub Category Form</strong>
        <small>
            <p class="text-center  alert-success">{{Session::get('message_success')}}</p>
            <p class="text-center  alert-danger">{{Session::get('message_error')}}</p>
        </small>
    </div>

    <form action="{{route('sub_category.store')}}" method="post"> @csrf
    <div class="card-body card-block">

      <div class="form-group">
          <label for="cat_name" class=" form-control-label">Select Category</label>

          <select class="form-control" name="cat_id">
            <option value="">Select Category.......</option>
            @foreach($category_list as $cats)
              <option value="{{$cats->id}}">{{$cats->cat_name}}</option>
            @endforeach
          </select>
          @if ($errors->has('cat_id'))
              <div class="error">{{ $errors->first('cat_id') }}</div>
          @endif
      </div>

        <div class="form-group">
            <label for="sub_cat_name" class=" form-control-label">Sub Category Name</label>
            <input type="text" id="sub_cat_name" name="sub_cat_name" placeholder="Enter Sub Category Name" class="form-control">
            @if ($errors->has('sub_cat_name'))
                <div class="error">{{ $errors->first('sub_cat_name') }}</div>
            @endif
        </div>



        <button type="submit" class="btn btn-dark btn-lg btn-block">Add Sub Category</button>
    </div>
  </form>
</div>
<div class="card">
    <div class="card-header">
        <strong class="card-title">Sub Category List Table</strong>

    </div>
    <div class="card-body">
        <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th width="10%">SL</th>

                <th width="35%">Category</th>
                <th width="35%">Sub Category</th>

                <th width="20%">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $i=0;?>
            @foreach($sub_cat as $category)
                <?php $i++;?>
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$category->cat_name}}</td>
                    <td>{{$category->sub_cat_name}}</td>
                      <td>
                        <a href="#edit{{$category->id}}" data-toggle="modal" class="btn btn-success"><i class='fa fa-edit'></i> Edit</a>
                        <a href="#delete{{$category->id}}" data-toggle="modal" class="btn btn-danger"><i class='fa fa-trash'></i> Delete</a>
                      </td>
                </tr>


            @include('backend.sub_category.popup.modal')
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>

@endsection
@section('script-footer')




    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>

@endsection
