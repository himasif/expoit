@extends('layouts.app')

@section('css')

@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="tile">
                <h3 class="tile-title">Total Peserta Expo</h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <canvas class="embed-responsive-item" id="peserta-chart"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        var pdata = [
            {
                value: {{ $participant }},
                color: "#46BFBD",
                highlight: "#5AD3D1",
                label: 'Peserta'
            },
            {
                value: {{ $company }},
                color: "#F7464A",
                highlight: "#F7464A",
                label: 'Perusahaan'
            },

        ]
        var ctxp = $("#peserta-chart").get(0).getContext("2d");
        var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
@endsection