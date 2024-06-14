<x-layouts.admin-includes-layout>
    <main class="main-content">
        <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="breadcrumb-main">
                  <h4 class="text-capitalize breadcrumb-title">Projects</h4>

                  <div class="dropdown dropdown-hover">
                    <a class="btn-link">
                      {{ $selectedType ? $selectedType->name : "Select Project Type" }}
                      <img
                        src="{{ asset("admin/img/svg/chevron-down.svg") }}"
                        alt="chevron-down"
                        class="svg"
                      />
                    </a>
                    <div class="dropdown-default">
                    @foreach ($types as $type)
                        <a class="dropdown-item" href="{{ route("admin.project.index",["type"=>$type->id]) }}">{{ $type->name }}</a>
                    @endforeach
                    </div>
                  </div>

                  @if ($selectedType)
                    <div class="dropdown dropdown-hover">
                        <a class="btn-link">
                        {{ $selectedSection ? $selectedSection->name : "Select Project section" }}
                        <img
                            src="{{ asset("admin/img/svg/chevron-down.svg") }}"
                            alt="chevron-down"
                            class="svg"
                        />
                        </a>
                        <div class="dropdown-default">
                        @foreach ($sections as $section)
                            <a class="dropdown-item" href="{{ route("admin.project.index",["type"=>$selectedType->id,"section"=>$section->id]) }}">{{ $section->name }}</a>
                        @endforeach
                        </div>
                    </div>
                  @endif

                  <div class="breadcrumb-action justify-content-center flex-wrap">
                    <a href="{{ route("admin.project.create") }}" class="btn btn-primary"> <iconify-icon icon="material-symbols:add"></iconify-icon> Create Project</a>
                  </div>
                </div>
  
              </div>
            </div>
            <div class="row">
              @if ($projects)
                @foreach ($projects as $project)
                    <div class="col-lg-4">
                        <div class="card my-4">
                            <div class="card-body">
                                <div class="gc__img">
                                  <img src="{{ asset("img/project/".$project->thumbnail) }}" alt="img" class="w-100 radius-xl">
                                </div>
                                <h4 class="my-2">{{ $project->title }}</h4>
                                <p><strong>Location : </strong>{{ $project->location }}</p>
                                <div class="d-flex justify-content-between">
                                  <a href="{{ route("admin.project.show" ,$project->id) }}" class="btn btn-info btn-squared ">More Details ..</a>
                                  <div class="d-flex ">
                                    <a href="{{ route("admin.project.edit",$project->id) }}" class="btn btn-icon btn-success btn-squared "><iconify-icon style="font-size: 25px;" icon="material-symbols:update"></iconify-icon></a>
                                    <a href="" class="btn btn-icon btn-danger btn-squared  mx-2"><iconify-icon style="font-size: 25px;" icon="mdi:trash"></iconify-icon></a>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                @endforeach
              @endif
  
            </div>
        </div>
    </main>
  
  
  
  </x-layouts.admin-includes-layout>