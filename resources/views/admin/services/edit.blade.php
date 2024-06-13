<x-layouts.admin-includes-layout>

  <x-slot name="cssSlot">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.0/css/line.css">
  </x-slot>

    <main class="main-content">
        <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="breadcrumb-main">
                  <div class="breadcrumb-action justify-content-center flex-wrap">
                    <a href="{{ route("admin.services.create") }}" class="btn btn-primary"> <iconify-icon icon="material-symbols:add"></iconify-icon> Add New Service</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card card-default card-md mb-4">
                      <div class="card-header">
                        <h6>Update Service Details</h6>
                      </div>
                      <div class="card-body">
                        <div id="creatingSpinner" class="d-none">
                          <div class="alert alert-info" role="alert">
                            <div class="alert-content d-flex">
                              <div class="dm-spin-dots spin-md">
                                <span class="spin-dot badge-dot dot-primary"></span>
                                <span class="spin-dot badge-dot dot-primary"></span>
                                <span class="spin-dot badge-dot dot-primary"></span>
                                <span class="spin-dot badge-dot dot-primary"></span>
                              </div>
                              <p class="mx-2">Updating Service...</p>
                            </div>
                          </div>
                        </div>
                        <div class="Vertical-form">

                        <form action="{{ route("admin.services.update",$service->id) }}" method="POST" id="addServiceForm">
                          <div class="form-group mb-25">
                            <label>Service Type</label>
                                    <div class="d-flex">
                                        <div class="radio-theme-default custom-radio">
                                            <input
                                            class="radio"
                                            type="radio"
                                            name="type"
                                            value="true"
                                            id="featured_radio"
                                            {{ $service->featured ?"checked":"" }}
                                            />
                                            <label for="featured_radio">
                                                <span class="radio-text">Featured</span>
                                            </label>
                                        </div>
                                        <div class="radio-theme-default custom-radio mx-4">
                                            <input
                                            class="radio"
                                            type="radio"
                                            name="type"
                                            value="false"
                                            id="Noraml_Radio"
                                            {{ $service->featured ?"":"checked" }}
  
                                            />
                                            <label for="Noraml_Radio">
                                                <span class="radio-text">Normal</span>
                                            </label>
                                        </div>
                                    </div>
                            </div>
  
                            @csrf
                          <div class="dm-upload mb-25">
                              <div
                                class="dm-upload-avatar media-import mb-25 dropzone-lg-s"
                              >
                                <label for="thumbnail" class="color-light mt-0 fs-15 d-flex flex-column align-items-center">
  
                                  <iconify-icon icon="material-symbols:upload-sharp" style="font-size:25px; "></iconify-icon>
                                  <span id="selected_file_name">Upload Thumbnail</span>
                                </label>
                              </div>
                              <div class="avatar-up">
                                <input
                                  id="thumbnail"
                                  type="file"
                                  name="thumbnail"
                                  class="upload-avatar-input"
                                  accept="image/*"
                                />
                              </div>
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
                              value="{{ $service->title }}"
                            />
                          </div>
                          <div class="form-group">
                              <label for="shortDesc" class="color-dark fs-14 fw-500 align-center mb-10">Short Desccription</label>
                              <textarea class="form-control" id="shortDesc" rows="3" name="shortDesc">{{ $service->shortDesc }}</textarea>
                          </div>
                          <div class="form-group">
                            <label for="shortDesc" class="color-dark fs-14 fw-500 align-center mb-10">Description</label>
                            <div class="mailCompose-form-content">
                              <div class="form-group">
                                <textarea
                                  name="description"
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
                              Update Service
                            </button>
                          </div>  
                        </form>  

                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card card-Vertical card-default card-md mb-4">
                        <div class="card-header">
                          <h6>Thumbnail Preview</h6>
                        </div>
                        <div class="card-body">
                            <img src="{{ asset("img/service/".$service->thumbnail) }}" class="w-50" alt="" id="thumbnailPreview">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <x-slot name="jsSlot">
      <script>
                $("#mail-reply-message").trumbowyg(
        "html","{!! $service->description !!}"
        );
      </script>
      <script src="{{ asset("admin/js/addService.js") }}"></script>
    </x-slot>


</x-layouts.admin-includes-layout>