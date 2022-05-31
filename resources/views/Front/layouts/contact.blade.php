{{--//8888888888888888--}}
<!-- CONTACT -->
<section id="contact" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <!-- How to change your own map point
                    1. Go to Google Maps
                    2. Click on your location point
                    3. Click "Share" and choose "Embed map" tab
                    4. Copy only URL and paste it within the src="" field below
            -->
            <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
                <div id="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945" allowfullscreen></iframe>
                </div>
            </div>
            @if($errors->any())
                <div class="alert alert-danger"  >
                    {{$errors->first()}}
                </div>
            @endif
            <div class="col-md-6 col-sm-12">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2>Contact</h2>
                    </div>
                </div>

                <!-- CONTACT FORM -->
                <form action="{{route('reservation')}}" method="post" class="wow fadeInUp" id="contact-form" role="form" data-wow-delay="0.8s">
                   @csrf
                    <div class="col-md-6 col-sm-6">
                        <input type="text" class="form-control" id="cf-name" name="date" placeholder="Rezerv edeceyiniz vaxt">
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <input type="text" class="form-control" id="cf-name" name="yer_sayisi" placeholder="Yer sayi">
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <input type="text" class="form-control" id="cf-name" name="phone" placeholder="telefon">
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <input type="text" class="form-control" id="cf-subject" name="filial" placeholder="Rezerv etmek istediyiniz Fililal">

                        <textarea class="form-control" rows="6" id="cf-message" name="message" placeholder="Elave serh"></textarea>

                    </div>
                    <button type="submit" class="form-control" id="cf-submit" name="submit">Rezerv et</button>

                </form>
            </div>

        </div>
    </div>
</section>
