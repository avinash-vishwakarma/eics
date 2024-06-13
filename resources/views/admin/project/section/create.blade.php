<x-layouts.admin-includes-layout>
    <main class="main-content">
        <div class="container-fluid">

            <div class="row my-4">
                <div class="col-lg-6">
                    <div class="card card-Vertical card-default card-md mb-4">
                      <div class="card-header">
                        @if ($section)
                        <h6>Update Section : {{ $section->name }}</h6>
                        @else
                        <h6>Create Project Section</h6>
                        @endif
                      </div>
                      <div class="card-body pb-md-30">
                          <div class="Vertical-form">

                            @if ($section)
                            <form action="{{ route("admin.project.section.update",$section->id) }}" method="POST" enctype="multipart/form-data">
                            @else
                            <form action="{{ route("admin.project.section.store") }}" method="POST" enctype="multipart/form-data">
                            @endif

                              @csrf
                              @if ($section)
                                  @method("PUT")
                              @endif

                              <div class="form-group">
                                <label
                                  for="exampleFormControlSelect1"
                                  class="il-gray fs-14 fw-500 align-center mb-10"
                                  >Select Project Type</label>
                                <select
                                  class="form-control px-15"
                                  id="exampleFormControlSelect1"
                                  name="type"
                                >
                                  @foreach ($types as $type)
                                  @if ($section)
                                    <option value="{{ $type->id }}" {{ $section->type->id == $type->id ? "selected" : "" }}>{{ $type->name }}</option>  
                                      @else
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                  @endif
                                  @endforeach
                                </select>
                              </div>

                              <div class="form-group">
                                <label
                                  for="title"
                                  class="color-dark fs-14 fw-500 align-center mb-10"
                                  >Title <strong> * </strong></label
                                >
                                <input
                                  type="text"
                                  class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                  id="title"
                                  name="title"

                                  @if ($section)
                                      value="{{ $section->name }}"
                                  @endif

                                />
                              </div>
                              <div class="layout-button mt-25">
                                <button
                                  type="submit"
                                  class="btn btn-primary btn-default btn-squared px-30"
                                  id="addServiceBtn"
                                >
                                  {{ $section ? "Update" : "Create" }}
                                </button>
                              </div>
                            </form>
                          </div>
                      </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

</x-layouts.admin-includes-layout>