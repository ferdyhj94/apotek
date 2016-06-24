@extends('layouts.app')
@section('content')
  <h1>Daftar Obat</h1>
<ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li class="active">Daftar Stok Obat</li>
</ol>
<a href="{{url('tambah-stok')}}"><button class="btn btn-primary">Tambah Data Obat</button></a>
<button class="btn btn-primary">Import Data Obat</button>
<br><br>
     <div class="panel panel-default" style="padding:10px">
      <div class="panel-body">

            <!-- filter list -->
            <div class="panel panel-default">
              <div class="panel-heading">
                Menampilkan data anggota berdasarkan :
              </div>
              <div class="panel-body">
                <form role="form"  id="formFilter" class="form-horizontal">
                  <div class="form-group">
                    <label for="status" class="col-sm-2 control-label">Status </label>
                    <div class="col-sm-10">
                   
                      <select>
                        <option ></option>
                      </select>
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="tpOption" class="col-sm-2 control-label">Pertandingan yang pernah diikuti </label>
                    <div class="col-sm-10">
                    
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="gelarOption" class="col-sm-2 control-label">Gelar </label>
                    <div class="col-sm-10">
                    
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="fakultasOption" class="col-sm-2 control-label">Fakultas </label>
                    <div class="col-sm-10">
                    
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="tahunOption" class="col-sm-2 control-label">Tahun bergabung dengan UKM </label>
                    <div class="col-sm-10">
                    
                  </div>
                  </div>

                   <div class="form-group"> 
                     <div class="col-lg-offset-10 col-md-offset-8 col-sm-offset-7 col-xs-offset-6 col-lg-2 col-md-4 col-sm-5 col-xs-6">
                        <div class="btn-group-justified" role="group">
                          <div class="btn-group" role="group">
                            
                          </div>
                          
                        </div>
                      </div>
                  </div>
                </form>
              </div>
            </div>
               <!--isi file ini -->
            <div id="contentArtikel">

            </div>
      </div>
    </div>
    <div class="table-responsive">
                   <table class="table table-bordered">
                    <tr>
                      <th>No.</th>
                      <th>Kategori</th>
                      <th>Kode Obat</th>
                      <th>Nama Obat</th>
                      <th>Produsen</th>
                      <th>Distributor</th>
                      <th>Satuan</th>
                      <th>Harga Beli</th>
                      <th>Harga</th>
                      <th>Stok</th>
                      <th>Tgl Masuk</th>
                      <th>Aksi</th>
                  </tr>
                  <?php $no=1;?>
                  @foreach($obat as $data)
              <tr>
              	<td>{{$no++}} </td>
              	<td>{{$data->kategori}} </td>
                <td>{{$data->kode_obat}} </td>
                <td>{{$data->nama_obat}} </td>
                <td>{{$data->produsen}}</td>
                <td>{{$data->distributor}}</td>
                <td>{{$data->satuan}}</td>
                <td>{{$data->harga_beli}}</td>
                <td>{{$data->harga}}</td>
                <td>{{$data->stok}}</td>
                <td>{{$data->tgl_masuk}}</td>
                <td><a href="{{url('edit-obat')}}"><button class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-pencil"></i></button></a>
                  <a href="{{url('del-obat')}}"><button class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></button></a></td>
              </tr>
                @endforeach
                </table>
               
                </div>
                   {{$obat->render()}}
  @endsection

  <script type="text/javascript">
   $(document).ready(function () {  
      loadContent('{{("daftar-obat")}}');   
   });

    function loadContent(urlpath){
      var formData = $("#formFilter").serialize();
      $.ajax( {  
        type :'post',  
        url :urlpath,  
        cache :false,   
        data : formData,
        success : function(data) {
          $('#contentArtikel').html(data);  
        },  
        error : function(data) {  
           $('#alertglobal alert-success').addClass('alert-danger').removeClass('alert-success');
          $('#alertglobal #alert strong').html("Data gagal ditampilkan. error : "+data);
          $('#alertglobal #alert').show();
          
        }  
      });
          return false;         
    }
  </script>