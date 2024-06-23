<x-layouts.admin-includes-layout>
    <main class="main-content">
        <div class="container-fluid">
            <div class="row mt-4">
              <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="card card-Vertical card-default card-md mb-4">
                      <div class="card-header">
                        <h6>Add new service</h6>
                      </div>
                      <div class="card-body pb-md-30">

                        <x-admin.form.alert/>

                          <div class="Vertical-form">
                            <form action="{{ route("admin.services.store") }}" method="POST" enctype="multipart/form-data" id="addServiceForm">
                              @csrf
                              
                              <div class="form-group mb-25">
                                <label class="mb-2">Service Type <strong class="text-danger">*</strong></label>
                                        <div class="d-flex">
                                            <div class="radio-theme-default custom-radio">
                                                <input
                                                class="radio"
                                                type="radio"
                                                name="featured"
                                                value="true"
                                                id="featured_radio"
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
                                                />
                                                <label for="Noraml_Radio">
                                                    <span class="radio-text">Normal</span>
                                                </label>
                                            </div>
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
                                  value="{{ old("title") }}"
                                />
                              </div>
                              <div class="form-group">
                                  <label for="shortDesc" class="color-dark fs-14 fw-500 align-center mb-10">Short Desccription *</label>
                                  <textarea class="form-control" id="shortDesc" rows="3" name="shortDesc">{{ old("shortDesc") }}</textarea>
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
              <div class="col-lg-3"></div>
            </div>
          </div>
      </main>
</x-layouts.admin-includes-layout>