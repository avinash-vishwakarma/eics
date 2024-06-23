<x-layouts.root-layout>

    @slot('page_description')
    <meta name="description" content="EICS Group of Companies provides integrated design and engineering consultancy services for Iron & Steel plants in India. Founded by Mr. S. N. Swamy in 1997, EICS specializes in project planning, design, and detailed engineering from concept to commissioning for projects like Sponge Iron plants, Steel Melting Shops, Power Plants, Blast Furnaces, Rolling Mills, and more. With a team of 200+ professionals, EICS leverages state-of-the-art technologies and the latest trends to deliver customized solutions for every project.">
    @endslot

    <x-includes.header/>

            <!--<< Breadcrumb Section Start >>-->
            <div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{ asset("img/about/keypersons.jpg") }}');">
                <div class="mask-shape">
                    <img src="{{ asset("img/mask-shape.png") }}" alt="shape-img">
                </div>
                <div class="container">
                    <div class="page-heading">
                        <h1>Key persons</h1>
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
                                Key persons
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


        <!-- Team Section Start -->
        <section class="team-section fix section-padding">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="single-team-items">
                            <div class="team-image">
                                <img src="{{ asset("img/team/02.jpg") }}" alt="team-img">
                                <div class="team-content">
                                    <p>
                                        “Lorem ipsum dolor sit amet <br> consectetur adipiscing elit <br> Ut et massa mi”
                                    </p>
                                    <div class="icon">
                                        <i class="fa-solid fa-phone-volume me-2"></i>
                                        <a href="tel:+912659302003">+91 2659 302 003</a>
                                    </div>
                                    <div class="content">
                                        <h4>
                                            Mr. S N Swamy
                                        </h4>
                                        <span>Chairman & Managing Director</span>
                                    </div>
                                </div>
                                <div class="social-icon">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="single-team-items">
                            <div class="team-image">
                                <img src="{{ asset("img/team/03.jpg") }}" alt="team-img">
                                <div class="team-content">
                                    <p>
                                        “Lorem ipsum dolor sit amet <br> consectetur adipiscing elit <br> Ut et massa mi”
                                    </p>
                                    <div class="icon">
                                        <i class="fa-solid fa-phone-volume me-2"></i>
                                        <a href="tel:+912659302003">+91 2659 302 003</a>
                                    </div>
                                    <div class="content">
                                        <h4>
                                            Mrs. Hemalatha N Swamy
                                        </h4>
                                        <span>Jt. Managing Director</span>
                                    </div>
                                </div>
                                <div class="social-icon">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="single-team-items">
                            <div class="team-image">
                                <img src="{{ asset("img/team/04.jpg") }}" alt="team-img">
                                <div class="team-content">
                                    <p>
                                        “Lorem ipsum dolor sit amet <br> consectetur adipiscing elit <br> Ut et massa mi”
                                    </p>
                                    <div class="icon">
                                        <i class="fa-solid fa-phone-volume me-2"></i>
                                        <a href="tel:+912659302003">+91 2659 302 003</a>
                                    </div>
                                    <div class="content">
                                        <h4>
                                           <a href="team-details.html">Mr. T N Varadarajan</a>
                                        </h4>
                                        <span> 	Technical Director</span>
                                    </div>
                                </div>
                                <div class="social-icon">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="single-team-items">
                            <div class="team-image">
                                <img src="{{ asset("img/team/05.jpg") }}" alt="team-img">
                                <div class="team-content">
                                    <p>
                                        “Lorem ipsum dolor sit amet <br> consectetur adipiscing elit <br> Ut et massa mi”
                                    </p>
                                    <div class="icon">
                                        <i class="fa-solid fa-phone-volume me-2"></i>
                                        <a href="tel:+912659302003">+91 2659 302 003</a>
                                    </div>
                                    <div class="content">
                                        <h4>
                                            Mr. K S Reddy
                                        </h4>
                                        <span>Sr. G.M (Engineering)</span>
                                    </div>
                                </div>
                                <div class="social-icon">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="single-team-items">
                            <div class="team-image">
                                <img src="{{ asset("img/team/06.jpg") }}" alt="team-img">
                                <div class="team-content">
                                    <p>
                                        “Lorem ipsum dolor sit amet <br> consectetur adipiscing elit <br> Ut et massa mi”
                                    </p>
                                    <div class="icon">
                                        <i class="fa-solid fa-phone-volume me-2"></i>
                                        <a href="tel:+912659302003">+91 2659 302 003</a>
                                    </div>
                                    <div class="content">
                                        <h4>
                                            Mr. Atanu Das
                                        </h4>
                                        <span> 	Deputy General Manager</span>
                                    </div>
                                </div>
                                <div class="social-icon">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="single-team-items">
                            <div class="team-image">
                                <img src="{{ asset("img/team/07.jpg") }}" alt="team-img">
                                <div class="team-content">
                                    <p>
                                        “Lorem ipsum dolor sit amet <br> consectetur adipiscing elit <br> Ut et massa mi”
                                    </p>
                                    <div class="icon">
                                        <i class="fa-solid fa-phone-volume me-2"></i>
                                        <a href="tel:+912659302003">+91 2659 302 003</a>
                                    </div>
                                    <div class="content">
                                        <h4>
                                            Mr. Logesh kumar A
                                        </h4>
                                        <span>General Manager – Project</span>
                                    </div>
                                </div>
                                <div class="social-icon">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>





    <x-includes.footer/>

    

</x-layouts.root-layout>