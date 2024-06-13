<x-layouts.admin-includes-layout>
    <main class="main-content">
        <div class="container-fluid">
            <div class="row mt-4">
                <div class="col-lg-6">
                    <div class="card card-Vertical card-default card-md mb-4">
                      <div class="card-header">
                        <h6>Add new service</h6>
                      </div>
                      <div class="card-body pb-md-30">
                        <div id="creatingSpinner" class="d-none">
                          <div class="alert alert-info" role="alert">
                            <div class="alert-content d-flex">
                              <div class="dm-spin-dots spin-md">
                                <span class="spin-dot badge-dot dot-primary"></span>
                                <span class="spin-dot badge-dot dot-primary"></span>
                                <span class="spin-dot badge-dot dot-primary"></span>
                                <span class="spin-dot badge-dot dot-primary"></span>
                              </div>
                              <p class="mx-2">Creating Service...</p>
                            </div>
                          </div>
                        </div>
                          <div class="Vertical-form">
                            <form action="{{ route("admin.services.store") }}" method="POST" enctype="multipart/form-data" id="addServiceForm">
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
                                />
                              </div>
                              <div class="form-group">
                                  <label for="shortDesc" class="color-dark fs-14 fw-500 align-center mb-10">Short Desccription</label>
                                  <textarea class="form-control" id="shortDesc" rows="3" name="shortDesc"></textarea>
                              </div>
                              <div class="layout-button mt-25">
                                <button
                                  type="submit"
                                  class="btn btn-primary btn-default btn-squared px-30"
                                  id="addServiceBtn"
                                >
                                  Add Service
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
                            <img src="" class="w-50" alt="" id="thumbnailPreview">
                        </div>
                    </div>
                </div>
            </div>
          </div>
      </main>


      @slot('jsSlot')
          <script src="{{ asset("admin/js/addService.js") }}"></script>
      @endslot

</x-layouts.admin-includes-layout>