    @extends('template.master')
    @section('body')


            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><i class="fas fa-times"></i></div>
                <nav class="menu-box">
                    <div class="nav-logo"><a href="index-2.html"><img src="{{ asset('assets/images/icon2.png') }}" alt="" title=""></a></div>
                    <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                    <div class="contact-info">
                        <h4>Contact Info</h4>
                        <ul>
                            <li>Sulawesi Barat, Indonesia</li>
                            <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                            <li><a href="mailto:info@example.com">info@example.com</a></li>
                        </ul>
                    </div>
                    <div class="social-links">
                        <ul class="clearfix">
                            <li><a href="index-2.html"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="index-2.html"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="index-2.html"><span class="fab fa-pinterest-p"></span></a></li>
                            <li><a href="index-2.html"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="index-2.html"><span class="fab fa-youtube"></span></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- End Mobile Menu -->


            <!-- banner-style-two -->
            <section class="banner-style-two centred">
                <div class="banner-carousel owl-theme owl-carousel owl-dots-none nav-style-one">
                    <div class="slide-item p_relative">
                        <div class="bg-layer" style="background-image: url(assets/images/banner/gambar1.jpg);"></div>
                        <div class="auto-container">
                            <div class="content-box">
                                <span class="upper-text">MAMASA</span>
                                <h2>MESA KADA DIPOTUO, PANTAN KADA DIPOMATE</h2>
                                <div class="btn-box"><a href="index-2.html" class="theme-btn btn-one">Learn More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item p_relative">
                        <div class="bg-layer" style="background-image: url(assets/images/banner/gambar2.jpeg);"></div>
                        <div class="auto-container">
                            <div class="content-box">
                                <span class="upper-text">Selamat datang di MAMASA</span>
                                <h2>Surga tersembunyi yang menunggu untuk dijelajahi</h2>
                                <div class="btn-box"><a href="index-2.html" class="theme-btn btn-one">Learn More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item p_relative">
                        <div class="bg-layer" style="background-image: url(assets/images/banner/gambar4.WEBP);"></div>
                        <div class="auto-container">
                            <div class="content-box">
                                <span class="upper-text">DI MAMASA</span>
                                <h2>Temukan kenyamanan dalam setiap langkah perjalanan Anda</h2>
                                <div class="btn-box"><a href="index-2.html" class="theme-btn btn-one">Learn More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- banner-style-two end -->


            <section class="service-section centred pt_0 pb_100" >
                <div class="auto-container">
                    <div class="inner-container" id="#layanan">
                        <div class="row clearfix">
                            <div class="col service-block" style="flex: 0 0 20%; max-width: 20%;">
                                <div class="service-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="{{ asset('assets/images/menu/service-1.jpg') }}" alt=""></figure>
                                        </div>
                                        <div class="lower-content">
                                            <h3><a href="#">Akomodasi</a></h3>
                                            <p>Lorem ipsum dolor sit amet consectetur elit.</p>
                                            <div class="link"><a href="#"><i class="icon-7"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col service-block" style="flex: 0 0 20%; max-width: 20%;">
                                <div class="service-block-one wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="assets/images/menu/service-2.jpg" alt=""></figure>
                                        </div>
                                        <div class="lower-content">
                                            <h3><a href="#">Kuliner</a></h3>
                                            <p>Lorem ipsum dolor sit amet consectetur elit.</p>
                                            <div class="link"><a href="#"><i class="icon-7"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col service-block" style="flex: 0 0 20%; max-width: 20%;">
                                <div class="service-block-one wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="assets/images/menu/service-3.jpg" alt=""></figure>
                                        </div>
                                        <div class="lower-content">
                                            <h3><a href="{{ route('product.list') }}">Transportasi</a></h3>
                                            <p>Lorem ipsum dolor sit amet consectetur elit.</p>
                                            <div class="link"><a href="{{ route('product.list') }}"><i class="icon-7"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col service-block" style="flex: 0 0 20%; max-width: 20%;">
                                <div class="service-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="assets/images/menu/service-4.jpg" alt=""></figure>
                                        </div>
                                        <div class="lower-content">
                                            <h3><a href="#">Souvenir</a></h3>
                                            <p>Lorem ipsum dolor sit amet consectetur elit.</p>
                                            <div class="link"><a href="#"><i class="icon-7"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col service-block" style="flex: 0 0 20%; max-width: 20%;">
                                <div class="service-block-one wow fadeInUp animated" data-wow-delay="800ms" data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="assets/images/service/service-5.jpg" alt=""></figure>
                                        </div>
                                        <div class="lower-content">
                                            <h3><a href="#">Hiburan</a></h3>
                                            <p>Lorem ipsum dolor sit amet consectetur elit.</p>
                                            <div class="link"><a href="#"><i class="icon-7"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- service-section end -->


            <!-- about-style-two -->
            <section class="about-style-two centred pb_140" id="#about">
                <div class="auto-container">
                    <div class="content-box">
                        <div class="sec-title centred mb_35">
                            {{-- <div class="icon-box"><i class="icon-2"></i></div>  --}}
                            <span class="sub-title">About Mamasa</span>
                            <h2>Welcome to Mamasa </h2>
                            <h3>Kondosapata' Uai Sapalelean</h3>
                        </div>
                        <p>Kabupaten Mamasa adalah salah satu kabupaten yang berada di Provinsi Sulawesi Barat, Indonesia.
                            Ibu kota kabupaten ini terletak di Kecamatan Mamasa.
                            Kabupaten ini dimekarkan pada tahun 2002 dari Kabupaten Polewali Mamasa yang sekarang berubah nama menjadi Polewali Mandar.
                            Wilayah Mamasa dikenal dengan beberapa sebutan, yakni 'Kondosapata' Uai Sapalelean', artinya sepetak sawah yang luas, dengan air yang mengalir pada semua bagiannya.
                        </p>
                        {{-- <a href="contact.html" class="theme-btn btn-one">Contact Now</a> --}}
                    </div>
                </div>
            </section>
            <!-- about-style-two end -->


            <!-- history-section -->
            <section class="history-section pb_150">
                <div class="auto-container">
                    <div class="sec-title centred mb_60">
                        <span class="sub-title">Our Service</span>
                        <h2>Layanan</h2>
                    </div>
                    <div class="inner-container p_relative pt_70">
                        <div class="inner-box">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                    <div class="content-box align-3 mr_130">
                                        <span class="year">Wisata / Akomodasi</span>
                                        <h2>Destinasi Wisata & Penginapan</h2>
                                        <p>Kami menawarkan pengalaman liburan yang menyeluruh, mulai dari wisata alam yang menakjubkan hingga penginapan yang nyaman dan mewah. Temukan berbagai paket perjalanan yang dirancang khusus untuk memenuhi kebutuhan Anda, apakah itu petualangan outdoor, wisata budaya, atau relaksasi di resort. Setiap penginapan kami dilengkapi dengan fasilitas modern dan layanan yang ramah, menjamin kenyamanan Anda selama menginap. Dengan lokasi strategis dekat destinasi utama, kami memastikan liburan Anda berjalan mulus dan berkesan </p>
                                        <a href="index-3.html" class="theme-btn btn-one">Selengkapnya</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                    <div class="image-box ml_130 pr_20 pb_20">
                                        <figure class="image image-hov-two"><img src="assets/images/resource/history-1.jpg" alt=""></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inner-box">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                    <div class="image-box mr_130 pl_20 pb_20">
                                        <figure class="image image-hov-two"><img src="assets/images/resource/history-2.jpg" alt=""></figure>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                    <div class="content-box ml_130">
                                        <span class="year">Kulineran</span>
                                        <h2>Makanan Khas</h2>
                                        <p>Nikmati kelezatan kuliner khas yang memadukan cita rasa otentik dengan sentuhan modern. Dari hidangan tradisional yang menggugah selera hingga sajian lokal yang legendaris, kami menawarkan pengalaman kuliner yang dirancang khusus untuk memanjakan selera Anda. Pilih dari berbagai menu yang sesuai dengan selera, apakah Anda mencari makanan ringan, hidangan utama, atau dessert yang manis. Setiap sajian kami dibuat dengan bahan-bahan segar dan dipersiapkan oleh tangan ahli, menjamin kualitas di setiap gigitan. Dengan layanan pemesanan yang mudah dan cepat, Anda bisa menikmati kuliner khas kapan saja dan di mana saja. Kami siap memberikan pengalaman kuliner yang akan membuat Anda kembali lagi.</p>
                                        <a href="index-3.html" class="theme-btn btn-one">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inner-box">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                    <div class="content-box align-3 mr_130">
                                        <span class="year">Kerajinan</span>
                                        <h2>Aksesoris dan Oleh-Oleh</h2>
                                        <p>
                                            Selami keindahan kerajinan tangan yang dipenuhi dengan nilai seni dan budaya. Dari produk tradisional yang otentik hingga desain modern yang kreatif, kami menawarkan berbagai pilihan kerajinan yang dirancang khusus untuk memenuhi selera dan kebutuhan Anda. Setiap karya kami dibuat dengan penuh cinta dan keahlian oleh pengrajin terampil, menggunakan bahan berkualitas tinggi untuk memastikan keawetan dan keindahan. Temukan koleksi kami yang beragam, apakah itu perhiasan, dekorasi rumah, atau souvenir khas, yang akan menambah nilai estetika dan keunikan di setiap sudut. Dengan layanan pemesanan yang mudah dan cepat, Anda dapat membawa pulang keindahan kerajinan tangan kami kapan saja. Kami berkomitmen untuk memberikan pengalaman berbelanja yang memuaskan dan menggugah semangat kreativitas Anda.

                                        </p>
                                        <a href="index-3.html" class="theme-btn btn-one">Selengkapnya</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                    <div class="image-box ml_130 pr_20 pb_20">
                                        <figure class="image image-hov-two"><img src="assets/images/resource/history-1.jpg" alt=""></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inner-box">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                    <div class="image-box mr_130 pl_20 pb_20">
                                        <figure class="image image-hov-two"><img src="assets/images/resource/history-2.jpg" alt=""></figure>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                    <div class="content-box ml_130">
                                        <span class="year">Hiburan</span>
                                        <h2>Live Event</h2>
                                        <p>
                                            Rasakan sensasi hiburan yang penuh keceriaan dan kebersamaan! Dari pertunjukan langsung yang menghibur hingga aktivitas interaktif yang menarik, kami menyediakan berbagai pilihan hiburan yang dirancang khusus untuk memenuhi selera Anda. Apakah Anda mencari konser musik yang spektakuler, pertunjukan teater yang memukau, atau acara keluarga yang seru, kami siap menyuguhkan pengalaman yang memikat hati. Setiap acara kami dipersembahkan dengan kualitas tinggi dan detail yang teliti, menjamin momen yang penuh kesan. Dengan akses mudah untuk pemesanan tiket dan informasi acara, Anda dapat merencanakan hiburan seru kapan saja. Bergabunglah dengan kami dan nikmati pengalaman hiburan yang akan membuat Anda kembali lagi!
                                            </p>
                                        <a href="index-3.html" class="theme-btn btn-one">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inner-box">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                    <div class="content-box align-3 mr_130">
                                        <span class="year">Transportasi</span>
                                        <h2>Rental Kendaraan</h2>
                                        <p>Kami menyediakan berbagai pilihan transportasi yang siap menemani perjalanan Anda. Dari mobil keluarga hingga kendaraan premium, semua tersedia dengan harga terjangkau. Nikmati kenyamanan berkendara dengan armada kami yang terawat, dilengkapi dengan fitur keamanan dan kenyamanan terkini. Baik untuk keperluan bisnis, liburan, atau acara spesial, kami siap melayani kebutuhan transportasi Anda. Pesan sekarang dan rasakan kemudahan dalam bepergian!</p>
                                        <a href="index-3.html" class="theme-btn btn-one">Selengkapnya</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                    <div class="image-box ml_130 pr_20 pb_20">
                                        <figure class="image image-hov-two"><img src="assets/images/resource/history-1.jpg" alt=""></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- history-section end -->


            <!-- funfact-section -->
            <!-- course-style-two -->

            <!-- course-style-two end -->
{{--
            <!-- testimonial-section -->
            <section class="testimonial-section pt_120 pb_140">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-5 col-md-12 col-sm-12 title-column">
                            <div class="title-box">
                                <div class="sec-title mb_30">
                                    <span class="sub-title">Testimonials</span>
                                    <h2>Users share their experiences with Golfer</h2>
                                    <p>Until recently, the prevailing view assumed lorem <br />ipsum was born as a nonsense text</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                            <div class="content-box">
                                <div class="two-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                                    <div class="testimonial-block-one">
                                        <div class="inner-box">
                                            <ul class="rating">
                                                <li><i class="icon-22"></i></li>
                                                <li><i class="icon-22"></i></li>
                                                <li><i class="icon-22"></i></li>
                                                <li><i class="icon-22"></i></li>
                                                <li class="light"><i class="icon-22"></i></li>
                                            </ul>
                                            <p>“Suspendisse est imperdiet pellentesque nulla vulputate eu pharetra pharetra massa amet ac semper et pellentesque dolor tincidunt sodales”</p>
                                            <div class="author-box">
                                                <figure class="thumb-box"><img src="assets/images/resource/testimonial-1.png" alt=""></figure>
                                                <h3>Floyd Miles</h3>
                                                <span class="designation">UI Designer</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-block-one">
                                        <div class="inner-box">
                                            <ul class="rating">
                                                <li><i class="icon-22"></i></li>
                                                <li><i class="icon-22"></i></li>
                                                <li><i class="icon-22"></i></li>
                                                <li><i class="icon-22"></i></li>
                                                <li><i class="icon-22"></i></li>
                                            </ul>
                                            <p>“Suspendisse est imperdiet pellentesque nulla vulputate eu pharetra pharetra massa amet ac semper et pellentesque dolor tincidunt sodales”</p>
                                            <div class="author-box">
                                                <figure class="thumb-box"><img src="assets/images/resource/testimonial-2.png" alt=""></figure>
                                                <h3>Cody Fisher</h3>
                                                <span class="designation">UI Designer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-section end -->
 --}}




            <!-- contact-info-section -->
            <section class="contact-info-section centred pt_100">
                <div class="auto-container">
                    <div class="sec-title centred mb_40">
                        <span class="sub-title">Contact us</span>
                        <h2>Contact Informations</h2>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 info-block">
                            <div class="info-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-41"></i></div>
                                    <h3>Our Location</h3>
                                    <p>Sulawesi Barat <br />Mamasa 91362</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 info-block">
                            <div class="info-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-42"></i></div>
                                    <h3>Email Address</h3>
                                    <p><a href="mailto:contact@example.com">MamasaTrip@example.com</a> (Information)<br /><a href="mailto:support@example.com">support@example.com</a> (query)</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 info-block">
                            <div class="info-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-43"></i></div>
                                    <h3>Phone Number</h3>
                                    <p><br /><a href="tel:2085550112">+62 831-9955-4399 </a> (Local)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-info-section end -->


            <!-- contact-style-two -->
            <section class="contact-style-two pt_120 pb_150">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="content-box mr_10">
                                <div class="sec-title mb_55">
                                    <span class="sub-title">Get in touch</span>
                                    <h2>Send a Message</h2>
                                </div>
                                <div class="form-inner">
                                    <form method="post" action="https://azim.hostlin.com/Golfer/sendemail.php" id="contact-form">
                                        <div class="row clearfix">
                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="text" name="username" placeholder="Your name" required>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="email" name="email" placeholder="Your email" required>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="text" name="phone" placeholder="Phone" required>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="text" name="subject" placeholder="Subject" required>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <textarea name="message" placeholder="Type message"></textarea>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                                <button type="submit" class="theme-btn btn-one" name="submit-form">Send Message</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                            <div class="map-inner ml_10">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1781.8548361077424!2d119.40270428675892!3d-2.983440854656293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d930b1ef3640abd%3A0x1cf90905194c99f9!2sMamasa%2C%20Rantetangnga%2C%20Kec.%20Tawalian%2C%20Kabupaten%20Mamasa%2C%20Sulawesi%20Barat!5e1!3m2!1sid!2sid!4v1728891424987!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-style-two end -->

    @endsection
