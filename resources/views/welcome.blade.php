<x-layouts.root-layout>

    @slot('page_description')
    <meta name="description" content="EICS Group of Companies provides integrated design and engineering consultancy services for Iron & Steel plants in India. Founded by Mr. S. N. Swamy in 1997, EICS specializes in project planning, design, and detailed engineering from concept to commissioning for projects like Sponge Iron plants, Steel Melting Shops, Power Plants, Blast Furnaces, Rolling Mills, and more. With a team of 200+ professionals, EICS leverages state-of-the-art technologies and the latest trends to deliver customized solutions for every project.">
    @endslot

    <x-includes.header/>

    <x-home.hero-section/>

    <x-home.about-section/>
    <x-home.services-section :services="$services"/>




                
        
                <!-- Project Section Start -->
                <section class="project-section fix section-padding pb-0 mt-30">
                    <div class="container">
                        <div class="line-area">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="project-wrapper pb-0">
                            <div class="swiper-dot-2">
                                <div class="dot-3"></div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-xl-4 col-lg-6">
                                    <div class="section-title">
                                        <span class="wow fadeInUp" data-wow-delay=".3s">OUR COMPLETED PROJECTS</span>
                                        <h2 class="wow fadeInUp" data-wow-delay=".5s">Successfully completed projects for our clients</h2>
                                    </div>
                                </div>
                                <div class="col-xl-8 mt-3 mt-xl-0">
                                    <div class="project-header">
                                       <div class="row">
                                            <div class="col-md-8">
                                                <p class="wow fadeInUp" data-wow-delay=".3s">
                                                    We have facility to produce advance work various industrial applications based on specially developed technol-ogy. We are also ready to developement by according to users changing needs. Infrastructure related installation projects.
                                                </p>
                                            </div>
                                            <div class="col-md-4 text-end ps-0 wow fadeInUp" data-wow-delay=".5s">
                                                <a href="project.html" class="theme-btn-2">
                                                    View All Projects
                                                    <span class="shape-img">
                                                        <img src="{{asset("img/arrow-shape.png")}}" alt="shape-img">
                                                    </span>
                                                </a>
                                            </div>
                                       </div>
                                    </div>
                                    <div class="swiper project-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="project-image bg-cover" style="background-image: url('{{asset("img/project/01.jpg")}}');">
                                                    <a href="project-details.html" class="post-box">
                                                        <i class="fa-solid fa-location-arrow"></i>
                                                    </a>
                                                    <div class="project-content">
                                                        <h4>
                                                            <a href="project-details.html">
                                                                Road map Engineering
                                                            </a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="project-image bg-cover" style="background-image: url('{{asset("img/project/02.jpg")}}');">
                                                    <a href="project-details.html" class="post-box">
                                                        <i class="fa-solid fa-location-arrow"></i>
                                                    </a>
                                                    <div class="project-content">
                                                        <h4>
                                                            <a href="project-details.html">
                                                                Road map Engineering
                                                            </a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="project-image bg-cover" style="background-image: url('{{asset("img/project/03.jpg")}}');">
                                                    <a href="project-details.html" class="post-box">
                                                        <i class="fa-solid fa-location-arrow"></i>
                                                    </a>
                                                    <div class="project-content">
                                                        <h4>
                                                            <a href="project-details.html">
                                                                Road map Engineering
                                                            </a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

    <x-includes.footer/>

    

</x-layouts.root-layout>