{{--//666666666666666666--}}
<!-- MENU-->
<section id="menu" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                    <h2>Our Menus</h2>
                    <h4>Tea Time &amp; Dining</h4>
                </div>
            </div>
                @foreach($foods as $food)
            <div class="col-md-4 col-sm-6">
                <!-- MENU THUMB -->
                <div class="menu-thumb">
                    <a href="{{asset('templatemo_Restoran/')}}/images/{{$food->image}}" class="image-popup" title="American Breakfast">
                        <img src="{{asset('templatemo_Restoran/')}}/images/{{$food->image}}" class="img-responsive" alt="">

                        <div class="menu-info">
                            <div class="menu-item">
                                <h3>{{$food->name}}</h3>
                                <p>Tomato / Eggs / Sausage</p>
                            </div>
                            <div class="menu-price">
                                <span>$ {{$food->price}}</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
