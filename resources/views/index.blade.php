@extends('layouts.app')

@section('meta_keyword', 'Home page for Dopamine Task')
@section('meta_description', 'Welcome to Dopamine, a website that offers a unique service')

@section('title_Page', 'Dopamine Task')


@section('body')
    {{-- We Bring Section --}}
    <section>
        <div class="container-fluid ps-0 pe-5">
            <div class="row">
                <div class="col-12 d-flex">
                    <div class="main-div">
                        <div class="left-div"></div>
                        <div class="right-div">
                            <div class="right-div-box">
                                <p class="first_title mb-0">We Bring</p>
                                <p class="second_title">Success To You</p>
                                <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation</p>
                                <button class=" get-quote" type="submit">GET A QUOTE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- We Serve You Section --}}

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 col-md-12">
                    <div class="serve-sec">
                        <div class="first_title">How Can</div>
                        <div class="second_title">We Serve You?</div>
                        <div class="serv-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation</div>
                    </div>
                </div>

            </div>
            <div class="row mt-5">
                <div class="col-lg-3 col-6 col-md-6 pe-0 ">
                    <div class="main-service-div">
                        <div> <img src="{{ asset('assets/images/service4.png') }}" width="80" height="80"
                                title="service" alt="service" /></div>
                        <h2 class="service_title my-2">Corporate/Commercial</h2>
                        <p class="service_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        </p>
                        <div class="arrow"><img src="{{ asset('assets/images/arrow.png') }}" /></div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 col-md-6 pe-0">
                    <div class="main-service-div">
                        <div> <img src="{{ asset('assets/images/service3.png') }}" width="80" height="80"
                                title="service" alt="service" /></div>
                        <h2 class="service_title my-2">Finance</h2>
                        <p class="service_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        </p>
                        <div class="arrow"><img src="{{ asset('assets/images/arrow.png') }}" /></div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 col-md-6 pe-0">
                    <div class="main-service-div">
                        <div> <img src="{{ asset('assets/images/service2.png') }}" width="80" height="80"
                                title="service" alt="service" /></div>
                        <h2 class="service_title my-2">Mergers&Acquisitions</h2>
                        <p class="service_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        </p>
                        <div class="arrow"><img src="{{ asset('assets/images/arrow.png') }}" /></div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 col-md-6 ">
                    <div class="main-service-div">
                        <div> <img src="{{ asset('assets/images/service1.png') }}" width="80" height="80"
                                title="service" alt="service" /></div>
                        <h2 class="service_title my-2">International Trade&Logistics</h2>
                        <p class="service_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        </p>
                        <div class="arrow"><img src="{{ asset('assets/images/arrow.png') }}" /></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Areas Of Expertise Section --}}

    <section class="expertise-sec">
        <div class="container-fluid px-0">
            <div class="row">
                <div class="col-12">
                    <div class="main-div-Exp d-flex">
                        <div class="left-Exp-div">
                            <p class="second_title">Areas Of Expertise</p>
                            <p class="text pe-5 me-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod
                                tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation</p>

                            <div class="expertise-div">
                                <div class="item">
                                    <div class="text-exp">International Divorce Cases
                                        <div>
                                            <img alt="arrow" src="{{ asset('assets/images/arrow2.png') }}" />
                                        </div>
                                    </div>
                                    <div class="image">
                                        <img alt="image1.jpg" src="{{ asset('assets/images/area1.png') }}">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="text-exp">
                                        Prenuptial Agreements
                                        <div>
                                            <img alt="arrow" src="{{ asset('assets/images/arrow2.png') }}" />
                                        </div>
                                    </div>
                                    <div class="image">
                                        <img alt="image2.jpg" src="{{ asset('assets/images/area2.png') }}">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="text-exp">Civil Partnerships
                                        <div>
                                            <img alt="arrow" src="{{ asset('assets/images/arrow2.png') }}" />
                                        </div>
                                    </div>
                                    <div class="image">
                                        <img alt="image3.jpg" src="{{ asset('assets/images/area2.png') }}">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="text-exp">High Net Worth Individuals
                                        <div>
                                            <img alt="arrow" src="{{ asset('assets/images/arrow2.png') }}" />
                                        </div>
                                    </div>
                                    <div class="image">
                                        <img src="{{ asset('assets/images/area1.png') }}" alt="Image 4">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-Exp-div"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact Section --}}

    <section class="contact-bg pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5 mb-5 mb-lg-0">
                    <div class="second_title">We Are Here For You</div>
                    <div class="text pb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation</div>
                    <div class="branch-item">
                        <img src="{{ asset('assets/images/question.png') }}" alt="Country 1">
                        <div class="branch-info">
                            <div class="contact-item">+971 4 000 0000</div>
                        </div>
                    </div>
                    <div class="branch-item">
                        <img src="{{ asset('assets/images/question.png') }}" alt="Country 1">
                        <div class="branch-info">
                            <div class="contact-item">info@domainname.com</div>
                        </div>
                    </div>
                    <div class="branch-item">
                        <img src="{{ asset('assets/images/question.png') }}" alt="Country 1">
                        <div class="branch-info">
                            <div class="contact-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="contact-form text-center">
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <form class="row g-3" method="post" action="{{ route('contact.post') }}">
                            @csrf
                            <p class="contact_title mb-5">Contact & Reach Us!</p>
                            <div class="col-md-12">
                                <input class="form-control form-control-sm" type="text" placeholder="Your Name"
                                    aria-label=".form-control-sm example" name="name">
                            </div>
                            <div class="col-md-12">
                                <input class="form-control form-control-sm" type="text" placeholder="Email Address"
                                    aria-label=".form-control-sm example" name="email">
                            </div>
                            <div class="col-12">
                                <input class="form-control form-control-sm" type="text" placeholder="Your Subject"
                                    aria-label=".form-control-sm example" name="subject">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" name="message"
                                    placeholder="Enter Your Message"></textarea>
                            </div>
                            <div class="col-12 mt-5">
                                <button type="submit" class=" get-quote">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Latest News & Updates Section --}}
    <section class="news-sec">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-12 col-lg-6 col-md-6">
                    <div class="second_title">Latest News & Updates</div>
                    <div class="text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation</div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-3 col-6 col-md-6 pe-0">
                    <div class="main-news-div text-center">
                        <div> <img src="{{ asset('assets/images/news1.png') }}" width="100%" height="100%"
                                title="service" alt="service" /></div>
                        <p class="news-title mt-4">Lorem ipsum dolor sit amet</p>
                        <p class="news_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        </p>
                        <div class="news-arrow"><img src="{{ asset('assets/images/arrow.png') }}" /></div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 col-md-6 pe-0">
                    <div class="main-news-div text-center">
                        <div> <img src="{{ asset('assets/images/news2.png') }}" width="100%" height="100%"
                                title="service" alt="service" /></div>
                        <p class="news-title mt-4">Lorem ipsum dolor sit amet</p>
                        <p class="news_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        </p>
                        <div class="news-arrow"><img src="{{ asset('assets/images/arrow.png') }}" /></div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 col-md-6 pe-0">
                    <div class="main-news-div text-center">
                        <div> <img src="{{ asset('assets/images/news3.png') }}" width="100%" height="100%"
                                title="service" alt="service" /></div>
                        <p class="news-title mt-4">Lorem ipsum dolor sit amet</p>
                        <p class="news_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        </p>
                        <div class="news-arrow"><img src="{{ asset('assets/images/arrow.png') }}" /></div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 col-md-6 pe-0">
                    <div class="main-news-div text-center">
                        <div> <img src="{{ asset('assets/images/news4.png') }}" width="100%" height="100%"
                                title="service" alt="service" /></div>
                        <p class="news-title mt-4">Lorem ipsum dolor sit amet</p>
                        <p class="news_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        </p>
                        <div class="news-arrow"><img src="{{ asset('assets/images/arrow.png') }}" /></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Our Branches Section --}}
    <section>
        <div class="container my-5">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-12 col-lg-6 col-md-6">
                    <div class="second_title">Our Branches</div>
                    <div class="text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation</div>
                </div>
            </div>
            <div class="row ">
                <div class="col-12 col-lg-6 col-md-6">
                    <div class="branch-item">
                        <img src="{{ asset('assets/images/jo.png') }}" alt="Country 1">
                        <div class="branch-info">
                            <div class="branch-name">Jordan</div>
                            <div class="branch-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt</div>
                        </div>
                    </div>
                    <div class="branch-item">
                        <img src="{{ asset('assets/images/egypt.png') }}" alt="Country 2">
                        <div class="branch-info">
                            <div class="branch-name">Egypt</div>
                            <div class="branch-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt</div>
                        </div>
                    </div>
                    <div class="branch-item">
                        <img src="{{ asset('assets/images/azerbaijan.png') }}" alt="Country 2">
                        <div class="branch-info">
                            <div class="branch-name">Azerbaijan</div>
                            <div class="branch-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt</div>
                        </div>
                    </div>
                    <div class="branch-item">
                        <img src="{{ asset('assets/images/turkey.png') }}" alt="Country 2">
                        <div class="branch-info">
                            <div class="branch-name">Turkey</div>
                            <div class="branch-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt</div>
                        </div>
                    </div>
                    <div class="branch-item">
                        <img src="{{ asset('assets/images/united-kingdom.png') }}" alt="Country 2">
                        <div class="branch-info">
                            <div class="branch-name">United Kingdom</div>
                            <div class="branch-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-md-6 location">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3384.008753335305!2d35.861989174682456!3d31.987778174003434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca1c914af478f%3A0x89bb810978a66630!2sWard%20Restaurant!5e0!3m2!1sen!2sjo!4v1716057328009!5m2!1sen!2sjo"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
