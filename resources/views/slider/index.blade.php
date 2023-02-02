@extends('layouts.app')

@section('title')
Data Slider
@endsection

@section('content')
    
<div class="container">
    <a href="/sliders/create" class="btn btn-primary mb-3">Tambah Data</a>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($sliders as $slider)
                     <td> {{ $i++ }}</td>
                     <td> {{$slider -> title }}</td>
                     <td> {{$slider -> description}}</td>
                     <td>
                        <img src="/image/{{$slider->image}}" alt="" class="img-fluid" width="90">
                     </td>
                     <td>
                        <a href="/slider/edit{{$slider->id}}" class="btn btn-warning">Edit</a>
                     </td>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection