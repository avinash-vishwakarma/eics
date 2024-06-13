<x-layouts.admin-includes-layout>
  <main class="main-content">
      <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">Project Sections</h4>
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
                      <a class="dropdown-item" href="{{ route("admin.project.section.index",["type"=>$type->id]) }}">{{ $type->name }}</a>
                  @endforeach
                  </div>
                </div>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                  <a href="{{ route("admin.project.section.create") }}" class="btn btn-primary"> <iconify-icon icon="material-symbols:add"></iconify-icon> Create Section</a>
                </div>
              </div>

            </div>
          </div>
          <div class="row">
            @if ($selectedType)
            @foreach ($selectedType->sections as $section)
            <div class="col-lg-4">
              <div class="card my-4">
                <div class="card-body">
                  <p>
                    <strong>Name :</strong> {{ $section->name }}
                  </p>
                  <div class="d-flex">
                    <a href="{{ route("admin.project.section.edit",$section->id) }}" class="btn btn-xs btn-success">Update</a>
                    <form action="{{ route('admin.project.section.destroy',$section->id) }}" method="POST">
                      @csrf
                      @method("DELETE")
                          <button class="btn btn-danger btn-xs mx-2">Delete</button>
                    </form>
                    <a href="" class="btn btn-xs btn-primary ">Projects</a>
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