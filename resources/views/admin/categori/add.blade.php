@extends('layouts.admin')
@section('admin')

<div class="content">
	<div class="container-fluid">
		<div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Tambah Data Category</h4>
                  <p class="card-category">Lengkapi Datanya</p>
                </div>
                <div class="card-body">
                  <form method="POST" action="{{url('admin/categori/save')}}" enctype="multipart/form-data">
                  	@csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <input placeholder="Nama Category" name="nama" type="text" class="form-control">
                        </div>
                      </div>

                    <button type="submit" class="btn btn-primary pull-right">Tambah Data</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
	</div>
</div>

@endsection