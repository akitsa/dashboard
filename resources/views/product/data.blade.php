@extends('layouts.template')

@section('title',"product")


@section('content')
<div class="card col-12">
    <div class="card-header">
        <div class="card-tools">
            <a href="{{ url("product/form") }}" class="btn btn-primary btn-sm">Add New</a>
        </div>
    </div>
    <div class="card-body">
        <table id="dtMenu" class="dtTable table table-bordered table-hover">
            <thead>
                <tr>
                    <th>produk id</th>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th>Deskripsi</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
              @forelse ($data as $item)
                  <tr>
                    <td>{{$item->prod_id}}</td>
                    <td>{{$item->nm_prod}}</td>
                    <td>{{$item->nm_cat}}</td>
                    <td>{{$item->harga}}</td>
                    <td>{{$item->status}}</td>
                    <td>{{$item->desc}}</td>
                    <td>
                        <form action="/product/{{$item->id_prod}}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-success">update</button>
                            <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                    </td>
                  </tr>
              @empty
                  <tr class="text-center">
                    <td colspan="7" >Tidak ada data..</td>
                  </tr>
              @endforelse
            </tbody>
        </table>            
    </div>
</div> 
@endsection