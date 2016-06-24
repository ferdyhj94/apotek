@extends('layouts.app')
@section('content')
  <h1>Daftar Obat</h1>
<ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li class="active">Daftar User</li>
</ol>
<a href="{{url('tbh-user')}}"><button class="btn btn-primary"><i class="glyphicon glyphicon-plus"> Tambah User</i></button></a>
<br><br>
    <div class="table-responsive">
                   <table class="table table-bordered">
                    <tr>
                      <th>No.</th>
                      <th>Username</th>
                      <th>E-mail</th>
                      <th>Terakhir Masuk</th>
                      <th>Aksi</th>

                  </tr>
                  <?php $no=1;?>
                  @foreach($users as $data)
              <tr>
              	<td>{{$no++}} </td>
              	<td>{{$data->username}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->username}}</td>
                <td><a href="{{url('edit-obat')}}"><button class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-pencil"></i></button></a>
                  <a href="{{url('del-obat')}}"><button class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></button></a></td>
              </tr>
                @endforeach
                </table>
               
                </div>
                   {{ $users->render() }}
  @endsection