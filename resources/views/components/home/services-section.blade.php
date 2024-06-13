@props(['services'])

<!-- Service Section Start -->
<section class="service-section fix section-padding">
    <div class="container">
        <div class="section-title text-center mb-4 mt-md-0">
            <span class="wow fadeInUp">Our Services</span>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                provides the best service for <br> sustainable progress
            </h2>
        </div>
        <div class="row g-4">
            @foreach ($services as $service)
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="service-box-items">
                    <div class="content">
                        <h3>
                            <a href="service-details.html">
                                {{ $service->title }}
                            </a>
                        </h3>
                        <p>
                            {{ $service->shortDesc }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>