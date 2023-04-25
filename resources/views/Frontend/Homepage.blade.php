@extends('Frontend.Layouts.master')
@section('title','Homepage')
@section('content')

<div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Kategoriler</div>
                    <div class="list-group categories">
                        @foreach($category as $value)
                        
                        <a href="{{route('category',$value['id'])}}" class="list-group-item"><i class="fa fa-television"></i>{{$value['category_name']}}</a>
                        @endforeach
                        
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="https://picsum.photos/seed/picsum/640/400" alt="...">
                            <div class="carousel-caption">
                                Slide 1
                            </div>
                        </div>
                        <div class="item">
                            <img src="https://picsum.photos/seed/picsum/640/400" alt="...">
                            <div class="carousel-caption">
                                Slide 2
                            </div>
                        </div>
                        <div class="item">
                            <img src="https://picsum.photos/640/400" alt="...">
                            <div class="carousel-caption">
                                Slide 3
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default" id="sidebar-product">
                    <div class="panel-heading">Günün Fırsatı</div>
                    <div class="panel-body">
                        <a href="#">
                            <img src="https://picsum.photos/id/237/200/300" class="img-responsive">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
@endsection