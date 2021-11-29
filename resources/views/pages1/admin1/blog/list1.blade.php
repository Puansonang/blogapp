@extends('layouts.app')
{{-- layouts/app.blade.php --}}

@section('content')
<div class="container">
    @if (session("info"))
        <div class="alert alert-success">
            {{ session("info") }}
        </div>
    @endif
    <h1>List Blog</h1>
    <hr>
    <div class="d-flex flex-row-reverse mb-2">
        <a href="{{ route("blog.create") }}" class="btn btn-success">Tambah</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th width="10%">No.</th>
                <th>Nama</th>
                <th>Isi</th>
                <th colspan=2 width="10%">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($blog as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td class="text-capitalize">{{ $item->nama }}</td>
                <td class="text-capitalize">{{ $item->isi }}</td>
                <td>
                    <a href="{{ route("blog.edit",$item) }}" class="btn btn-warning btn-block">Rubah</a>
                </td>
                <td>
                    <a href="#"
                        onclick="event.preventDefault();
                        document.getElementById('form-hapus-{{ $item->id }}').submit();"
                        class="btn btn-danger btn-block">Hapus</a>
                    <form action="{{ route("kategori.destroy",$item) }}"
                        method="post" id="form-hapus-{{ $item->id }}">
                        @method("DELETE")
                        @csrf
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
