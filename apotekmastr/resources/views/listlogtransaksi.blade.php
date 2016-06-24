@extends('layouts.app')
@section('content')
  <h1>Daftar Obat</h1>
<ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li class="active">Daftar Transaksi Obat</li>
</ol>
<button class="btn btn-primary">Tambah Data Obat</button>
<button class="btn btn-primary">Ekspor Data Obat</button>
<br><br>
    <div class="table-responsive">
                   <table class="table table-bordered">
                    <tr>
                      <th>No.</th>
                      <th>Nama Obat</th>
                      <th>Kategori</th>
                      <th>Username</th>
                      <th>Tgl Transaksi</th>
                      <th>Jumlah Beli</th>
                      <th>Aksi</th>
                  </tr>
                  <?php $no=1;?>
                  @foreach($transaksi as $data)
              <tr>
              	<td>{{$no++}} </td>
              	<td>{{$data->nama_obat}}</td>
                <td>{{$data->nama_user}}</td>
                <td>{{$data->nama_kategori}}</td>
                <td>{{$data->username}}</td>
                <td>{{$data->created_at}}</td>
                <td>{{$data->jumlah}}</td>
                <td><a href="{{url('edit-obat')}}"><button class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-pencil"></i></button></a>
                  <a href="{{url('del-obat')}}"><button class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></button></a></td>
              </tr>
                @endforeach
                </table>
               
                </div>
                   {{ $transaksi->render() }}
  @endsection