@extends('components.layout_admin')

{{-- 
  Section tambahan:
  head : untuk penambahan kode didalam head
  script : untuk penambahan kode didalam script bagian paling bawah halaman
  sidebar : untuk mengatur menu pada sidebar
   --}}

@section('title', 'Jadwal Keberangkatan')
@section('sidebar_title', 'Jadwal Keberangkatan')
@section('user_image', 'images/img.jpg')
@section('username', 'Mandan')
@section('content_title', 'Jadwal Keberangkatan')

@section('content')
  <a href="{{ site_url('admin/jadwalkeberangkatan/tambah') }}" class="btn btn-primary">Tambah Data</a>
  <table class="table table-bordered table-stripped">
    <tr>
      <th>No</th>
      <th>ID Keberangkatan</th>
      <th>Tanggal Berangkat</th>
      <th>Maskapai</th>
      <th>Nama Program</th>
      <th>Status</th>
      <th>Keterangan</th>
      <th>Aksi</th>
    </tr>
    @foreach($data_list as $nomor => $data)
      <tr>
        <td>{{ ($nomor+1) }}</td>
        <td>{{ $data['id_jadwal'] }}</td>
        <td>{{ $data['tgl_berangkat'] }}</td>
        <td>{{ $data['nama_maskapai'] }}</td>
        <td>{{ $data['nama_program'] }} {{ $data['nm_jenis'] }}</td>
        <td>{{ $data['status'] }}</td>
        <td>{{ $data['keterangan'] }}</td>
        <td>
          <a href="<?=site_url("admin/jadwalkeberangkatan/peserta?id_jadwal=".$data['id_jadwal'])?>" class="btn btn-primary">Daftar Peserta</a>
          <a href="<?=site_url("admin/jadwalkeberangkatan/edit?id_jadwal=".$data['id_jadwal'])?>" class="btn btn-success">Edit</a>
          <a href="<?=site_url("admin/jadwalkeberangkatan/hapus?id_jadwal=".$data['id_jadwal'])?>" class="btn btn-danger">Hapus</a>
        </td>
      </tr>
    @endforeach
  </table>
@endsection
