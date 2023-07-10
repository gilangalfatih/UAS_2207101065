@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Tambah Data Mahasiswa</h3>
    <form action="{{ url('/mahasiswa') }}" method="post">
        @csrf
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="mhsw_nim" class="form-control"></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="mhsw_nama" class="form-control"></td>
            </tr>
            <tr>
                <td>JURUSAN</td>
                <td>
                    <select name="mhsw_jurusan" class="form-control">
                        <option value="">-- Pilih Jurusan --</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Sistem Komputer">Sistem Komputer</option>
                        <option value="Teknik Komputer">Informatika</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>LOKASI KKN</td>
                <td><input type="text" name="mhsw_alamat" class="form-control"></td>
            </tr>
            <tr>
                <td><input type="submit" value="SIMPAN" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
</div>
@endsection