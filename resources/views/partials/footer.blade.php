<footer class="footer bg-dark">
    <div class="container">
      <div class="row p-5">
        {{-- col 1 --}}
        <div class="col-4 text-white">
          <div class="row">
            {{-- icon --}}
            <div class="col-12">
              <a class="navbar-brand text-white fw-bold" href="#">
                <img src="{{asset('images/icons/icon-white.svg')}}" alt="" width="30" height="24">
                plants
              </a>
            </div>
            {{-- text --}}
            <div class="col-12 mt-3">
              We are nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.
            </div>
            {{-- icon list --}}
            <div class="col-12 mt-3">
              <img class="me-2" src="{{asset('images/icons/icon-instagram.svg')}}" alt="">
              <img class="me-2" src="{{asset('images/icons/icon-twitter.svg')}}" alt="">
              <img src="{{asset('images/icons/icon-youtube.svg')}}" alt="">
            </div>
          </div>
        </div>
        {{-- col 2 --}}
        <div class="col-4">
          <div class="row text-white fw-bold">
            <div class="col-4">
              <div class="row">
                <div class="col-12">Product</div>
                <div class="col-12 mt-3">Promotions</div>
                <div class="col-12 mt-3">Careers</div>
              </div>
            </div>
            <div class="col-4">
              <div class="row">
                <div class="col-12">Teams</div>
                <div class="col-12 mt-3">Our vision</div>
                <div class="col-12 mt-3">Help</div>
              </div>
            </div>
            <div class="col-4">
              <div class="row">
                <div class="col-12">Corporate</div>
                <div class="col-12 mt-3">Contact</div>
                
              </div>
            </div>
          </div>
        </div>
        {{-- col 3 --}}
        <div class="col-4">
          <div class="row">
            <div class="col-12 text-white fw-bold">
              Subscribe our newsletter
            </div>
            <div class="col-12 text-muted mt-3">
              Insert your email address to subscribe
            </div>
            <div class="col-12 mt-3">
              {{-- <div class="input-group mb-3 bg-dark">
                <input type="text" class="form-control bg-dark" placeholder="Your email address..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                <span class="input-group-text bg-dark" id="basic-addon2">
                  <button type="button" class="btn btn-white bg-white rounded-pill">
                    Subscribe
                </button>
                </span>
              </div> --}}
              <div class="box bg-dark">
                <form action="#" method="get">
                    <input type="text" name="name" placeholder="Your email address..." id="search" style="background: transparent;border: none;color: white;margin-left: 5px;">
                </form>
                <button type="button" class="btn btn-white w-100 bg-white rounded-pill">
                  Subscribe
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="container">

          <hr class="bg-white border-2 border-top border-white mt-5">
        </div>
        <div class="row text-white">
          <div class="col-6">
            Copyright 2021 Plants - All rights reserved
          </div>
          <div class="col-6">
            <div class="float-end">
              Customer support • Terms & conditions
            </div>
          </div>
        </div>
      </div>

      
      
    </div>
</footer>