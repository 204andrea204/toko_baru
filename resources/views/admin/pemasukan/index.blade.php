@extends('layouts.admin')
@section('admin')

<div class="content">
	<div class="container-fluid">
		<div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> Table on Plain Background</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                  <a href="{{url('admin/pemasukan/add')}}" class="btn btn-outline-warning btn-sm" style="float: right;">Tambah</a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Jumlah Pemasukan</th>
                        <th>Tanggal</th>
                        <th>Rincian</th>
                        <th colspan="2">Action</th>
                      </tr></thead>
                      <tbody>
                        <?php
                          $i = 1;
                            $pemasukan = \App\Keuangan::all()->where('tipe',1);  
                        ?>
                        @foreach ($pemasukan as $q)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$q->judul}}</td>
                          <td>{{$q->jumlah}}</td>
                          <td>{{$q->tanggal}}</td>
                          <td>{!!$q->rincian!!}</td>

                          
                          	<td>
                				<a href="{{url('admin/pemasukan/edit/'.$q->id)}}" class="btn btn-outline-warning btn-sm">Edit</a>
                 				<a href="{{url('admin/pemasukan/delete/'.$q->id)}}" onclick="return confirm('anda yakin untuk menghapusnya ?')" class="btn btn-outline-danger btn-sm">Delete</a>
              				</td>
                        </tr>

                        @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

	</div>
</div>

@endsection