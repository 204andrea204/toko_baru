@extends('layouts.admin')
@section('admin')

<div class="content">
	<div class="container-fluid">
		<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit pemasukan</h4>
                  <p class="card-category">Lengkapi Datanya</p>
                </div>
                <div class="card-body">
                  <form action="{{url('admin/pemasukan/update')}}" method="POST" enctype="multipart/form-data">
                  	@csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Judul</label>
                          <input type="text" class="form-control" name="judul" value="{{$l->judul}}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Jumlah</label>
                          <input type="text" class="form-control" name="jumlah" value="{{$l->jumlah}}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Tanggal</label>
                          <input type="date" class="form-control" name="tanggal" value="{{$l->tanggal}}">
                        </div>
                      </div>
                    </div>


                    <div class="form-group col-md-25">
                      <label>Rincian</label>
                      <label for="ckeditor"></label>
                      <textarea name="rincian" id="ckeditor">{{$l->rincian}}</textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <input type="hidden" name="id" value="{{$l->id}}">
            <button type="submit" class="btn btn-primary pull-right">Update data</button>
                  </form>
	</div>
</div>
@endsection