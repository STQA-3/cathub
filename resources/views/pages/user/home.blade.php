@extends('layouts.user_default')
@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="container">
        <div class="overlay overlay-bg"></div>
        <div class="row fullscreen d-flex align-items-center justify-content-start">
            <div class="banner-content col-lg-8 col-md-12">
                <h1 class="text-uppercase">
                    Adopt Us. <br>
                    We need your help.
                </h1>
                <p class="text-white sub-head">
                    Kami akan membantu anda untuk menemukan kucing kesayangan anda
                </p>
                <a href="#cardCats" class="primary-btn header-btn text-uppercase">Find A Cat To Adopt</a>
                <a href="#fillDonatesCats" class="primary-btn header-btn text-uppercase">Donate A Cat</a>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start image-carusel Area -->
<section class="image-carusel-area">
    <div class="container">
        <div class="row">
            <div class="active-image-carusel">
                <div class="single-image-carusel">
                    <img class="img-fluid" src="{{ asset('asset/img/ct1.jpg')}}" alt="">
                </div>
                <div class="single-image-carusel">
                    <img class="img-fluid" src="{{ asset('asset/img/ct2.jpg')}}" alt="">
                </div>
                <div class="single-image-carusel">
                    <img class="img-fluid" src="{{ asset('asset/img/ct3.jpg')}}" alt="">
                </div>
                <div class="single-image-carusel">
                    <img class="img-fluid" src="{{ asset('asset/img/ct4.jpg')}}" alt="">
                </div>
                <div class="single-image-carusel">
                    <img class="img-fluid" src="{{ asset('asset/img/ct5.jpg')}}" alt="">
                </div>
                <div class="single-image-carusel">
                    <img class="img-fluid" src="{{ asset('asset/img/ct6.jpg')}}" alt="">
                </div>
                <div class="single-image-carusel">
                    <img class="img-fluid" src="{{ asset('asset/img/ct7.jpg')}}" alt="">
                </div>
                <div class="single-image-carusel">
                    <img class="img-fluid" src="{{ asset('asset/img/ct8.jpg')}}" alt="">
                </div>
                <div class="single-image-carusel">
                    <img class="img-fluid" src="{{ asset('asset/img/ct1.jpg')}}" alt="">
                </div>
                <div class="single-image-carusel">
                    <img class="img-fluid" src="{{ asset('asset/img/ct2.jpg')}}" alt="">
                </div>
                <div class="single-image-carusel">
                    <img class="img-fluid" src="{{ asset('asset/img/ct3.jpg')}}" alt="">
                </div>
                <div class="single-image-carusel">
                    <img class="img-fluid" src="{{ asset('asset/img/ct4.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End image-carusel Area -->


<!-- Start callto-top Area -->
<section class="callto-top-area section-gap" id="fillDonatesCats">
    <div class="container">
        <div class="row justify-content-between callto-top-wrap pt-40 pb-40">
            <div class="col-lg-8 callto-top-left">
                <h1>Do you want donate a cat?</h1>
            </div>
            <div class="col-lg-4 callto-top-right">
                <a href="{{ url('donate') }}" class="primary-btn">Fill Donate Form</a>
            </div>
        </div>
    </div>
</section>
<!-- End callto-top Area -->


<!-- Start cat-list Area -->
<section class="cat-list-area section-gap" id="cardCats">
    <div class="container">
        <div class="row">

            @foreach ($items->where('is_approved', '1') as $item)
            
            <div class="col-lg-3 col-md-6">
                <div class="list-bg">
                    <img class="overflow-hidden" src="{{ $item->galleries()->where('kucing_id', '=' , $item->id)->first()->photo }}" width="100%" height="100%">
                </div>
                <div class=" listing__item">
                    <div class="listing__item__pic set-bg">
                        <div class="listing__item__pic__tag">{{ $item->is_adopted ? 'Adopted' : 'Available'  }}</div>
                        
                    </div>
                    <div class="listing__item__text">
                        <div class="listing__item__text__inside">
                            <div class="listing__item__text__rating">
                                <div class="listing__item__rating__star">
                                    <h5>{{ $item->jenis_kucing }}</h5>
                                    
                                </div>
                                <h6>{{ $item->jenis_kelamin }}</h6>
                            </div>
                            <ul>
                                <li> {{ $item->deskripsi }}</li>
                            </ul>
                        </div>
                        <div class="listing__item__text__info">
                            
                            <div class="listing__item__text__info__right">
                                <a href="" class="listing__item__text__info__right">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            



            
        </div>
    </div>
</section>
<!-- End cat-list Area -->

<!-- Start process Area -->
<section class="process-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Process to adopt a pet</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3 col-md-6">
                <div class="single-process">
                    <span class="lnr lnr-thumbs-up"></span>
                    <h4>
                        Pet Selection
                    </h4>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-process">
                    <span class="lnr lnr-user"></span>
                    <h4>
                        Meeting Authority
                    </h4>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-process">
                    <span class="lnr lnr-magic-wand"></span>
                    <h4>
                        Bring to new family
                    </h4>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End process Area -->

<!-- Start contact-page Area -->
<section class="process-area section-gap" id="contactUs">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Contact Us</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3 col-md-6">
                <div class="single-process">
                    <span class="lnr lnr-home"></span>
                    <h4>
                        Indonesia
                    </h4>
                    <p>
                        Muhammadiyah Yogyakarta University
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-process">
                    <span class="lnr lnr-phone-handset"></span>
                    <h4>
                        081xxxxx
                    </h4>
                    </a>
                    <p>
                        Monday to Friday 9 AM to 6 PM
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-process">
                    <span class="lnr lnr-envelope"></span>
                    <h4>
                        cathub@mail.co.id
                    </h4>
                    </a>
                    <p>
                        Send us your query anytime!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End process Area -->

<!-- Start About Us Area -->
<section class="testomial-area section-gap" id="testimonail">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">About Us</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="active-testimonial-carusel">
                <div class="single-testimonial item">
                    <img class="mx-auto" src="img/t1.png" alt="">
                    <p class="desc">
                        Developer
                    </p>
                    <h4>Ahmad Krido Novarianto</h4>
                    <p>
                        UMY Student
                    </p>
                </div>
                <div class="single-testimonial item">
                    <img class="mx-auto" src="img/t2.png" alt="">
                    <p class="desc">
                        Developer
                    </p>
                    <h4>Hary Prihadi</h4>
                    <p>
                        UMY Student
                    </p>
                </div>
                <div class="single-testimonial item">
                    <img class="mx-auto" src="img/t3.png" alt="">
                    <p class="desc">
                        Developer
                    </p>
                    <h4>Muhammad Ardiansyah</h4>
                    <p>
                        UMY Student
                    </p>
                </div>
                <div class="single-testimonial item">
                    <img class="mx-auto" src="img/t1.png" alt="">
                    <p class="desc">
                        Developer
                    </p>
                    <h4>Angga Wika Nugraha</h4>
                    <p>
                        UMY Student
                    </p>
                </div>
                <div class="single-testimonial item">
                    <img class="mx-auto" src="img/t2.png" alt="">
                    <p class="desc">
                        Developer
                    </p>
                    <h4>Hafizh Pratama</h4>
                    <p>
                        UMY Student
                    </p>
                </div>
                <div class="single-testimonial item">
                    <img class="mx-auto" src="img/t3.png" alt="">
                    <p class="desc">
                        Developer
                    </p>
                    <h4>M. Fachrul Roza Limbong</h4>
                    <p>
                        UMY Student
                    </p>
                </div>
                <div class="single-testimonial item">
                    <img class="mx-auto" src="img/t1.png" alt="">
                    <p class="desc">
                        Developer
                    </p>
                    <h4>Risang Prakosa</h4>
                    <p>
                        UMY Student
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End testomial Area -->

<!-- Start calltoaction Area -->
<section class="calltoaction-area section-gap relative">
    <div class="container">
        <div class="overlay overlay-bg"></div>
        <div class="row align-items-center justify-content-center">
            <h1 class="text-white">Want to help? Become a Volunteer</h1>
            <p class="text-white">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.
                Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
            </p>
        </div>
    </div>
</section>
<!-- End calltoaction Area -->
@endsection
