@extends('layouts.main')

@section('content')
<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col">
                
                <h1 class="display-3">Lorem ipsu dolo sit amet 
                    <ins class="text-primary">
                        consecteu
                    </ins>                         
                     adipiscing.</h1>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
            </div>
            <div class="col">
                <img class="float-end" src="{{asset('images/background/hero-img.svg')}}" alt="" width="482" height="513">
            </div>
        </div>
    </div>
</section>
@endsection

