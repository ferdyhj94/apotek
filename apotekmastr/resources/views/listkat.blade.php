@extends('layouts.app')
@section('content')
  <h1>Daftar Obat</h1>
<ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li class="active">Daftar Kategori Obat</li>
</ol>
<button class="btn btn-primary">Tambah Data Obat</button>
<button class="btn btn-primary">Import Data Obat</button>
<br><br>
{{ Form::select('category', $categories) }}
    <div class="table-responsive">
                   <table class="table table-bordered">
                    <tr>
                      <th>No.</th>
                      <th>Ketegori</th>
                      <th>Aksi</th>
                  </tr>
                  <?php $no=1;?>
                  @foreach($kategori as $data)
              <tr>
              	<td>{{$no++}} </td>
              	<td>{{$data->kategori}}</td>
                <td><a href=""></a></td>
              </tr>
                @endforeach
                </table>
               
                </div>
                   {{ $kategori->render() }}
  @endsection