<x-layouts.root-layout>

    @slot('page_description')
    <meta name="description" content="EICS Group of Companies provides integrated design and engineering consultancy services for Iron & Steel plants in India. Founded by Mr. S. N. Swamy in 1997, EICS specializes in project planning, design, and detailed engineering from concept to commissioning for projects like Sponge Iron plants, Steel Melting Shops, Power Plants, Blast Furnaces, Rolling Mills, and more. With a team of 200+ professionals, EICS leverages state-of-the-art technologies and the latest trends to deliver customized solutions for every project.">
    @endslot

    <x-includes.header/>

            <!--<< Breadcrumb Section Start >>-->
            <div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{ asset("img/hero/breadcrumb-bg.jpg") }}');">
                <div class="mask-shape">
                    <img src="{{ asset("img/mask-shape.png") }}" alt="shape-img">
                </div>
                <div class="container">
                    <div class="page-heading">
                        <h1>Quality Policy</h1>
                        <ul class="breadcrumb-items">
                            <li>
                                <a href="{{ route("home") }}">
                                Home Page
                                </a>
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right"></i>
                            </li>
                            <li>
                                about us
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right"></i>
                            </li>
                            <li>
                                Quality Policy
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        <!-- About Section Start -->
        <section class="about-section fix section-padding">
            <div class="arrow-shape">
                <img src="{{ asset("img/arrow.png") }}" alt="shape-img">
            </div>
            <div class="container">
                <div class="about-wrapper-2">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="about-image">
                                <img src="{{ asset("documents/cetificate.jpg") }}" alt="cetificate">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 mt-5 mt-lg-0">
                            <div class="about-content">
                                <div class="section-title">
                                    <span class="wow fadeInUp" data-wow-delay=".3s">Quality Policy</span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".5s">
                                        EICS is an ISO 9001:2015 Certified Organization in accordance with BUREAU VERITAS certification procedures.
                                    </h2>
                                </div>
                                <p class="mt-4 mt-md-0 wow fadeInUp" data-wow-delay=".7s">
                                    EICS is dedicated to continual improvement of all applicable processes and services to meet the needs and expectations of the interested parties, by fully complying with requirements of the Quality Management System.
                                    Continual Improvement is the motto of our company and is the responsibility of all employees.
                                </p>
                                <p class="mt-3 wow fadeInUp" data-wow-delay=".8s">
                                    Our success in realizing these quality goals will be evident from the satisfaction of our customer through staff development and mutual beneficial relation management of the interested parties.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>






    <x-includes.footer/>

    

</x-layouts.root-layout>