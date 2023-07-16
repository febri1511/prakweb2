@extends('theQAF.layout.app')
@section('content')
    <main id="main">

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">

                <div class="row" data-aos="zoom-in">

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('theQAF/assets/img/clients/client-1.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('theQAF/assets/img/clients/client-2.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('theQAF/assets/img/clients/client-3.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('theQAF/assets/img/clients/client-4.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('theQAF/assets/img/clients/client-5.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('theQAF/assets/img/clients/client-6.png') }}" class="img-fluid" alt="">
                    </div>

                </div>

            </div>
        </section><!-- End Cliens Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About Us</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-6">
                        <p style="text-align: justify">
                            Kami memiliki banyak pilihan perlengkapan rumah tangga yang mencakup segala sesuatu mulai dari
                            peralatan dapur hingga dekorasi hingga peralatan kebersihan hingga elektronik hingga bahan
                            makanan.
                            Dengan berbagai kategori yang mudah dinavigasi, kami berusaha memberikan pengalaman berbelanja
                            yang menyenangkan dan memudahkan Anda menemukan apa yang Anda butuhkan.
                        </p>
                        <ul>
                            <li style="text-align: justify"><i class="ri-check-double-line"></i> Tim kami selalu siap membantu Anda dengan pertanyaan,
                                saran, atau masalah apa pun yang mungkin Anda miliki</li>
                            <li style="text-align: justify"><i class="ri-check-double-line"></i> Kami memiliki prinsip bahwa setiap pelanggan adalah
                                prioritas</li>
                            <li style="text-align: justify"><i class="ri-check-double-line"></i> Kami berkomitmen untuk memberikan pengalaman berbelanja
                                yang lancar dan memuaskan</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p style="text-align: justify">
                            Kami mengutamakan kualitas dan kepuasan pelanggan. Itu sebabnya kami bermitra dengan merek
                            tepercaya dan menyediakan produk yang tahan lama,
                            fungsional, dan bergaya. Mulai dari peralatan dapur yang inovatif hingga dekorasi yang trendi,
                            setiap produk dijamin memberikan kualitas terbaik
                            untuk memenuhi kebutuhan rumah tangga Anda.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>
                    <p style="text-align: justify">Kami menyediakan berbagai bentuk layanan yang bisa Anda dapatkan sebagai pelanggan di toko kami</p>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="#">Konsultasi Desain Interior</a></h4>
                            <p style="text-align: justify">Kami menyediakan layanan konsultasi untuk membantu Anda merencanakan dan merancang ruang di
                                rumah Anda</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="#">Penawaran Diskon atau Promosi Khusus</a></h4>
                            <p style="text-align: justify">Kami memiliki program loyalitas pelanggan, diskon reguler, penjualan musiman, dan promosi
                                khusus lainnya</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="#">Layanan Pelanggan Responsif</a></h4>
                            <p style="text-align: justify">Kami menyediakan saluran komunikasi yang efisien dan responsif kepada pelanggan kami, baik
                                melalui telepon,
                                email atau obrolan langsung. Menanggapi pertanyaan, umpan balik, atau keluhan pelanggan
                                dengan cepat dan profesional.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="400">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-layer"></i></div>
                            <h4><a href="#">Layanan Purna Jual</a></h4>
                            <p style="text-align: justify">Kami menyediakan layanan purna jual yang memadai, termasuk garansi, perbaikan atau
                                penggantian produk yang rusak atau cacat</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="row">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>Call To Action</h3>
                        <p style="text-align: justify">Disini kamu bisa memberikan umpan balik, kritik, atau saran untuk kami agar kami bisa
                            meningkatkan layanan dan pengalaman pelanggan lebih baik lagi</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="{{ asset('theQAF/learnmore') }}">Bantu Kami Meningkatkan
                            Layanan Kami</a>
                    </div>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Produk</h2>
                    <p style="text-align: justify">Kami adalah toko perlengkapan rumah yang berkomitmen untuk menyediakan produk berkualitas tinggi dan
                        solusi praktis untuk kebutuhan rumah tangga. Dalam portofolio ini, kami ingin memperlihatkan
                        beberapa produk unggulan yang kami tawarkan..</p>
                </div>

                <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">Furniture</li>
                    <li data-filter=".filter-card">Elektronik</li>
                    <li data-filter=".filter-web">Fashion</li>
                </ul>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img src="{{ asset('theQAF/assets/img/portfolio/portfolio-1.jpg') }}"
                                class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Lemari Baju</h4>
                            <p>Furniture</p>
                            <a href="{{ asset('theQAF/assets/img/portfolio/portfolio-1.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Lemari Baju<br>Ukuran:Besar dan Sedang<br>Warna : Hitam,Coklat,Putih<br>Harga: Rp1.100.000">
                                <i class="bx bx-link"></i>
                                <a href="{{ url('admin/pesanan/create') }}" class="details-link" title="More Details"><i
                                        class="bx bx-plus"></i></a>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-img"><img src="{{ asset('theQAF/assets/img/portfolio/portfolio-2.jpg') }}"
                                class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Baju Ghamis Wanita</h4>
                            <p>fashion</p>
                            <a href="{{ asset('theQAF/assets/img/portfolio/portfolio-2.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Ghamis wanita<br>Ukuran: All Size<br>Warna : Pink, Hitam, Putih<br>Harga: Rp150.000"><i
                                    class="bx bx-link"></i></a>
                            <a href="{{ url('admin/pesanan/create') }}" class="details-link" title="More Details"><i
                                    class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img
                                src="{{ asset('theQAF/assets/img/portfolio/portfolio-15.jpg') }}" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Setrika Baju</h4>
                            <p>Elektronik</p>
                            <a href="{{ asset('theQAF/assets/img/portfolio/portfolio-15.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Setrika Baju<br>Ukuran: Besar dan Kecil <br>Warna : Abu-Abu dan Hitam<br>Harga: Rp170.000"><i
                                    class="bx bx-link"></i></a>
                            <a href="{{ url('admin/pesanan/create') }}" class="details-link" title="More Details"><i
                                    class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img
                                src="{{ asset('theQAF/assets/img/portfolio/portfolio-10.jpg') }}" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Meja Kayu</h4>
                            <p>Furniture</p>
                            <a href="{{ asset('theQAF/assets/img/portfolio/portfolio-10.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Meja Kayu<br>Ukuran: Besar dan Sedang <br>Warna : Coklat dan Hitam <br>Harga: Rp750.000"><i
                                    class="bx bx-link"></i></a>
                            <a href="{{ url('admin/pesanan/create') }}" class="details-link" title="More Details"><i
                                    class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-img"><img
                                src="{{ asset('theQAF/assets/img/portfolio/portfolio-16.jpg') }}" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Celana Pria</h4>
                            <p>fashion</p>
                            <a href="{{ asset('theQAF/assets/img/portfolio/portfolio-16.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Celana Pria<br>Ukuran: All Size<br>Warna : Abu-abu, Hitam, Putih, coklat, cream<br>Harga: Rp200.000"><i
                                    class="bx bx-link"></i></a>
                            <a href="{{ url('admin/pesanan/create') }}" class="details-link" title="More Details"><i
                                    class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img src="{{ asset('theQAF/assets/img/portfolio/portfolio-3.jpg') }}"
                                class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Pot bunga</h4>
                            <p>Furniture</p>
                            <a href="{{ asset('theQAF/assets/img/portfolio/portfolio-3.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Pot Bunga<br>Ukuran: Besar dan Kecil<br>Warna : Biru, Oren, hijau, Pink, pink, Putih<br>Harga: Rp100.000"><i
                                    class="bx bx-link"></i></a>
                            <a href="{{ url('admin/pesanan/create') }}" class="details-link" title="More Details"><i
                                    class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="{{ asset('theQAF/assets/img/portfolio/portfolio-4.jpg') }}"
                                class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Kulkas</h4>
                            <p>Elektronik</p>
                            <a href="{{ asset('theQAF/assets/img/portfolio/portfolio-4.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Kulkas <br>Ukuran: Besar dan Sedang<br>Warna : Silver, Hitam, Merah<br>Harga: Rp3.500.000"><i
                                    class="bx bx-link"></i></a>
                            <a href="{{ url('admin/pesanan/create') }}" class="details-link" title="More Details"><i
                                    class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-img"><img src="{{ asset('theQAF/assets/img/portfolio/portfolio-5.jpg') }}"
                                class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Baju pria</h4>
                            <p>Fashion</p>
                            <a href="{{ asset('theQAF/assets/img/portfolio/portfolio-5.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Baju Pria<br>Ukuran: All Size<br>Warna : All Variant <br>Harga: Rp155.000"><i
                                    class="bx bx-link"></i></a>
                            <a href="{{ url('admin/pesanan/create') }}" class="details-link" title="More Details"><i
                                    class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img
                                src="{{ asset('theQAF/assets/img/portfolio/portfolio-13.jpg') }}" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Kompor Listrik</h4>
                            <p>Elektronik</p>
                            <a href="{{ asset('theQAF/assets/img/portfolio/portfolio-13.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Kompor Listrik<br>Ukuran: Besar dan Sedang<br>Warna : Hitam, Abu-abu, Coklat<br>Harga: Rp3.150.000"><i
                                    class="bx bx-link"></i></a>
                            <a href="{{ url('admin/pesanan/create') }}" class="details-link" title="More Details"><i
                                    class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img src="{{ asset('theQAF/assets/img/portfolio/portfolio-6.jpg') }}"
                                class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Kursi</h4>
                            <p>Furniture</p>
                            <a href="{{ asset('theQAF/assets/img/portfolio/portfolio-6.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Kursi<br>Ukuran: Besar dan Sedang<br>Warna : Coklat dan Hitam<br>Harga: Rp150.000"><i
                                    class="bx bx-link"></i></a>
                            <a href="{{ url('admin/pesanan/create') }}" class="details-link" title="More Details"><i
                                    class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-img"><img
                                src="{{ asset('theQAF/assets/img/portfolio/portfolio-17.jpg') }}" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Celana Wanita</h4>
                            <p>fashion</p>
                            <a href="{{ asset('theQAF/assets/img/portfolio/portfolio-17.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Celana Wanita<br>Ukuran: All Size<br>Warna : Pink, Hitam, Putih, Coklat, Cream, Abu-abu<br>Harga: Rp200.000"><i
                                    class="bx bx-link"></i></a>
                            <a href="{{ url('admin/pesanan/create') }}" class="details-link" title="More Details"><i
                                    class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="{{ asset('theQAF/assets/img/portfolio/portfolio-7.jpg') }}"
                                class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Kamera</h4>
                            <p>Elektronik</p>
                            <a href="{{ asset('theQAF/assets/img/portfolio/portfolio-7.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Kamera <br>Ukuran: All Variant<br>Warna : Hitam <br>Harga: Rp5.000.000"><i
                                    class="bx bx-link"></i></a>
                            <a href="{{ url('admin/pesanan/create') }}" class="details-link" title="More Details"><i
                                    class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img
                                src="{{ asset('theQAF/assets/img/portfolio/portfolio-12.jpg') }}" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Kasur</h4>
                            <p>Furniture</p>
                            <a href="{{ asset('theQAF/assets/img/portfolio/portfolio-12.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Kasur<br>Ukuran: All Size<br>Warna : Putih<br>Harga: Rp1.000.000-12.000.000"><i
                                    class="bx bx-link"></i></a>
                            <a href="{{ url('admin/pesanan/create') }}" class="details-link" title="More Details"><i
                                    class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="{{ asset('theQAF/assets/img/portfolio/portfolio-8.jpg') }}"
                                class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>TV</h4>
                            <p>Elektronik</p>
                            <a href="{{ asset('theQAF/assets/img/portfolio/portfolio-8.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="TV <br>Ukuran: All Size <br>Hitam<br>Harga: Rp4.150.000"><i
                                    class="bx bx-link"></i></a>
                            <a href="{{ url('admin/pesanan/create') }}" class="details-link" title="More Details"><i
                                    class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-img"><img src="{{ asset('theQAF/assets/img/portfolio/portfolio-9.jpg') }}"
                                class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Hoodie</h4>
                            <p>Fashion</p>
                            <a href="{{ asset('theQAF/assets/img/portfolio/portfolio-9.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Hoodie<br>Ukuran: All Size<br>Warna : All Variant<br>Harga: Rp350.000"><i
                                    class="bx bx-link"></i></a>
                            <a href="{{ url('admin/pesanan/create') }}" class="details-link" title="More Details"><i
                                    class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img
                                src="{{ asset('theQAF/assets/img/portfolio/portfolio-11.jpg') }}" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Meja Rias</h4>
                            <p>Furniture</p>
                            <a href="{{ asset('theQAF/assets/img/portfolio/portfolio-11.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Meja Rias<br>Ukuran: All Size<br>Warna : Coklat, Hitam, Putih<br>Harga: Rp620.000"><i
                                    class="bx bx-link"></i></a>
                            <a href="{{ url('admin/pesanan/create') }}" class="details-link" title="More Details"><i
                                    class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-img"><img
                                src="{{ asset('theQAF/assets/img/portfolio/portfolio-19.jpg') }}" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Sepatu Kets Pria</h4>
                            <p>Fashion</p>
                            <a href="{{ asset('theQAF/assets/img/portfolio/portfolio-19.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Sepatu Kets<br>Ukuran: All Size<br>Warna : All Variant<br>Harga: Rp250.000"><i
                                    class="bx bx-link"></i></a>
                            <a href="{{ url('admin/pesanan/create') }}" class="details-link" title="More Details"><i
                                    class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img
                                src="{{ asset('theQAF/assets/img/portfolio/portfolio-14.jpg') }}" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Penanak Nasi</h4>
                            <p>Elektronik</p>
                            <a href="{{ asset('theQAF/assets/img/portfolio/portfolio-14.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Penanak Nasi<br>Ukuran: Besar<br>Warna : Pink,Merah, Putih<br>Harga: Rp1.250.000"><i
                                    class="bx bx-link"></i></a>
                            <a href="{{ url('admin/pesanan/create') }}" class="details-link" title="More Details"><i
                                    class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-img"><img
                                src="{{ asset('theQAF/assets/img/portfolio/portfolio-18.jpg') }}" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Sepatu Kets Wanita</h4>
                            <p>Fashion</p>
                            <a href="{{ asset('theQAF/assets/img/portfolio/portfolio-18.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Sepatu Kets Wanita<br>Ukuran: All Size<br>Warna : Pink, Hitam, Putih, Merah<br>Harga: Rp150.000"><i
                                    class="bx bx-link"></i></a>
                            <a href="{{ url('admin/pesanan/create') }}" class="details-link" title="More Details"><i
                                    class="bx bx-plus"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->
        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">

                                <div class="swiper-slide">
                                    <img src="{{ asset('theQAF/assets/img/portfolio/portfolio-1.jpg') }}" alt="">
                                </div>


                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Informasi Produk</h3>
                            <ul>
                                <li><strong>Produk Terbaik</strong>: Lemari </li>
                                <li><strong>Pelanggan</strong>: Ahmad</li>
                                <li><strong>Berlangganan Sejak</strong>: 01 Maret 2020</li>
                            </ul>
                        </div>
                        <div class="portfolio-description">
                            <h2>Testimoni atau Ulasan</h2>
                            <p style="text-align: justify">
                                "Produk-produk yang ditawarkan oleh THE QAF sangat berkualitas. Mereka memiliki pilihan yang
                                luas dan membantu kami dalam menemukan perlengkapan rumah yang tepat sesuai dengan kebutuhan
                                dan gaya kami." - Keluarga Ahmad
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Team</h2>
                    <p>Berikut ini anggota tim kami kelompok 3</p>
                </div>

                <div class="row">

                    <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('theQAF/assets/img/team/team-1.jpg') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Febrianscah</h4>
                                <span>Backend(Crud)</span>
                                <p>Membuat halaman admin</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('theQAF/assets/img/team/team-2.jpg') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Farhatul Atqiya</h4>
                                <span>Frontend Dashboard</span>
                                <p>Membuat halaman dashboard</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('theQAF/assets/img/team/team-3.jpg') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Wahyu Akbar Pratama Siregar</h4>
                                <span>Login</span>
                                <p>Membuat halaman login</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('theQAF/assets/img/team/team-4.jpg') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Izzuddin ahmad al-qosam</h4>
                                <span>frontend</span>
                                <p>Membuat halaman pesanan</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Kami menyediakan beberapa pilihan kontak dan saluran komunikasi yang berbeda agar membantu anda untuk
                        memilih metode yang paling nyaman bagi anda.</p>
                </div>

                <div class="row">

                    <div class="col-lg-12 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Jl.H.baing Kramatjati,Jakarta Timur, 13540</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+24 5589 5545588 556</p>
                            </div>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                                frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                        </div>

                    </div>


                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
