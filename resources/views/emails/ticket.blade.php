@extends('emails/partial/body')
@section('content')
    <h3>Hai {{ $name }},</h3>
    <p>
        Terima kasih pembayaran anda telah dikonfirmasi oleh admin, silahkan tunjukan email ini kepada panitia saat acara berlangsung
    </p>
    <table class="mail-table">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{ $name }}</td>
        </tr>
        <tr>
            <td>Kode Pendaftaran</td>
            <td>:</td>
            <td>{{ $code }}</td>
        </tr>
    </table>

    <div style="text-align: center">
        <img src="{{ url('storage/' . $url) }}">
    </div>
@endsection