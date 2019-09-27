@extends('layouts.admin')
@section('admin')

<div class="content">
	<div class="container-fluid">
		<div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> Table on Plain Background</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                  <a href="{{ route('barangAdd') }}" class="btn btn-outline-warning btn-sm" style="float: right;">Tambah</a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <tr><th>
                          ID
                        </th>
                        <th>
                          Nama
                        </th>
                        <th>
                          harga
                        </th>
                        <th>
                          Stok
                        </th>
                        <th>
                          Berat
                        </th>
                        <th>
                          Kategori
                        </th>
                        <th>
                          Foto
                        </th>
                        <th colspan="2">Action</th>
                      </tr></thead>
                      <tbody>
                        <?php
                          $i = 1;
                            $barang = \App\Barang::all();  
                        ?>
                        @foreach ($barang as $n)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$n->nama}}</td>
                          <td>Rp. {{$n->harga}}</td>
                          <td>{{$n->stok}}</td>
                          <td>{{$n->berat}}</td>
                          <td>{{$n->kategori->nama}}</td>
                          <td><img src="{{ url('picture/'.$n->foto) }}" style="width: 70px; height: 70px"></td>

                          
                          	<td>
                				<a href="{{url('admin/barang/edit/'.$n->id)}}" class="btn btn-outline-warning btn-sm">Edit</a>
                 				<a href="{{url('admin/barang/delete/'.$n->id)}}" onclick="return confirm('anda yakin untuk menghapusnya ?')" class="btn btn-outline-danger btn-sm">Delete</a>
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