@extends('layouts.admin')

@section('title')
    <title>Trang chu</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('admins/slider/add/add.css')}}">
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content_header',['name' => 'Slider', 'key' => 'Add'])

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <form action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Tên slider</label>
                            <input type="text" name="name"
                                   class="form-control @error('name') is-invalid @enderror"
                                   placeholder="Nhập tên"
                                   value="{{old('name')}}">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Mô tả slider</label>
                            <textarea name="description" rows="4"
                                      class="form-control @error('description') is-invalid @enderror"
                                      placeholder="Nhập mô tả"
                            >{{old('description')}}</textarea>
                            @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Hình ảnh</label>
                            <input type="file" name="image_path"
                                   class="form-control-file @error('image_path') is-invalid @enderror">
                            @error('image_path')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection



