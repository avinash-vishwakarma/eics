<x-layouts.root-layout>

    @slot('page_description')
    <meta name="description" content="EICS Group of Companies provides integrated design and engineering consultancy services for Iron & Steel plants in India. Founded by Mr. S. N. Swamy in 1997, EICS specializes in project planning, design, and detailed engineering from concept to commissioning for projects like Sponge Iron plants, Steel Melting Shops, Power Plants, Blast Furnaces, Rolling Mills, and more. With a team of 200+ professionals, EICS leverages state-of-the-art technologies and the latest trends to deliver customized solutions for every project.">
    @endslot

    <x-includes.header/>

            <!--<< Breadcrumb Section Start >>-->
            <div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{ asset("img/about/about us.jpg") }}');">
                <div class="mask-shape">
                    <img src="{{ asset("img/mask-shape.png") }}" alt="shape-img">
                </div>
                <div class="container">
                    <div class="page-heading">
                        <h1>About us</h1>
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
                        </ul>
                    </div>
                </div>
            </div>

                    <!-- About Section Start -->
        <section class="about-section fix section-padding">
            <div class="container">
                <div class="about-wrapper-2">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="about-image style-2">
                                <img src="{{ asset("img/about/about_section.jpg") }}" alt="about-img">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 mt-5 mt-lg-0">
                            <div class="about-content">
                                <div class="section-title">
                                    <span class="wow fadeInUp">About The Group</span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                        We Are Here to Increase Your Knowledge With Experience
                                    </h2>
                                </div>
                                <p class="mt-4 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                    EICS – the consultancy organization founded by Mr. S. N. Swamy in 1997 for providing consulting engineering services for Iron & Steel plants in India. The company offers integrated design and engineering consultancy services from concept to commissioning for a wide range of projects like Sponge Iron plant, Steel Melting Shop, Power Plant, Blast Furnace, Rolling Mill, Ferro alloys and new technologies like Beneficiation, Pelletization, Sintering and Tunnel Kiln.
                                <p class="mt-2 wow fadeInUp" data-wow-delay=".7s">
                                    EICS specializes in project planning and appraisal, design and detailed engineering from green field to commissioning of the project. Over the years, EICS has built up a multidisciplinary team of about 200+ professionals with experience in various fields, fully abreast of state-of-the-art technologies and having an intimate understanding of the latest trends, combining creativity with initiative. EICS represents a unique combination of experience blended with talent, catering to the specific requirements of each project.
                                    EICS has its headquarters in Bilaspur, Chhattisgarh.
                                </p>

                                <p class="mt-2 wow fadeInUp" data-wow-delay=".7s">
                                    EICS also has an international presence in the form of its subsidiary company EICS International LLC based in Dubai, UAE which provides Designing, Engineering and Consultancy services for Solar Plants & Municipal Waste Management Plants. Additionally, it provides technical upgrade solutions in Steel and Cement industries in the MENA regions. Steel trading is one another avenue where the company holds a strong manifestation.
                                </p>

                                <p class="mt-2 wow fadeInUp" data-wow-delay=".7s">
                                    The organization has earned appreciation for its dedication and teamwork. Today, EICS name is synonymous with excellence in engineering consultancy services.
                                </p>


                                <p class="mt-2 wow fadeInUp" data-wow-delay=".7s">
                                    Following are the companies in group:
                                </p>

                                <ul class="wow fadeInUp" data-wow-delay=".8s">
                                    <li>EICS Technology Pvt. Ltd</li>
                                    <li>EICS Consultancy Pvt. Ltd</li>
                                    <li>EICS International LLC</li>
                                </ul>
                                <a href="{{ asset("documents/EICS Technology PVT.LTD Company Profile.pdf") }}" class="theme-btn-2 mt-5 wow fadeInUp" data-wow-delay=".9s" download="EICS Technology PVT.LTD Company Profile.pdf">
                        DOWNLOAD COMPANY PROFILE 
                                <span class="shape-img">
                                    <img src="{{ asset("img/arrow-shape.png") }}" alt="shape-img">
                                </span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="service-box-items">
                                <div class="icon">
                                    <img src="{{ asset("img/about/vision.svg") }}" alt="icon-img">
                                </div>
                                <div class="content">
                                    <h3>
                                            Our Vision
                                    </h3>
                                    <p>
                                        To be the preferred turnkey projects solution provider in the Asia and Africa continent, in the selected niche areas of Infrastructure Projects such as Iron Steel and Power, with focus on improvements in Quality, productivity, environment and safety.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="service-box-items">
                                <div class="icon">
                                    <img src="{{ asset("img/about/mission.svg") }}" alt="icon-img">
                                </div>
                                <div class="content">
                                    <h3>
                                            OUR MISSION
                                    </h3>
                                    <p>
                                        To be a knowledge driven, innovative and ethical business unit, striving to provide “The State of The Art” Turnkey project solutions and technologies in Iron, Steel, Power and other related Projects targeted to improve aspects of Quality, Productivity, environment and safety, in Infrastructure Projects.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




    <x-includes.footer/>

    

</x-layouts.root-layout>