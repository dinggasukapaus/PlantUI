@extends('layouts.main')

@section('content')

<div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">

    <div class="row mt-5 mb-5 p-5">
        <div class="col-12" id="blank"></div>
    </div>
    <section class="hero-section">
        <div class="container">
            <div class="row mt-5 pt-5">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 p-3">
                    <div class="card p-5 shadow border-0">
                        <div class="card-body">
                          <form action="#" method="" onSubmit="validasi()" >
                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Your Name</label>
                                <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Enter your name...">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Your Email</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter your email address...">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Subject</label>
                                <select class="form-select text-muted" aria-label="Default select example">
                                  <option selected>Select subject</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div>
                              <input class="btn btn-primary" type="submit" value="Submit">
                            </div>
                          </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 p-5">
                    <div class="row">
                        <div class="col-12">
                            <img class="text-dec float-end img-fluid" src="{{asset('images/part/dot.svg')}}" alt="">
                        </div>
                        <div class="col-12">
                            <p class="text-dark fw-bold fs-4">
                                Contact us
                            </p>
                            <p>
                                <h1 class="display-4 fw-bold text-dark">
                                    Get in touch
                                </h1> 
                            </p>
                            <p class="text-muted">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                            </p>
                            <p class="text-dark">
                                hello@plants.co
                            </p>
                            <p class="text-dark">
                                +62 885-2812-2893
                            </p>
                            <p>
                                <div class="row">
                                    <div class="col-12">
                                        3463 Toy Estate, Hartmanntown,
                                    </div>
                                    <div class="col-12">
                                        Rhode Island 21121-4372
                                    </div>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>


<div class="row">
    <div class="col-12 bg-dark">

    </div>
</div>
@endsection
