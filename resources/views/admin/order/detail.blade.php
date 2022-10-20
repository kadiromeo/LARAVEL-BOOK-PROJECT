@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" data-background-color="purple">
                        <h4 class="title">Sipariş Detay</h4>
                    </div>
                    <div class="card-content">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating is-empty">
                                    <label >Alıcı</label>
                                    <p class="mt-3">
                                    {{\App\User::getField($data[0]['userid'],'name')}}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating is-empty">
                                    <label>Adres</label>
                                   <p class="mt-3">
                                    {{$data[0]['adres']}}
                                   </p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating is-empty">
                                    <label ">Telefon</label>
                                    <p class="mt-3">
                                        {{$data[0]['telefon']}}
                                       </p>
                                 </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating is-empty">
                                    <label>Mesaj</label>
                                    <p class="mt-3">
                                        {{$data[0]['mesaj']}}
                                       </p>
                                 </div>
                            </div>
                        </div>
                        @foreach (json_decode($data[0]['json'],true) as $key => $value )
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating is-empty">
                                    <p class="mt-3">
                                        <label>Kitap Adı</label>
                                        {{$value['name']}}
                                    </p>

                                    <p class="mt-3">
                                        <label>Kitap Fiyat</label>

                                        {{$value['fiyat']}} (₺)
                                    </p>
                                 </div>
                            </div>
                        </div>
                        @endforeach


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
