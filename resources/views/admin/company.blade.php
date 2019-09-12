@extends('layouts.app')

@section('title', 'Daftar Perusahaan Expo IT')

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
                            <th>Nama Perusahaan</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $('#table').DataTable({
            responsive: true,
            serverSide: true,
            ajax: '/admin/ajax/company',
            columns: [
                {name:'no', data:'no'},
                {name:'name', data:'name'},
                {name:'email', data:'email'},
                {name:'phone', data:'phone'},
                {name:'company', data:'company'},
            ]
        });
    </script>
@endsection