        <!--<< Breadcrumb Section Start >>-->
        <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/hero/breadcrumb-bg.jpg');">
            <div class="mask-shape">
                <img src="assets/img/mask-shape.png" alt="shape-img">
            </div>
            <div class="container">
                <div class="page-heading">
                    <h1>Projects Details</h1>
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
                            {{ $project->title }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>