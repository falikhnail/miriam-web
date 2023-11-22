@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <h1>Selamat datang di RSIA Miriam</h1>
            <h2>To Love, To Share, To Care</h2>
            <a href="#about" class="btn-get-started scrollto">Mulai</a>
        </div>
    </section><!-- End Hero -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container">

            <div class="row">
                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="content">
                        <h3>Kenapa Memilih RSIA MIRIAM ?</h3>
                        <p>
                        Karena RSIA Miriam merupakan salah satu RSIA yang terbaik di kota Kudus dengan spesialisasi
                        perawatan ibu dan anak seperti persalinan, perawatan bayi dan anak, konsultasi kehamilan dan
                        didukung oleh dokter-dokter spesialis obgyn dan pediatrik yang kompeten dan berpengalaman.
                        Juga dilengkapi dengan fasilitas dan peralatan medis yang canggih dan modern serta
                        tenaga medis yang handal.
                        </p>
                        <div class="text-center">
                            <a href="#" class="more-btn">Pelajari lebih lanjut<i class="bx bx-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 d-flex align-items-stretch">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-6 mt-xl-0">
                                    <i class="bx bx-receipt"></i>
                                    <h4>Ambulance Service</h4>
                                    <p>..............</p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-6 mt-xl-0">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Ruangan Darurat</h4>
                                    <p>................</p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-6 mt-xl-0">
                                    <i class="bx bx-images"></i>
                                    <h4>Pemeriksaan Geratis</h4>
                                    <p>...................</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container-fluid">

            <div class="row">
                <div
                    class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
                    <a href="https://www.youtube.com/watch?v=Tk6OXQwtSN4" class="glightbox play-btn mb-4"></a>
                </div>

                <div
                    class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                    <h3>kosong</h3>
                    <p>isi dengan penjelasan singkat</p>

                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-fingerprint"></i></div>
                        <h4 class="title"><a href="">kosong</a></h4>
                        <p class="description">isi dengan penjelasan singkat</p>
                    </div>

                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-gift"></i></div>
                        <h4 class="title"><a href="">kosong</a></h4>
                        <p class="description">isi dengan penejelasn singkat</p>
                    </div>

                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-atom"></i></div>
                        <h4 class="title"><a href="">kosong</a></h4>
                        <p class="description">isi dengan penejelasan singkat</p>
                    </div>

                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container">

            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="fas fa-user-md"></i>
                        <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Dokter</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                    <div class="count-box">
                        <i class="far fa-hospital"></i>
                        <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Unit</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="fas fa-flask"></i>
                        <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Belom Tahu Isinya</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="fas fa-award"></i>
                        <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Penghargaan</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>Services</h2>
                <p>..................</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-heartbeat"></i></div>
                        <h4><a href="">..............</a></h4>
                        <p>.....................</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-pills"></i></div>
                        <h4><a href="">................</a></h4>
                        <p>...................</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-hospital-user"></i></div>
                        <h4><a href="">..............</a></h4>
                        <p>....................</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-dna"></i></div>
                        <h4><a href="">.................</a></h4>
                        <p>......................s</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-wheelchair"></i></div>
                        <h4><a href="">........</a></h4>
                        <p>....................</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-notes-medical"></i></div>
                        <h4><a href="">...........</a></h4>
                        <p>....................</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Appointment Section ======= -->
    <!-- <section id="appointment" class="appointment section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Make an Appointment</h2>
                <p>..............</p>
            </div>

            <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
                <div class="row">
                    <div class="col-md-4 form-group">
                        <input type="text" name="name" class="form-control" id="name"
                            placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-4 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-4 form-group mt-3 mt-md-0">
                        <input type="tel" class="form-control" name="phone" id="phone"
                            placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 form-group mt-3">
                        <input type="datetime" name="date" class="form-control datepicker" id="date"
                            placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-4 form-group mt-3">
                        <select name="department" id="department" class="form-select">
                            <option value="">Unit</option>
                            <option value="Department 1">Department 1</option>
                            <option value="Department 2">Department 2</option>
                            <option value="Department 3">Department 3</option>
                        </select>
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-4 form-group mt-3">
                        <select name="doctor" id="doctor" class="form-select">
                            <option value="">Select Doctor</option>
                            <option value="Doctor 1">Doctor 1</option>
                            <option value="Doctor 2">Doctor 2</option>
                            <option value="Doctor 3">Doctor 3</option>
                        </select>
                        <div class="validate"></div>
                    </div>
                </div>

                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
                    <div class="validate"></div>
                </div>
                <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Make an Appointment</button></div>
            </form>

        </div>
    </section> End Appointment Section -->

    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
        <div class="container">

            <div class="section-title">
                <h2>Unit</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit
                    in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row gy-4">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs flex-column">
                        <li class="nav-item">
                            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Cardiology</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Neurology</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Hepatology</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Pediatrics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Eye Care</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="tab-1">
                            <div class="row gy-4">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Cardiology</h3>
                                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila
                                        parde sonata raqer
                                        a videna mareta paulona marka</p>
                                    <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum
                                        eos ipsum ipsa
                                        odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius
                                        et quis magni
                                        nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero
                                    </p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-2">
                            <div class="row gy-4">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Et blanditiis nemo veritatis excepturi</h3>
                                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila
                                        parde sonata raqer
                                        a videna mareta paulona marka</p>
                                    <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et
                                        reiciendis sunt sunt
                                        est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates.
                                        Optio nesciunt eaque
                                        beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-3">
                            <div class="row gy-4">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                                    <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim
                                        fuga. Qui natus
                                        non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
                                    <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis
                                        quisquam. Neque
                                        necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam
                                        a iste odio. Earum
                                        odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-4">
                            <div class="row gy-4">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                                    <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas
                                        iure porro quis
                                        delectus</p>
                                    <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam
                                        necessitatibus aliquam
                                        fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque.
                                        Eligendi asperiores
                                        sed qui veritatis aperiam quia a laborum inventore</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/departments-4.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-5">
                            <div class="row gy-4">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                                    <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.
                                    </p>
                                    <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae
                                        ut non quam ut
                                        quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est
                                        sint aut vitae
                                        molestiae voluptate vel</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Departments Section -->

    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors">
        <div class="container">

            <div class="section-title">
                <h2>Doctors</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit
                    in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">

                <div class="col-lg-6">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/doctors/doctors-1.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <span>Chief Medical Officer</span>
                            <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/doctors/doctors-2.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <span>Anesthesiologist</span>
                            <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/doctors/doctors-3.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>Cardiology</span>
                            <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/doctors/doctors-4.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <span>Neurosurgeon</span>
                            <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
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
    </section><!-- End Doctors Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit
                    in iste officiis commodi quidem hic quas.</p> -->
            </div>

            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up">
                        <i class="bx bx-help-circle icon-help"></i>
                        <a data-te-collapse-init data-te-ripple-init data-te-ripple-color="light" href="#faq-list-1"
                            aria-expanded="false" aria-controls="faq-list-1">
                            Apakah RSIA Miriam Sudah Terakreditasi ?
                            <i class="bx bx-chevron-down icon-show"></i>
                            <i class="bx bx-chevron-up icon-close"></i>
                        </a>
                        <div id="faq-list-1" class="!visible hidden" data-te-collapse-item>
<<<<<<< HEAD
                            <p> untuk saat ini RSIA Miriam sudah terakreditasi dengan bintang 5 dan sudah tersedia pelayanan yang menggunakan.
=======
                             <p> untuk saat ini RSIA Miriam sudah terakreditasi dengan bintang 5 dan sudah tersedia pelayanan yang menggunakan.
>>>>>>> 975eb48cc2ca56586959e6b6e6507e556e2b0a86
                                BPJS.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i>
                        <a data-te-collapse-init data-te-ripple-init data-te-ripple-color="light" aria-expanded="false"
                            aria-controls="faq-list-2" href="#faq-list-2">
                            apakah RSIA MIRIAM Hanya Menyediakan Pelayanan Untuk Ibu dan Anak ?
                            <i class="bx bx-chevron-down icon-show"></i>
                            <i class="bx bx-chevron-up icon-close"></i>
                        </a>
                        <div id="faq-list-2" class="!visible hidden" data-te-collapse-item>
                            <p>Pelayanan Di RSIA Miriam Tidak Hanya Untuk Ibu dan Anak, Sekarang Di RSIA Miriam Juga Terdapat Pelayanan Umum.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i>
                        <a data-te-collapse-init data-te-ripple-init data-te-ripple-color="light" aria-expanded="false"
                            aria-controls="faq-list-3" href="#faq-list-3">
                            Apakah RSIA Miriam Memiliki Kualitas yang bagus ?
                            <i class="bx bx-chevron-down icon-show"></i>
                            <i class="bx bx-chevron-up icon-close"></i>
                        </a>
                        <div id="faq-list-3" class="!visible hidden" data-te-collapse-item>
                            <p> RSIA Miriam Saat ini sudah memenuhi Standart dan Kulitas Internasional.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                        <i class="bx bx-help-circle icon-help"></i>
                        <a data-te-collapse-init data-te-ripple-init data-te-ripple-color="light" aria-expanded="false"
                            aria-controls="faq-list-4" href="#faq-list-4">
                            Apakah RSIA Miriam Memiliki Fasilitas Yang Dibutuhkan Oleh Pasien ?
                            <i class="bx bx-chevron-down icon-show"></i>
                            <i class="bx bx-chevron-up icon-close"></i>
                        </a>
                        <div id="faq-list-4" class="!visible hidden" data-te-collapse-item>
                            <p>Fasilitas Di RSIA Miriam Saat Ini Sudah Terbilang Cukup Lengkap Untuk Menunjang Kebutuhan Pasien.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="400">
                        <i class="bx bx-help-circle icon-help"></i> <a data-te-collapse-init data-te-ripple-init data-te-ripple-color="light" aria-expanded="false"
                            aria-controls="faq-list-5" href="#faq-list-5">Apakah RSIA Miriam Tersedia 24 Jam ?
                            <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-5" class="!visible hidden">
                            <p>
                                RSIA Miriam Tersedia 2 jam.
                            </p>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
            <div class="container">
                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                    <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                        <h3>Bambang Sugeni</h3>
                        <h4>Karyawan Swasta</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            RSIA Miriam Memiliki Kualitas dan Kuantitas Yang Dapat Menunjang Semua Kebutuhan Anak dan Istri saya. Dimana Juga Memiliki Pelayanan Yang Cepat dan Efisien
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        </div>
                    </div>
                    </div>


    <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                        <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                        <h3>Richa Auliya Sari</h3>
                        <h4>PNS</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Terimakasih Sudah Memberikan Yang Terbaik Untuk Saya.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        </div>
                    </div>
                    </div>


    <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                        <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                        <h3>Naomi Sudarsono</h3>
                        <h4>Store Owner</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Pelayanan Yang Diberikan Oleh Perawat Di RSIA Miriam Sangat Memuaskan dan Ramah Terhadap Pasien.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        </div>
                    </div>
                    </div>


    <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                        <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                        <h3>Tommy Bagus</h3>
                        <h4>Freelancer</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Terimakasih Sudah Memberikan Pertolongan Kepada Anak dan Istri Saya Pasca Melahirkan Hingga Pengobatan Anak Saya Yang Sampai
                            Saat Ini Diusia 10th Sudah memberikan Pelayanan Yang Terbaik. Semoga Kedepannya Semakin Sukses
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        </div>
                    </div>
                    </div>


    <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                        <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                        <h3>Budi Setiawan</h3>
                        <h4>Pengusaha</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Pelayanan RSIA Miriam Memiliki Keunggulan Dimana RS Belum Memiliki Hal Tersebut.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        </div>
                    </div>
                    </div>


    </div>
                <div class="swiper-pagination"></div>
                </div>

            </div>
            </section>


    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
        <div class="container">

            <div class="section-title">
                <h2>Gallery</h2>
                <p></p>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row g-0">

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="assets/img/gallery/DSC00606.jpg" class="galelry-lightbox">
                            <img src="assets/img/gallery/DSC00606.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="assets/img/gallery/DSC00838.jpg" class="galelry-lightbox">
                            <img src="assets/img/gallery/DSC00838.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="assets/img/gallery/DSC00774.jpg" class="galelry-lightbox">
                            <img src="assets/img/gallery/DSC00774.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="assets/img/gallery/DSC09842.jpg" class="galelry-lightbox">
                            <img src="assets/img/gallery/DSC09842.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="assets/img/gallery/DSC09916.jpg" class="galelry-lightbox">
                            <img src="assets/img/gallery/DSC09916.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="assets/img/gallery/DSC09924.jpg" class="galelry-lightbox">
                            <img src="assets/img/gallery/DSC09924.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="assets/img/gallery/DSC00614.jpg" class="galelry-lightbox">
                            <img src="assets/img/gallery/DSC00614.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="assets/img/gallery/DSC00628.jpg" class="galelry-lightbox">
                            <img src="assets/img/gallery/DSC00628.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="assets/img/gallery/gallery-3.jpg" class="galelry-lightbox">
                            <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="assets/img/gallery/DSC00654.jpg" class="galelry-lightbox">
                            <img src="assets/img/gallery/DSC00654.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="assets/img/gallery/DSC03793.jpg" class="galelry-lightbox">
                            <img src="assets/img/gallery/DSC03793.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="assets/img/gallery/DSC00664.jpg" class="galelry-lightbox">
                            <img src="assets/img/gallery/DSC00664.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="assets/img/gallery/DSC00674.jpg" class="galelry-lightbox">
                            <img src="assets/img/gallery/DSC00674.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="assets/img/gallery/DSC00761.jpg" class="galelry-lightbox">
                            <img src="assets/img/gallery/DSC00761.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="assets/img/gallery/DSC00882.jpg" class="galelry-lightbox">
                            <img src="assets/img/gallery/DSC00882.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="assets/img/gallery/DSC00749.jpg" class="galelry-lightbox">
                            <img src="assets/img/gallery/DSC00749.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                <p></p>
            </div>
        </div>

        <div>
            <iframe style="border:0; width: 100%; height: 350px;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.6466202866686!2d110.83782431145596!3d-6.812765993156417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70c5ed3de92911%3A0xfc8abbaa3daa3309!2sRSIA%20Miriam%20Kudus!5e0!3m2!1sid!2sid!4v1697766067229!5m2!1sid!2sid"
                width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="container">
            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Lokasi:</h4>
                            <p>Jl. Ahmad Yani 58 Kudus Jawa Tengah 59317</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>sdm.rsiamiriam@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Telfon:</h4>
                            <p>+62 291 437047</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Nama" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject"
                                placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Pesan" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Kirim Pesan</button></div>
                    </form>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->
@endsection
