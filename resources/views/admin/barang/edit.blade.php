@extends('layouts.admin')
@section('admin')

<div class="content">
	<div class="container-fluid">
		<div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Barang</h4>
                  <p class="card-category">Lengkapi Datanya</p>
                </div>
                <div class="card-body">
                  <form action="{{url('admin/barang/update')}}" method="POST" enctype="multipart/form-data">
                  	@csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <input type="hidden" name="id" value="{{$barang->id}}">
                          <input placeholder="Nama Barang" type="text" class="form-control" name="nama" value="{{$barang->nama}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <input placeholder="Harga Barang" type="text" class="form-control" name="harga" value="{{$barang->harga}}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <input placeholder="Stok Barang" type="text" class="form-control" name="stok" value="{{$barang->stok}}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <input placeholder="Berat Barang" type="text" class="form-control" name="berat" value="{{$barang->berat}}">
                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <select class="form-control" name="kategori_id">
                            <option selected>Pilih Category........</option>
                            @foreach($categories as $q)
                              @if($q->id == $barang->kategori_id)
                              <option value="{{$q->id}}" selected>{{$q->nama}}</option>
                              @else
                              <option value="{{$q->id}}">{{$q->nama}}</option>
                              @endif
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
                            <textarea class="form-control" rows="5" name="deskripsi"> {!!$barang->deskripsi!!}</textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="{{url('picture/'. $barang->foto)}}" id="blah1">
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                  <h4 class="card-title">Alec Thompson</h4>
                    <input class="btn btn-primary btn-round" name="foto" type="file" class="" style="" onchange="readURL1(this);" >
                </div>
              </div>
            </div>
          </div>
            <button type="submit" class="btn btn-primary pull-right">Update data</button>
                  </form>
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