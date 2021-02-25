@extends('admin/layout/template') 

@section('content')
    <!-- Main content -->
    <section class="content container-fluid">
        <div class="box box-success">
            <div class="box-body">
                <form role="form" method="post" action="/admin/content/{{$data->id}}" enctype="multipart/form-data">
                {{csrf_field()}}
                    <!-- text input -->
                    <div class="form-group">
                        <label>Content:</label>
                        <input type="text" value="{{ $data->content }}" class="form-control" name="content" disabled>
                    </div>

                    <div class="form-group">
                        <label>Value:</label>
                        <input type="text" value="{{ $data->value }}" class="form-control" name="value" placeholder="Enter Value Here..">
                    </div>

                    <div class="form-group">
                        <label>Description:</label>
                        <input type="text" value="{{ $data->description }}" class="form-control" name="description" disabled>
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection