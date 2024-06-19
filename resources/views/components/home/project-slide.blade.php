@props(['project'])

<div class="swiper-slide">
    <div class="project-image bg-cover" style="background-image: url('{{asset("img/project/".$project->images?->thumbnail)}}');">
        <a href="{{ route("project",$project->slug) }}" class="post-box">
            <i class="fa-solid fa-location-arrow"></i>
        </a>
        <div class="project-content">
            <h4>
                <a href="{{ route("project",$project->slug) }}">
                    {{ $project->title }}
                </a>
            </h4>
            @if ($project->location)
            <p class="text-light"><strong>Location :</strong> {{ $project->location }}</p>
            @endif
        </div>
    </div>
</div>