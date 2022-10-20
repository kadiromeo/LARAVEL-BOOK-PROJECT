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
                        <h4 class="title">Kitap Düzenle</h4>
                        <p class="category">Kitap Düzenleyiniz</p>
                    </div>
                    <div class="card-content">
                        <form enctype="multipart/form-data" action="{{route('admin.kitap.edit.post',['id'=>$data[0]['id']])}}" method="POST">
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
                                        <img style="width:150px;" src="{{asset($data[0]['image'])}}" alt="kitap-resim">
                                        @endif
                                        <input type="file" style="opacity: 1; position:inherit;" name="image" class="p-3 form-control">
                                        <span class="material-input"></span></div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            <input value="{{$data[0]['fiyat']}} (₺)"  type="text" name="fiyat" class="form-control">
                                            <span class="material-input"></span></div>
                                    </div>

                                <div class="col-md-12">
                                    <div class="form-group label-floating is-empty">
                                        <select type="text" name="yazarid" id="" class="form-control">
                                            @foreach ($yazar as $key => $value )
                                             <option @if($value['id']==$data[0]['yazarid']) selected @endif value="{{$value['id']}}">{{$value['name']}}</option>
                                            @endforeach
                                        </select>
                                        <span class="material-input"></span></div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group label-floating is-empty">
                                        <select type="text" name="yayineviid" id="" class="form-control">
                                            @foreach ($yayinevi as $key => $value )
                                             <option @if($value['id']==$data[0]['yayineviid']) selected @endif value="{{$value['id']}}">{{$value['name']}}</option>
                                            @endforeach
                                        </select>
                                        <span class="material-input"></span></div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group label-floating is-empty">
                                        <textarea  name="aciklama" class="form-control">
                                           {{$data[0]['aciklama']}}"
                                        </textarea>
                                        <span class="material-input"></span></div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Kitap Düzenle</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
