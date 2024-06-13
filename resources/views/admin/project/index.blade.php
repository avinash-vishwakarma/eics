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
                                {{ $project->name }}
                            </div>
                        </div>
                    </div>
                @endforeach
              @endif
  
            </div>
        </div>
    </main>
  
  
  
  </x-layouts.admin-includes-layout>