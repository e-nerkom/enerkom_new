@extends('admin/layout/template') 

@section('content')
	<!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Isi konten-konten pada web</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            @if (session('status'))
              <div class="alert alert-success">
                {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Nama Konten</th>
                <th>Isi Konten</th>
                <th>Deskripsi</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              @foreach($content as $d)
              <tr>
                <td>{{$d->content}}</td>
                <td>{{$d->value}}</td>
                <td>{{$d->description}}</td>
                <td>
                    <div class="box-button">
                      <a href="/admin/content/{{$d->id}}" class="btn btn-primary">Edit</a>
                    </div>
                </td>
              </tr>
              @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>Nama Konten</th>
                <th>Isi Konten</th>
                <th>Deskripsi</th>
                <th>Action</th>
              </tr>
              </tfoot>
            </table>
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