@extends('layouts.admin')
@section('admin')

<div class="content">
	<div class="container-fluid">
		<div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> Table on Plain Background</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                  <a href="{{url('admin\pesan\add')}}" class="btn btn-outline-warning btn-sm" style="float: right;">Tambah</a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <tr><th>
                          ID
                        </th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Subjek</th>
                        <th>Isi</th>
                        <th colspan="2">Action</th>
                      </tr></thead>
                      <tbody>
                        <?php
                          $i = 1;
                            $pesan = \App\Pesan::all();  
                        ?>
                        @foreach ($pesan as $n)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$n->nama}}</td>
                          <td>{{$n->email}}</td>
                          <td>{{$n->subjek}}</td>
                          <td>{!!$n->isi!!}</td>

                          
                          	<td>
                				<a href="{{url('admin/pesan/edit/'.$n->id)}}" class="btn btn-outline-warning btn-sm">Edit</a>
                 				<a href="{{url('admin/pesan/delete/'.$n->id)}}" onclick="return confirm('anda yakin untuk menghapusnya ?')" class="btn btn-outline-danger btn-sm">Delete</a>
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