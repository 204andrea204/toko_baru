@extends('layouts.admin')
@section('admin')

<div class="content">
  <div class="container-fluid">
    <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Tambah Data Pemasukan</h4>
                  <p class="card-category">Lengkapi Datanya</p>
                </div>
                <div class="card-body">
                  <form method="POST" action="{{url('admin/pengeluaran/save')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">


                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <?php
                              $saldo = \App\Saldo::where('id',1)->first();
                          ?>
                          <input type="hidden" name="saldo" value="{{$saldo->saldo}}">
                          <input placeholder="Judul" name="judul" type="text" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <input placeholder="Jumlah" name="jumlah" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <input placeholder="Tanggal" name="tanggal" type="date" class="form-control">
                        </div>
                      </div>

                      <div class="form-group col-md-25">
                        <label>Rincian</label>
                        <label for="ckeditor"></label>
                        <textarea name="rincian" id="ckeditor"></textarea>
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