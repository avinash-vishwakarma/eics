<x-layouts.admin-includes-layout>
    <main class="main-content">
        <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="breadcrumb-main">
                  <h4 class="text-capitalize breadcrumb-title">Title : {{ $project->title }}</h4>
                  <div class="breadcrumb-action justify-content-center flex-wrap">
                    <a href="{{ route("admin.project.edit",$project->id) }}" class="btn btn-info btn-rounded"> <iconify-icon icon="bx:edit"></iconify-icon> Edit</a>
                  </div>
                </div>
  
              </div>
              <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="gc__img">
                            <img src="{{ asset("img/project/".$project->thumbnail) }}" alt="img" class="w-75 radius-xl">
                        </div>
                    </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">

                        <div class="mb-4">
                            <h4 class="mb-4">Featured</h4>

                            @if ($project->featured)
                            <div class="badge badge-round badge-info badge-lg p-2"><iconify-icon icon="material-symbols:star"></iconify-icon> Featured Project</div>
                            @else
                            <div class="badge badge-round badge-primary badge-lg p-2">Normal Project</div>
                            @endif

                        </div>

                        <div class="mb-4">
                            <h4>Type</h4>
                            <p>{{ $project->type->name }}</p>
                        </div>

                        <div class="mb-4">
                            <h4>Section</h4>
                            <p>{{ $project->Section->name }}</p>
                        </div>

                        <div class="mb-4">
                            <h4>Client Name</h4>
                            <p>{{ $project->client_name }}</p>
                        </div>

                        <div class="mb-4">
                            <h4 class="mb-2">Client Website or link</h4>

                            @if ($project->client_url)
                            <a href="{{ $project->client_url }}">Click here to visit</a>
                            @else
                            <p>Not Found</p>
                            @endif

                        </div>
                    </div>
                </div>
              </div>

              <div class="col-lg-12 my-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <p><Strong>Starting Date :</Strong> {{$project->starting_date ?? "Not Found"}} </p>
                            </div>

                            <div class="col-lg-4">
                                <p><Strong>Completion Data :</Strong> {{$project->completion_date ?? "Not Found"}} </p>
                            </div>

                            <div class="col-lg-4">
                                <p><Strong>Location :</Strong> {{$project->location ?? "Not Found"}} </p>
                            </div>
                        </div>
                    </div>
                </div>
              </div>

              <div class="col-lg-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-4">Description</h4>
                        <p>
                            {{ $project->description }}
                        </p>
                    </div>
                </div>
              </div>

              <div class="col-lg-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-4">Full Details</h4>
                        <p>
                            {!! $project->full_description !!}
                        </p>
                    </div>
                </div>
              </div>

            </div>
        </div>
    </main>
  
  
  
  </x-layouts.admin-includes-layout>