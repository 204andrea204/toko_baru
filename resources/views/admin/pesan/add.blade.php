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
                  <form method="POST" action="{{url('admin/pesan/save')}}" enctype="multipart/form-data">
                  	@csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <input placeholder="Nama" name="nama" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <input placeholder="Email" name="email" type="email" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <input placeholder="Subjek" name="subjek" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="form-group col-md-25">
                        <label>Isi</label>
                        <label for="ckeditor"></label>
                        <textarea name="isi" id="ckeditor"></textarea>
                      </div>


                    <div class="clearfix"></div>
                </div>
                    <button type="submit" class="btn btn-primary pull-right">Tambah Data</button>
              </form>
                </div>
              </div>
            </div>
          </div>
        </div>
              </div>
            </div>
	</div>
</div>

@endsection