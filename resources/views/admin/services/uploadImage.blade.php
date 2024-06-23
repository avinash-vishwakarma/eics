<x-layouts.admin-includes-layout>

    <x-slot name="cssSlot">
        <link rel="stylesheet" href="{{ asset("/admin/css/cropper.min.css") }}">
    </x-slot>

    <main class="main-content">
      <form action="{{ route("admin.services.save.img",$service_id) }}" class="d-none" id="uploadImageForm">
        @csrf
        @method("PATCH")
      </form>


      <div class="modal-info-success modal fade" id="alertModal" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-info" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <div class="modal-info-body d-flex">
                <div class="modal-info-icon success">
                </div>
                <div class="modal-info-text">
                    <p id="modal-text"></p>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button button type="button" class="btn btn-primary btn-sm" data-bs-dismiss="modal">Ok</button>
            </div>
          </div>
        </div>
        </div>

      <div class="modal fade bd-example-modal-lg" id="crop-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content modal-bg-white ">
            <div class="modal-header">
            <h6 class="modal-title">Basic title</h6>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="svg replaced-svg"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line><!-- Code injected by live-server -->
    
            </svg>
            </button>
            </div>
            <div class="modal-body position-relative" >
              <div class="w-100">
                <img src="" alt="" id="crop_preview" class="d-block" style="max-width: 100%;">
              </div>
            </div>
            <div class="modal-footer">
            <button type="button" id="cropBtn" class="btn btn-primary btn-sm">Crop & Upload</button>
            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
            </div>
            </div>
        </div>
      </div>


        <div class="container-fluid">
            <div class="row my-4">
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-body">
                      <div class="custom-file">
                        <input class="form-control custom-file-input" type="file" id="updateThumbnailInput">
                        <label class="custom-file-label ps-15" for="updateThumbnailInput">Upload Service Thumbnail</label>
                      </div>
                    </div>
                  </div>
                </div>
            </div>

            <div class="row">
              @if ($image)
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h6>Current Service Thumbnail</h6>
                  </div>
                  <div class="card-body">
                    <img src="{{ asset("img/service/".$image) }}" alt="" class="w-100">
                  </div>
                </div>
              </div>
              @endif
            </div>

        </div>
      </main>


      <x-slot name="jsSlot">
        <script src="{{ asset("/admin/js/cropper.min.js") }}"></script>
        <script src="{{ asset("/admin/js/uploadServiceImage.js") }}"></script>
    </x-slot>

</x-layouts.admin-includes-layout>