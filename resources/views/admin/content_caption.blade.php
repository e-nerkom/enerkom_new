@extends('admin/layout/template') 

@section('content')
	<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Content Caption</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              @yield('content')
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection