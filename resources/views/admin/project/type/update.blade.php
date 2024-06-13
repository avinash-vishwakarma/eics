<x-layouts.admin-includes-layout>
    <main class="main-content">
        <div class="container-fluid">

            <div class="row my-4">
                <div class="col-lg-6">
                    <div class="card card-Vertical card-default card-md mb-4">
                      <div class="card-header">
                        <h6>Update Project Type</h6>
                      </div>
                      <div class="card-body pb-md-30">
                          <div class="Vertical-form">
                            <form action="{{ route("admin.project.type.update",$type->id) }}" method="POST" enctype="multipart/form-data">
                              @csrf
                              @method("PUT")
                              <div class="form-group">
                                <label
                                  for="name"
                                  class="color-dark fs-14 fw-500 align-center mb-10"
                                  >Name <strong> * </strong></label
                                >
                                <input
                                  type="text"
                                  class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                  id="name"
                                  name="name"
                                  value="{{ $type->name }}"
                                />
                              </div>
                              <div class="layout-button mt-25">
                                <button
                                  type="submit"
                                  class="btn btn-primary btn-default btn-squared px-30"
                                  id="addServiceBtn"
                                >
                                  Update
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