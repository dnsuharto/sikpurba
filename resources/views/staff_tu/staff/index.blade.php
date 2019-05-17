@extends('layout')

@section('body')

<section class="content-header">
      <h1>DATA STAFF</h1>
</section>
<section class="content">
  <div class="row">
    <div class="col-md-12">

        @if(Session::has('msg'))
        <div class="alert alert-success mt-3">
          {{ session('msg') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif

        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <a href="{{ action('StaffTu\StaffController@create') }}" class="btn btn-primary btn-sm active" style="float: left;" role="button" aria-pressed="true">Tambah Staff</a>
            </div>

            <div class="box-body">

                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">NIK</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col" width="100">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($staffs as $staff)
                        <tr>
                            <th>{{ $staff->nik }}</th>
                            <td>{{ $staff->nama }}</td>
                            <td>{{ $staff->email }}</td>
                            <td>{{ $staff->role }}</td>
                            <td>
                                <a href="{{ action('StaffTu\StaffController@edit', $staff->id) }}" class="btn btn-primary btn-xs active" role="button" aria-pressed="true">Edit</a>
                                <button onclick="hapus({{ $staff->id }})" class="btn btn-danger btn-xs active" role="button" aria-pressed="true">Hapus</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

            <div class="box-footer clearfix">
                {!! $staffs->links() !!}
            </div>

        </div>
    </div>
  </div>
</section>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">HAPUS DATA STAFF</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form style="text-align: left;" action="{{ action('StaffTu\StaffController@index') }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <div class="modal-body">
          Apakah Yakin akan dihapus ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
          <button type="submit" class="btn btn-danger">Ya</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
  function hapus(id) {
    $('#deleteModal').modal('show');
    var action = $('#deleteModal form').attr('action');
    $('#deleteModal form').attr('action', action+'/'+id);
  }
</script>
@endsection