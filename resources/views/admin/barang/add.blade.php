@extends('layouts.admin')
@section('admin')

<div class="content">
	<div class="container-fluid">
		<div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Tambah Data Barang</h4>
                  <p class="card-category">Lengkapi Datanya</p>
                </div>
                <div class="card-body">
                  <form method="POST" action="{{url('admin/barang/save')}}" enctype="multipart/form-data">
                  	@csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <input placeholder="Nama Barang" name="nama" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <input placeholder="Harga Barang" name="harga" type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <input placeholder="Stok Barang" name="stok" type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <input placeholder="Berat Barang" name="berat" type="text" class="form-control">
                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <?php 
                            $categori = \App\Categori::all();
                          ?>
                          <select class="form-control" name="kategori">
                            <option selected>Pilih Category........</option>
                            @foreach($categori as $q)
                            <option value="{{$q->nama}}">{{$q->nama}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Deskripsi</label>
                          <div class="form-group bmd-form-group">
                            <textarea name="deskripsi" class="form-control" rows="5"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>

                    <input class="form-control" type="file" name="foto" onchange="readURL1(this);">
                <center>
                    <div class="form-group col-md-12">
                        <img src="/admintemplate/assets/img/angular.png" alt="Nature" class="responsive" id="blah1" style="width: 300px;height: 300px; margin-left: 90px;">
                    </div>
                </center>

                    <button type="submit" class="btn btn-primary pull-right">Tambah Data</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
	</div>
</div>


            <script type="text/javascript">
                         function readURL1(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#blah1')
                            .attr('src', e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                    }
                }
            </script>

@endsection