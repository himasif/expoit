@extends('layouts.app')

@section('title', 'Daftar Peserta Expo IT')

@section('css')

@endsection

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
            <p>Daftar Mahasiswa yang mengisi form</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="table">
                        <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No HP</th>
                            <th>Bukti</th>
                            <th>Status</th>
			    <th>Tanggal</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <form action="{{ url('/admin/delete-participant') }}" method="post" id="delete-participant-form">
        @csrf
        <input type="hidden" id="delete-participant-id" name="participant_id">
    </form>

    <form action="{{ url('/admin/accept-payment') }}" method="post" id="form-accept">
        @csrf
        <input type="hidden" name="participant_id" id="participant-id">
    </form>
@endsection

@section('js')
    <script>
        $('#table').DataTable({
            responsive: true,
            serverSide: true,
            ajax: '/admin/ajax/participant',
            columns: [
                {name:'no', data:'no'},
                {name:'name', data:'name'},
                {name:'email', data:'email'},
                {name:'phone', data:'phone'},
                {name:'bukti', data:'bukti'},
                {name:'status', data:'status'},
		{name: 'tanggal', data: 'tanggal'},
                {name:'action', data:'action'},
            ]
        });

        function acceptPayment(id) {
            $('#participant-id').val(id);
            $('#form-accept').submit();
        }

	function deleteParticipant(id) {
            $('#delete-participant-id').val(id);
            $('#delete-participant-form').submit();
        }
    </script>
@endsection
