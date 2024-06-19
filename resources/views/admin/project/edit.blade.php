<x-layouts.admin-includes-layout>
  <main class="main-content">
      <div class="container-fluid">
          <div class="row mt-4">
              <div class="col-lg-2"></div>
              <div class="col-lg-8">
                  <div class="card card-Vertical card-default card-md mb-4">
                    <div class="card-header d-flex justify-content-between">
                      <h6>Update Project</h6>
                      <a href="{{ route("admin.project.img.addUpdate",$project->id) }}" class="btn btn-success btn-default btn-squared btn-transparent-success "><iconify-icon icon="hugeicons:image-upload"></iconify-icon> Update Image</a>
                    </div>
                    <div class="card-body pb-md-30">
                        <div class="Vertical-form">
                          <form action="{{ route("admin.project.update",$project->id) }}" method="POST" enctype="multipart/form-data" id="addServiceForm">
                            @csrf


                            <div class="mb-4">
                              <div class="dropdown dropdown-click">
                                  <div class="btn-group dropleft">
                                    <button type="button" class="btn btn-outline-lighten btn-sm">
                                      {{ $selectedType ? $selectedType->name : $project->type->name }}
                                    </button>
                                    <button
                                      type="button"
                                      class="btn btn-outline-lighten btn-sm dropdown-toggle-split"
                                      data-bs-toggle="dropdown"
                                      aria-haspopup="true"
                                      aria-expanded="false"
                                    >
                                    <iconify-icon icon="ph:dots-three"></iconify-icon>
                                    </button>
                                    <div class="dropdown-default dropdown-menu">

                                      @foreach ($types as $type)
                                      <a class="dropdown-item" href="{{ route("admin.project.create",["type"=>$type->id]) }}">{{ $type->name }}</a>
                                      @endforeach
                                    </div>
                                  </div>
                              </div>

                              @if ($sections)
                              <div class="dropdown dropdown-click">
                                  <div class="btn-group dropleft">
                                    <button type="button" class="btn btn-outline-lighten btn-sm">
                                      {{ $selectedSection ? $selectedSection->name : $project->section->name }}
                                    </button>
                                    <button
                                      type="button"
                                      class="btn btn-outline-lighten btn-sm dropdown-toggle-split"
                                      data-bs-toggle="dropdown"
                                      aria-haspopup="true"
                                      aria-expanded="false"
                                    >
                                    <iconify-icon icon="ph:dots-three"></iconify-icon>
                                    </button>
                                    <div class="dropdown-default dropdown-menu">

                                      @foreach ($sections as $section)
                                      <a class="dropdown-item" href="{{ route("admin.project.create",["type"=>$selectedType->id,"section"=>$section->id]) }}">{{ $section->name }}</a>
                                      @endforeach
                                    </div>
                                  </div>
                              </div>
                              @endif
                          </div>

                            <div class="form-group mb-25">
                              <label class="mb-2">Project Type <strong class="text-danger">*</strong></label>
                                      <div class="d-flex">
                                          <div class="radio-theme-default custom-radio">
                                              <input
                                              class="radio"
                                              type="radio"
                                              name="featured"
                                              value="true"
                                              id="featured_radio"
                                              {{ $project->featured ? "checked" : "" }}
                                              />
                                              <label for="featured_radio">
                                                  <span class="radio-text">Featured</span>
                                              </label>
                                          </div>
                                          <div class="radio-theme-default custom-radio mx-4">
                                              <input
                                              class="radio"
                                              type="radio"
                                              name="featured"
                                              value="false"
                                              id="Noraml_Radio"   
                                              {{ !$project->featured ? "checked" : "" }}

                                              />
                                              <label for="Noraml_Radio">
                                                  <span class="radio-text">Normal</span>
                                              </label>
                                          </div>
                                      </div>
                              </div>
                          
                              
                              @if ($selectedSection)
                                  <input type="hidden" name="section_id" value="{{ $selectedSection->id }}">
                              @endif


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
                                value="{{ $project->title }}"
                              />
                            </div>
                            <div class="form-group">
                                <label for="shortDesc" class="color-dark fs-14 fw-500 align-center mb-10">Short Desccription <strong>*</strong></label>
                                <textarea class="form-control" id="shortDesc" rows="3" name="shortDesc">{{ $project->description }}</textarea>
                            </div>

                            <div class="form-group">
                              <label
                                for="start_date"
                                class="color-dark fs-14 fw-500 align-center mb-10"
                                >Starting Date</label
                              >
                              <input
                                type="text"
                                class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                id="start_date"
                                name="start_date"
                                value="{{ $project->starting_date }}"
                              />
                            </div>

                            <div class="form-group">
                              <label
                                for="end_date"
                                class="color-dark fs-14 fw-500 align-center mb-10"
                                >Ending Date ( or On Going )</label
                              >
                              <input
                                type="text"
                                class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                id="end_date"
                                name="end_date"
                                value="{{ $project->completion_date }}"

                              />
                            </div>

                            <div class="form-group">
                              <label
                                for="client_name"
                                class="color-dark fs-14 fw-500 align-center mb-10"
                                >Client Name</label
                              >
                              <input
                                type="text"
                                class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                id="client_name"
                                name="client_name"
                                value="{{ $project->client_name }}"
                              />
                            </div>

                            <div class="form-group">
                              <label
                                for="client_url"
                                class="color-dark fs-14 fw-500 align-center mb-10"
                                >Client Url</label
                              >
                              <input
                                type="text"
                                class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                id="client_url"
                                name="client_url"
                                value="{{ $project->client_url }}"
                              />
                            </div>

                            <div class="form-group">
                              <label
                                for="location"
                                class="color-dark fs-14 fw-500 align-center mb-10"
                                >Project Location</label
                              >
                              <input
                                type="text"
                                class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                id="location"
                                name="location"
                                value="{{ $project->location }}"
                              />
                            </div>


                            <div class="form-group">
                              <label for="shortDesc" class="color-dark fs-14 fw-500 align-center mb-10">Full Description <strong>*</strong></label>
                              <div class="mailCompose-form-content">
                                <div class="form-group">
                                  <textarea
                                    name="full_description"
                                    id="mail-reply-message"
                                    class="form-control-lg"
                                    placeholder="Type your message..."
                                  ></textarea>
                                </div>
                              </div>
                            </div>

                            <div class="layout-button mt-25">
                              <button
                                type="submit"
                                class="btn btn-primary btn-default btn-squared px-30"
                                id="addServiceBtn"
                              >
                                Update project
                              </button>
                            </div>
                          </form>
                        </div>
                    </div>
                  </div>
              </div>
              <div class="col-lg-2"></div>
          </div>
        </div>
    </main>


    <x-slot name="jsSlot">
      <script>
                $("#mail-reply-message").trumbowyg(
        "html","{!! $project->full_description !!}"
        );
      </script>
    </x-slot>

</x-layouts.admin-includes-layout>