@extends('layouts.app')
@section('content')

<h1>Daftar Obat</h1>
<ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a class"active">Daftar Obat</a></li>
</ol>
    <div class="table-responsive">
                   <table class="table table-bordered">
                    <tr>
                      <th>No.</th>
                      <th>NIK</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Wali Kelas</th>
                      <th>Status</th>
                      <th>No Telp</th>
                      <th>Aksi</th>
                    </tr>
                    <?php $no=1;
                  ?>
                </table>
                </div>
  @endsection