@props(['projects'])
<!-- Project Section Start -->
                <section class="project-section fix section-padding pb-0 mt-30" style="margin-bottom: 30px;">
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
                                                <a href="{{ route("projects.featured") }}" class="theme-btn-2">
                                                    All Featured Projects
                                                    <span class="shape-img">
                                                        <img src="{{asset("img/arrow-shape.png")}}" alt="shape-img">
                                                    </span>
                                                </a>
                                            </div>
                                       </div>
                                    </div>
                                    <div class="swiper project-slider">
                                        <div class="swiper-wrapper">
                                            @foreach ($projects as $project)
                                            <x-home.project-slide :project="$project"/>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>