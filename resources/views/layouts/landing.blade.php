@section('section1')
    <div id="section-1">

        <!-- Navbar -->
        @include('layouts.navbar')
        @yield('navbar')
        
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <div class="center-text-banner">
                        <h2 class="title-banner">
                            pengalaman olahraga yang tak pernah seasik ini
                        </h2>
                        <p class="text-banner">
                            ubah pengalaman olahragamu yang dulu alihkan ke pengalaman olahraga yang menyengangkan
                        </p>
                        <!-- <a href="#" style="text-decoration:none;" class="link-banner">Daftar</a>
                        <a href="#" style="text-decoration:none;" class="link-banner">Masuk</a> -->
                    </div>            
                </div>
            </div>
        </div>
        <div class="clear"></div>

        <div class="max-width-img">
            <img src="{{ asset('images/illustration/Asset-8.png') }}" alt="" class="banner-img-1">
            <img src="{{ asset('images/illustration/Asset-3.png') }}" alt="" class="banner-img-2">
            <img src="{{ asset('images/illustration/Asset-4.png') }}" alt="" class="banner-img-3">
            <img src="{{ asset('images/illustration/Asset-9.png') }}" alt="" class="banner-img-4">
            <img src="{{ asset('images/illustration/Asset-10.png') }}" alt="" class="banner-img-5">
            <img src="{{ asset('images/illustration/Asset-13.png') }}" alt="" class="banner-img-6">
            <img src="{{ asset('images/illustration/Asset-12.png') }}" alt="" class="banner-img-7">
            <img src="{{ asset('images/illustration/Asset-1.png') }}" alt="" class="banner-img-8">
            <img src="{{ asset('images/illustration/Asset-2.png') }}" alt="" class="banner-img-9">
            <img src="{{ asset('images/illustration/Asset-8.png') }}" alt="" class="banner-img-10">
        </div>

    </div>
@endsection

@section('section2')
    <!-- <div class="clear"></div> -->
    <div id="section-2">
        <div class="container">
            <div class="top-section-2">

                <!-- <div class="title-section-2">
                    <h2 class="title-card">
                        Fiture
                    </h2>
                </div> -->
        
                <div class="row left-right-m">
                    <div class="col-sm">
                        <div class="cards">
                            <div class="img-cards">
                                <img src="{{ asset('images/card/card.jpg') }}" alt="img card">
                            </div>
                            <div class="padding-cards">
                                <div class="title-cards">
                                    <h4>title cars</h4>
                                </div>
                                <div class="text-cards">
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, consequatur</p>
                                </div>
                                <div class="btn-cards">
                                    <a href="">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="cards">
                            <div class="img-cards">
                                <img src="{{ asset('images/card/card.jpg') }}" alt="img card">
                            </div>
                            <div class="padding-cards">
                                <div class="title-cards">
                                    <h4>title cars</h4>
                                </div>
                                <div class="text-cards">
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, consequatur</p>
                                </div>
                                <div class="btn-cards">
                                    <a href="">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="cards">
                            <div class="img-cards">
                                <img src="{{ asset('images/card/card.jpg') }}" alt="img card">
                            </div>
                            <div class="padding-cards">
                                <div class="title-cards">
                                    <h4>title cars</h4>
                                </div>
                                <div class="text-cards">
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, consequatur</p>
                                </div>
                                <div class="btn-cards">
                                    <a href="">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('section3')
    <div class="bg-sec-3"></div>
    <div id="section-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h2 class="about-us">
                        Tentang <br>
                        <span class="border-about"></span>
                    </h2><br>
                </div>
                <div class="col-sm-9 text-about">
                    <p>Lorem ipsum dolor Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque officia delectus placeat, culpa sit obcaecati eius! Necessitatibus temporibus optio sed cupiditate corporis iusto labore autem facilis provident. Unde, harum earum. sit amet consectetur adipisicing elit. Vitae itaque veniam, iusto magnam maxime repellendus doloremque numquam ex iste explicabo et amet perspiciatis optio culpa beatae enim quas voluptas perferendis?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae itaque veniam, iusto magnam maxime repellendus doloremque numquam ex iste explicabo et amet perspiciatis optio culpa beatae enim quas Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis eius quo nobis alias laudantium quisquam ipsum! Doloribus commodi fuga quae fugit neque numquam accusamus, provident eius cupiditate, aliquid nesciunt molestias. voluptas perferendis?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae itaque veniam, iusto magnam maxime repellendus doloremque numquam ex iste explicabo et amet perspiciatis optio culpa beatae enim quas voluptas perferendis?</p>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-sec-3 top-minus-1"></div>
@endsection

@section('section4')
    <div class="clear"></div>
    <div id="section-4">
        <div class="container">

            <div class="title-section">
                <h2 class="title-card">
                    Apa Kesehatan Penting ???
                </h2>
            </div>

            <div class="row left-right-m">
                <div class="col-sm">
                    <div class="cards position-none">
                        <div class="img-cards-2">
                            <img src="{{ asset('images/card/card.jpg') }}" alt="img card">
                        </div>
                        <div class="padding-cards">
                            <div class="title-cards">
                                <h4>title cars</h4>
                            </div>
                            <div class="text-cards">
                                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, consequatur</p>
                            </div>
                            <div class="btn-cards">
                                <a href="">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="cards position-none">
                        <div class="img-cards-2">
                            <img src="{{ asset('images/card/card.jpg') }}" alt="img card">
                        </div>
                        <div class="padding-cards">
                            <div class="title-cards">
                                <h4>title cars</h4>
                            </div>
                            <div class="text-cards">
                                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, consequatur</p>
                            </div>
                            <div class="btn-cards">
                                <a href="">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="cards position-none">
                        <div class="img-cards-2">
                            <img src="{{ asset('images/card/card.jpg') }}" alt="img card">
                        </div>
                        <div class="padding-cards">
                            <div class="title-cards">
                                <h4>title cars</h4>
                            </div>
                            <div class="text-cards">
                                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, consequatur</p>
                            </div>
                            <div class="btn-cards">
                                <a href="">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <img src="{{ asset('images/section/footer.png') }}" alt="" class="footer-img">
    </div>
@endsection
