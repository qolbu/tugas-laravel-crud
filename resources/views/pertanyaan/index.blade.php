@extends('master')

@section('content')
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Pertanyaan</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Pertanyaan</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
<!-- Default box -->
<div class="card">
      <div class="card-header">
        <h3 class="card-title">Daftar Pertanyaan</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Judul</th>
          </tr>
          </thead>
          <tbody>
          @foreach($rows as $row)
          <tr>
            <td><a href="/pertanyaan/{{$row->id}}">{{$row->judul}}</a></td>
          </tr>
          
          @endforeach
          </tbody>
          <tfoot>
          <tr>
            <th>Judul</th>
          </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.card-body -->
    </div>

</section>
<!-- /.content -->

@push('scripts')
<script src="{{ asset('plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endpush
@endsection