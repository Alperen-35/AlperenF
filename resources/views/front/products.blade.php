@extends('front.layouts.master')
@section('content')
   <!-- ***** Main Banner Area Start ***** -->
   <div class="page-heading" id="top">
</div>
<!-- ***** Main Banner Area End ***** -->


<!-- ***** Products Area Starts ***** -->
<section class="section" id="products">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="mb-5">{{$kind}}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
                @foreach ($uruns as $urun )
                <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{$urun->photo}}" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                                <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                                <a class="btn btn-outline-dark btn-square" href="{{route('detail',$urun->id)}}"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4>{{$urun->name}}</h4>
                                <div class="align-items-center justify-content-center mb-1">
                                    @if ($urun->point==0)
                                        <big class="fa fa-star text-primary mr-1"></big>
                                        <big class="fa fa-star text-primary mr-1"></big>
                                        <big class="fa fa-star text-primary mr-1"></big>
                                        <big class="fa fa-star text-primary mr-1"></big>
                                        <big class="fa fa-star text-primary mr-1"></big>
                                    @elseif ($urun->point>=0 && $urun->point!=5)
                                        @for ($i=1;$i<=$urun->point;$i++)
                                            <big class="fa fa-star text-primary mr-1"></big>
                                        @endfor

                                        @for ($i=1;$i<=(5-($urun->point));$i++)
                                            <big class="fa fa-star text-black-50 mr-1"></big>
                                        @endfor
                                    @else
                                        <big class="fa fa-star text-primary mr-1"></big>
                                        <big class="fa fa-star text-primary mr-1"></big>
                                        <big class="fa fa-star text-primary mr-1"></big>
                                        <big class="fa fa-star text-primary mr-1"></big>
                                        <big class="fa fa-star text-primary mr-1"></big>
                                    @endif
                                </div>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>₺{{$urun->price}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="col-12">
                    <nav>
                      <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</span></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                      </ul>
                    </nav>
                </div>

        </div>
    </div>
</section>
<!-- ***** Products Area Ends ***** -->
@endsection
@section('js')
@include('front.addCart')
@endsection
