

<!-- Central Modal Medium Success -->
<div class="modal fade" id="edit{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog modal-notify modal-success" role="document">
    <!--Content-->
    <div class="modal-content">
        <!--Header-->
        <div class="modal-header">
            <p class="heading lead">Update Category</p>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="white-text">&times;</span>
            </button>
        </div>

        <!--Body-->
        <div class="modal-body">
          {!! Form::model($category, [ 'method' => 'patch','route' => ['category.update', $category->id] ]) !!}
              <div class="form-group">
              <div class="row">
                  <div class="col-md-4" style="margin-top:7px;">
                    {!! Form::label('Catrogry name') !!}
                  </div>
                  <div class="col-md-8">
                    {!! Form::text('cat_name', $category->cat_name, ['class' => 'form-control']) !!}
                  </div>
                </div>
              </div>

        </div>

        <!--Footer-->
        <div class="modal-footer justify-content-center">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
          {{Form::button('<i class="fa fa-check-square-o"></i> Update', ['class' => 'btn btn-success', 'type' => 'submit'])}}
          {!! Form::close() !!}
        </div>
    </div>
    <!--/.Content-->
</div>
</div>
<!-- Central Modal Medium Success-->

<div class="modal fade" id="delete{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog modal-notify modal-success" role="document">
    <!--Content-->
    <div class="modal-content">
        <!--Header-->
        <div class="modal-header">
            <p class="heading lead">Delete Category</p>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="white-text">&times;</span>
            </button>
        </div>

        <!--Body-->
        <div class="modal-body">
          {!! Form::model($category, [ 'method' => 'delete','route' => ['category.destroy', $category->id] ]) !!}
            <h4 class="text-center">Are you sure you want to delete Category?</h4>
            <h5 class="text-center">Category name: <strong style="color:red">{{$category->cat_name}}</strong></h5>

        </div>

        <!--Footer-->
        <div class="modal-footer justify-content-center">
          <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
          {{Form::button('<i class="fa fa-trash"></i> Delete', ['class' => 'btn btn-danger', 'type' => 'submit'])}}
          {!! Form::close() !!}
        </div>
    </div>
    <!--/.Content-->
</div>
</div>
