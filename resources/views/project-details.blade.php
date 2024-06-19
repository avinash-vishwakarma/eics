<x-layouts.root-layout>

    @slot('page_description')
    <meta name="description" content="EICS Group of Companies provides integrated design and engineering consultancy services for Iron & Steel plants in India. Founded by Mr. S. N. Swamy in 1997, EICS specializes in project planning, design, and detailed engineering from concept to commissioning for projects like Sponge Iron plants, Steel Melting Shops, Power Plants, Blast Furnaces, Rolling Mills, and more. With a team of 200+ professionals, EICS leverages state-of-the-art technologies and the latest trends to deliver customized solutions for every project.">
    @endslot

    <x-includes.header/>

    <x-project.bread-crum :project="$project" />

        <!-- Project Details Section Start -->
        <section class="details-area fix section-padding">
            <div class="container">
               <div class="project-details-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="details-image">
                                <img src="{{ asset("img/project/".$project->images?->main) }}" alt="project image">
                            </div>
                            <div class="project-details-content">
                                <h2>Short Description</h2>
                                <p class="mt-3">
                                    {{ $project->description }}
                                </p>
                                <ul class="project-date py-4 bor-top bor-bottom mt-5 mb-5">

                                    @if ($project->starting_date)
                                    <li><span>Starting Date:</span> {{ $project->starting_date }}</li>
                                    @endif

                                    @if ($project->completion_date)
                                    <li><span>Completion Date:</span> {{ $project->completion_date }}</li>
                                    @endif

                                    @if ($project->client_name)
                                        @if ($project->client_url)
                                            <li><span>Client:</span> <a href="{{ $project->client_url }}">{{ $project->client_name }}</a></li>
                                            @else
                                            <li><span>Client:</span> {{ $project->client_name }}</li>
                                        @endif
                                    @endif

                                    @if ($project->location)                                        
                                    <li><span>Location:</span> {{ $project->location }}</li>
                                    @endif
                                </ul>
                                
                                <h2>Project Full Details</h2>
                                {!! $project->full_description !!}
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </section>


    <x-includes.footer/>

    

</x-layouts.root-layout>