@extends('Frontend.Layouts.master')
@section('title','Category')
@section('content')
<div class="container">
         <ol class="breadcrumb">
            <li><a href="{{route('index')}}">Anasayfa</a></li>
            @foreach($category as $value)
            <li><a href="#">{{$value['category_name']}}</a></li>
            
            @endforeach
        </ol>
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Kategori Adı</div>
                    <div class="panel-body">
                        <h3>Alt Kategoriler</h3>
                        <div class="list-group categories">
                            @foreach($subCategory as $value)
                            <a href="" class="list-group-item"><i class="fa fa-television"></i> {{$value['category_name']}}</a>
                            @endforeach
                        </div>
                        <h3>Fiyat Aralığı</h3>
                        <form>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> 100-200
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> 200-300
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="products bg-content">
                    Sırala
                    <a href="#" class="btn btn-default">Çok Satanlar</a>
                    <a href="#" class="btn btn-default">Yeni Ürünler</a>
                    <hr>
                    <div class="row">
                        @foreach($category->product as $value)
                        <div class="col-md-3 product">
                            <a href="#"><img src="http://lorempixel.com/400/400/food/1"></a>
                            <p><a href="#">{{$value['product_name']}}</a></p>
                            <p class="price">129 ₺</p>
                            <p><a href="#" class="btn btn-theme">Sepete Ekle</a></p>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

@endsection