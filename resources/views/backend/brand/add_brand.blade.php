@extends('backend.backend_master')
@section('page-title', 'Add | Category')
@section('custom-head')
<link rel="stylesheet" href="{{asset('backend')}}/assets/css/lib/datatable/dataTables.bootstrap.min.css">

<style>
.container{
	width: 300px;

	font-family: sans-serif;
}

label{
	display: block;
	max-width: 300px;
    margin: 0 auto 15px;
	text-align: center;
    word-wrap: break-word;
	color: #1a4756;
}

.hidden, #uploadImg:not(.hidden) + label{
	display: none;
}

#file{
	display: none;
  	margin: 0 auto;
}

#upload{
	display: block;
	padding: 10px 25px;
	border: 0;
	margin: 0 auto;
	font-size: 15px;
	letter-spacing: 0.05em;
	cursor: pointer;
	background: #216e69;
	color: #fff;
	outline: none;
	transition: .3s ease-in-out;
	&:hover, &:focus{
		background: #1AA39A;
	}
	&:active{
		background: #13D4C8;
		transition: .1s ease-in-out;
	}
}

img{
	display: block;
	margin: 0 auto 15px;
}
</style>

@endsection
@section('page-content')

<div class="col-lg-12">
  <div class="breadcrumbs">
      <div class="col-sm-4">
          <div class="page-header float-left">
              <div class="page-title">
                  <h1>Dashboard</h1>
              </div>
          </div>
      </div>
      <div class="col-sm-8">
          <div class="page-header float-right">
              <div class="page-title">
                  <ol class="breadcrumb text-right">
                      <li class="active">Dashboard</li>
                      <li class="active">Brand</li>
                  </ol>

              </div>
          </div>
      </div>
  </div>
<div class="card">
    <div class="card-header"><strong>Brand Form</strong>
        <small>
            <p class="text-center  alert-success">{{Session::get('message_success')}}</p>
            <p class="text-center  alert-danger">{{Session::get('message_error')}}</p>
        </small>
    </div>

    <form action="{{route('brand.store')}}" method="post"> @csrf
    <div class="card-body card-block">

        <div class="form-group">
            <label for="brand_name" class=" form-control-label">Brand Name</label>
            <input type="text" id="brand_name" name="brand_name" placeholder="Enter Brand Name" class="form-control">
            @if ($errors->has('brand_name'))
                <div class="error">{{ $errors->first('brand_name') }}</div>
            @endif
        </div>

      <div class="form-group">
            <label for="company" class=" form-control-label">Add Brand Logo</label>
            <input type="file" id="brand_logo" name="brand_logo" class="form-control">
            @if ($errors->has('brand_logo'))
                <div class="error">{{ $errors->first('brand_logo') }}</div>
            @endif
        </div>
        <div class="form-group">
          <div style="margin-right:40%" class="container">
          	<label style="width:100px;background:silver;height:100px" class="label" for="input">Brand Logo</label>
          	<div class="input">
          		<input name="input" id="file" type="file">
          	</div>
          </div>
        </div>
        <div class="form-group form-check-inline form-check">
            <label for="inline-checkbox1" class="form-check-label ">
                <input type="checkbox" id="inline-checkbox1" name="brand_major"  value="1" class="form-check-input">Set as Major
            </label>
            @if ($errors->has('brand_major'))
                <div class="error">{{ $errors->first('brand_major') }}</div>
            @endif
        </div>

        <button type="submit" class="btn btn-dark btn-lg btn-block">Add Brand</button>
    </div>
  </form>
</div>

</div>

@endsection
@section('script-footer')

</script>
    <script type="text/javascript">
    $(function(){
var container = $('.container'), inputFile = $('#file'), img, btn, txt = 'Browse', txtAfter = 'Change';

if(!container.find('#upload').length){
  container.find('.input').append('<input type="button" value="'+txt+'" id="upload">');
  btn = $('#upload');
  container.prepend('<img src="" class="hidden" alt="Uploaded file" id="uploadImg" width="100">');
  img = $('#uploadImg');
}

btn.on('click', function(){
  img.animate({opacity: 0}, 300);
  inputFile.click();
});

inputFile.on('change', function(e){
  container.find('label').html( inputFile.val() );

  var i = 0;
  for(i; i < e.originalEvent.srcElement.files.length; i++) {
    var file = e.originalEvent.srcElement.files[i],
      reader = new FileReader();

    reader.onloadend = function(){
      img.attr('src', reader.result).animate({opacity: 1}, 700);
    }
    reader.readAsDataURL(file);
    img.removeClass('hidden');
  }

  btn.val( txtAfter );
});
});
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>
<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
@endsection
