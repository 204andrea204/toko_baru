@extends('layouts.admin')
@section('admin')

<div class="content">
	<div class="container-fluid">
		<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Barang</h4>
                  <p class="card-category">Lengkapi Datanya</p>
                </div>
                <div class="card-body">
                  <form action="{{url('admin/categori/update')}}" method="POST" enctype="multipart/form-data">
                  	@csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <input type="hidden" name="id" value="{{$categori->id}}">
                          <input placeholder="Nama Kategori" type="text" class="form-control" name="nama" value="{{$categori->nama}}">
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
            <button type="submit" class="btn btn-primary pull-right">Update data</button>
                  </form>
	</div>
</div>
@endsection