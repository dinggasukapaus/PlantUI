@extends('layouts.main')

@section('content')
<!-- Banner Image  -->
<div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
    <section class="hero">
        <div class="container">
            <div class="row align-items-center mt-5 mt-sm-5 mt-md-5 mt-lg-5 mt-xl-5">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mx-auto">
                    
                    <h1 class="display-3 fw-bold">Lorem ipsu dolo sit amet 
                        <ins class="text-primary">
                            consecteu
                        </ins>                         
                        adipiscing.</h1>
                    <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                    <p class="text-primary">
                        View our products
                        <img class="ps-2" src="{{asset('images/icons/arrow-rigth-primary.svg')}}" alt="" >
                    </p>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 p-5">
                    <img class="float-end img-fluid" src="{{asset('images/background/hero-img.svg')}}" alt="" >
                </div>
            </div>
        </div>
    </section>
</div> 

<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 p-5">
                <img class="img-fluid" src="{{asset('images/background/about-img.png')}}" alt="" >
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mx-auto">

                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1 p-5 p-sm-5 p-md-0 p-lg-0 p-xl-0"><span>
                        <img class="pt-2" src="{{asset('images/part/Line2.png')}}" alt="">
                    </span></div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-11 col-xl-11 p-5 p-sm-5 p-md-0 p-lg-0 p-xl-0">
                        <p class="text-primary fw-bold fs-4">
                            about us
                        </p>
                        <p>
                            <h1 class="display-4 fw-bold text-dark">
                                We are dolor sit amet adipscing elit sit tempor elit sed us lore ipsu.
                            </h1>
                        </p>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                        </p>
                        <p>
                            <div class="row">
                                <div class="col-3">
                                    <div class="row">
                                        <div class="col-12 text-primary fw-bold">658</div>
                                        <div class="col-12">Lorem ipsum</div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="row">
                                        <div class="col-12 text-primary fw-bold">658</div>
                                        <div class="col-12">Lorem ipsum</div>
                                    </div>
                                </div>
                            </div>
                            
                        </p>
                        
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
</section>

<section class="products">
    <div class="container">
        {{-- tittle --}}
        <div class="row mt-5 pt-5">
            <center>
                 
                <p class="text-primary fw-bold fs-4">
                    our products
                </p>
                <p class="text-dark display-6 fw-bold" >
                    Check out our featured products
                </p>
            </center>
        </div>
        {{-- gallery --}}
        <div class="row mt-5 p-3">
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 mb-3">
                <div class="card text-white">
                    <img src="{{asset('images/products/product-1.png')}}" class="card-img img-fluid" alt="...">
                    <div class="d-flex align-items-end card-img-overlay">
                      <div class="card p-2 " style="width: 100%;">
                          <div class="row">
                            <div class="col-12 text-dark fw-bold">Plant 1</div>
                            <div class="col-12 text-primary">Rp150.000</div>
                          </div>
                      </div>
                      {{-- <p>test</p> --}}
                    </div>
                  </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 mb-3">
                <div class="card text-white">
                    <img src="{{asset('images/products/product-1.png')}}" class="card-img img-fluid" alt="...">
                    <div class="d-flex align-items-end card-img-overlay">
                      <div class="card p-2 " style="width: 100%;">
                          <div class="row">
                            <div class="col-12 text-dark fw-bold">Plant 1</div>
                            <div class="col-12 text-primary">Rp150.000</div>
                          </div>
                      </div>
                      {{-- <p>test</p> --}}
                    </div>
                  </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 mb-3">
                <div class="card text-white">
                    <img src="{{asset('images/products/product-1.png')}}" class="card-img img-fluid" alt="...">
                    <div class="d-flex align-items-end card-img-overlay">
                      <div class="card p-2 " style="width: 100%;">
                          <div class="row">
                            <div class="col-12 text-dark fw-bold">Plant 1</div>
                            <div class="col-12 text-primary">Rp150.000</div>
                          </div>
                      </div>
                      {{-- <p>test</p> --}}
                    </div>
                  </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <div class="card text-white">
                    <img src="{{asset('images/products/product-1.png')}}" class="card-img img-fluid" alt="...">
                    <div class="d-flex align-items-end card-img-overlay">
                      <div class="card p-2 " style="width: 100%;">
                          <div class="row">
                            <div class="col-12 text-dark fw-bold">Plant 1</div>
                            <div class="col-12 text-primary">Rp150.000</div>
                          </div>
                      </div>
                      {{-- <p>test</p> --}}
                    </div>
                  </div>
            </div>
        </div>

        {{-- button --}}
        <center>
            <div class="row mb-3">
                <div class="col-12">
                    <button type="button" class="btn btn-primary">
                        View all products
                        <img src="{{asset('images/icons/arrow-right-white.svg')}}" alt="">
                    </button>
                </div>
            </div>
        </center>
    </div>

</section>
@endsection

