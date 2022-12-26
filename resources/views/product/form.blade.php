@extends('layouts.template')

@section('title','Form Produk')
    
@section('content')
    <div class="row col-12">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="/product" method="POST" >
                        @csrf
                        <div class="form-group">
                            <label for="cat_nm">Produk id</label>
                            <input type="text" class="form-control @error('prod_id')is-invalid @enderror"name="prod_id"id="prod_id"placeholder="Produk Id" >
                            @error('prod_id')
                                <div id="prod_id" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="cat_nm">Nama Produk</label>
                            <input type="text" class="form-control @error('nm_prod')is-invalid @enderror"name="nm_prod"id="nm_prod"placeholder="Nama Produk" value="{{ @$rsCat->nm_prod }}">
                            @error('nm_prod')
                                <div id="cat_nm" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="cat_nm">Kategori</label>
                            <select name="id_cat" id="" class="form-control">
                                @foreach ($kategori as $item)
                                    <option value="">kategori</option>
                                    <option value="{{$item->id_cat}}">{{$item->nm_cat}}</option>
                                @endforeach
                            </select>
                            @error('id_cat')
                                <div id="cat_nm" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="cat_nm">Harga</label>
                            <input type="number" class="form-control @error('harga')is-invalid @enderror"name="harga"id="harga"placeholder="Harga" value="{{ @$rsCat->harga }}">
                            @error('harga')
                                <div id="harga" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                             <div class="form-group">
                            <label for="cat_nm">Status</label>
                            <select name="status" id="" class="form-control" value="{{ @$rsCat->status }}">
                                <option value="Available">Available</option>
                                <option value="Non Available">Non Available</option>
                            </select>
                            @error('status')
                                <div id="cat_nm" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="cat_nm">Deskripsi</label>
                            <textarea name="desc" class="form-control" id="" cols="30" rows="10"></textarea>
                            {{-- @error('harga')
                                <div id="harga" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror --}}
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="SAVE" >
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection