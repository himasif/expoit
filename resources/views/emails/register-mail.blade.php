@extends('emails/partial/body')
@section('content')
    <h3>Hai {{ $name }},</h3>
    <p>
        Anda baru saja mendaftar dalam event Expo IT 2019 yang diselengggarakan oleh Himasif UNEJ, silahkan melakukan pembayaran dengan detail
    </p>
    <table class="mail-table">
        <tr>
            <td>Kode Pembayaran</td>
            <td>:</td>
            <td>{{ $code }}</td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td>:</td>
            <td>Rp {{ number_format($jumlah, 0, '.', ',') }}</td>
        </tr>
        <tr>
            <td>Bank</td>
            <td>:</td>
            <td>{{ $bank }}</td>
        </tr>
        <tr>
            <td>No Rekening</td>
            <td>:</td>
            <td>{{ $no_rek }}</td>
        </tr>
        <tr>
            <td>Atas Nama</td>
            <td>:</td>
            <td>{{ $atas_nama }}</td>
        </tr>
    </table>
    <p>
        <b>Note : Kode Pembayaran digunakan untuk mengupload bukti transfer ke <a href="{{ url('/') }}">disini</a></b>
    </p>
    <p>Terima kasih telah mendaftar Expo IT 2019</p>
@endsection