@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @if(session("status"))
                    <div class="alert alert-primary" role="alert">
                        {{session("status")}}
                    </div>
                    @endif
                <div class="card">
                    <div class="card-header" data-background-color="purple">
                        <h4 class="title">Yazar Düzenle</h4>
                        <p class="category">Yazar Düzenleyiniz</p>
                    </div>
                    <div class="card-content">
                        <form enctype="multipart/form-data" action="{{route('admin.yazar.edit.post',['id'=>$data['0']['id']])}}" method="POST">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating is-empty">
                                        <input value="{{$data[0]['name']}}" type="text" name="name" class="form-control">
                                        <span class="material-input"></span></div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group label-floating is-empty">
                                        @if ($data[0]['image']!="")
                                        <img src="{{asset($data[0]['image'])}}" style="width: 150px;">
                                        @endif
                                        <input type="file" name="image" class="form-control p-3" style="opacity: 1; position:inherit" >
                                        <span class="material-input"></span></div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group label-floating is-empty">
                                        <textarea name="bio" class="form-control">
                                        {{$data[0]['bio']}}
                                        </textarea>
                                        <span class="material-input"></span></div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Yazar Düzenle</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
