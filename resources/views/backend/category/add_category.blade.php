@extends('backend.backend_master')
@section('page-title', 'Add | Category')
@section('custom-head')
<link rel="stylesheet" href="{{asset('backend')}}/assets/css/lib/datatable/dataTables.bootstrap.min.css">
@endsection
@section('page-content')
<div class="col-lg-12">
<div class="card">
    <div class="card-header"><strong>Category Form</strong>
        <small>
            <p class="text-center  alert-success">{{Session::get('message_success')}}</p>
            <p class="text-center  alert-danger">{{Session::get('message_error')}}</p>
        </small>
    </div>

    <form action="{{route('category.store')}}" method="post"> @csrf
    <div class="card-body card-block">

        <div class="form-group">
            <label for="cat_name" class=" form-control-label">Category Name</label>
            <input type="text" id="cat_name" name="cat_name" placeholder="Enter Category Name" class="form-control">
            @if ($errors->has('cat_name'))
                <div class="error">{{ $errors->first('cat_name') }}</div>
            @endif
        </div>

        <!--<div class="form-group">
            <label for="company" class=" form-control-label">Add Category Image</label>
            <input type="file" id="company" name="cat_image" class="form-control">
            @if ($errors->has('cat_image'))
                <div class="error">{{ $errors->first('cat_image') }}</div>
            @endif
        </div>
        <div class="form-group form-check-inline form-check">
            <label for="inline-checkbox1" class="form-check-label ">
                <input type="checkbox" id="inline-checkbox1" name="cat_major"  value="1" class="form-check-input">Set as Major
            </label>
            @if ($errors->has('cat_major'))
                <div class="error">{{ $errors->first('cat_major') }}</div>
            @endif
        </div> -->

        <button type="submit" class="btn btn-dark btn-lg btn-block">Add</button>
    </div>
  </form>
</div>
<div class="card">
    <div class="card-header">
        <strong class="card-title">Category List Table</strong>

    </div>
    <div class="card-body">
        <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th width="10%">SL</th>

                <th width="70%">Category Name</th>

                <th width="20%">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $i=0;?>
            @foreach($category_list as $category)
                <?php $i++;?>
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$category->cat_name}}</td>
                      <td>
                        <a href="#edit{{$category->id}}" data-toggle="modal" class="btn btn-success"><i class='fa fa-edit'></i> Edit</a>
                        <a href="#delete{{$category->id}}" data-toggle="modal" class="btn btn-danger"><i class='fa fa-trash'></i> Delete</a>
                      </td>
                </tr>


            @include('backend.category.popup.modal')
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
