@extends('layouts.admin')
@section('admin')

<div class="content">
	<div class="container-fluid">
		<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit pesan</h4>
                  <p class="card-category">Lengkapi Datanya</p>
                </div>
                <div class="card-body">
                  <form action="{{url('admin/pesan/update')}}" method="POST" enctype="multipart/form-data">
                  	@csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <input type="hidden" name="id" value="{{$pesan->id}}">
                          <input placeholder="Nama" type="text" class="form-control" name="nama" value="{{$pesan->nama}}">
                        </div>
                        <div class="form-group bmd-form-group">
                          <input type="hidden" name="id" value="{{$pesan->id}}">
                          <input placeholder="Email" type="email" class="form-control" name="email" value="{{$pesan->email}}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <input type="hidden" name="id" value="{{$pesan->id}}">
                          <input placeholder="Subjek" type="text" class="form-control" name="subjek" value="{{$pesan->subjek}}">
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-md-25">
                      <label>Isi</label>
                      <label for="ckeditor"></label>
                      <textarea name="isi" id="ckeditor">{{$pesan->isi}}</textarea>
                  </div>
            <button type="submit" class="btn btn-primary pull-right">Update data</button>
                </div>
              </div>
            </div>
          </div>
                  </form>
	</div>
</div>
@endsection