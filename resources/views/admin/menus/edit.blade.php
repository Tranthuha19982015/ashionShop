@extends('layouts.admin')

@section('title')
    <title>Trang chu</title>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content_header',['name' => 'menus', 'key' => 'Edit'])

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <form action="{{ route('menus.update',['id'=>$menuFollowId->id]) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Tên menu</label>
                            <input type="text" name="name"
                                   class="form-control" placeholder="Nhập tên menu"
                            value="{{$menuFollowId->name}}">
                        </div>
                        <div class="form-group">
                            <label>Chọn menu cha</label>
                            <select class="form-control" name="parent_id">
                                <option value="0">Chọn menu cha</option>
                                {!! $optionSelect !!}
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Sửa</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection



