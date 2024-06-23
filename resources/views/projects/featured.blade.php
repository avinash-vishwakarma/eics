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
                        <h1>Our Featured Projects</h1>
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
                                Projects
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right"></i>
                            </li>
                            <li>
                                Featured
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


        <!-- Project Section Start -->
        <section class="project-section-2 fix section-padding">
            <div class="container">
                <div class="project-wrapper pb-0 pt-0 my-4">

                    <h4 class="mb-4">
                        Our Featured Projects
                    </h4>

                    <div class="row g-4">
                        @foreach ($projects as $project)
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp " data-wow-delay=".5s">
                            <div class="project-image style-2 active bg-cover" style="background-image: url('{{ asset("img/project/".$project->images?->thumbnail) }}');">
                                <a href="{{ route("project",$project->slug) }}" class="post-box">
                                    <i class="fa-solid fa-location-arrow"></i>
                                </a>
                                <div class="project-content">
                                    <h4>
                                        <a href="project-details.html">
                                            {{ $project->title }}
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="page-nav-wrap pt-5 text-center wow fadeInUp" data-wow-delay=".3s">
                        {{  $projects->render("projects.paginatelinks")  }}
                    </div>
                </div>
            </div>
        </section>




    <x-includes.footer/>

    

</x-layouts.root-layout>