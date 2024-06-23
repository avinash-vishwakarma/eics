<x-layouts.admin-includes-layout>
    <main class="main-content">
        <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="breadcrumb-main">
                  <h4 class="text-capitalize breadcrumb-title">{{ $featured ? "All Featured Services" : "All Services" }}</h4>
                  <div class="breadcrumb-action justify-content-center flex-wrap">
                    <a href="{{ route("admin.services.create") }}" class="btn btn-primary"> <iconify-icon icon="material-symbols:add"></iconify-icon> Add New Service</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">

              <div class="col-lg-12 mb-4">
                <x-admin.form.alert/>
              </div>

              @foreach ($services as $service)
              <div class="col-md-4">
                <div class="card mb-4">
                  <div class="gc">
                      <div class="gc__img">
                        <img
                            src="{{ asset("img/service/".$service->thumbnail) }}"
                            alt="img"
                            class="w-100 radius-xl"
                        />
                      </div>
                        <div class="card-body px-25 py-20">
                          <div class="gc__title">
                              <p class="mb-2">{{ $service->title }}

                                @if ($service->featured)
                              <span class="badge badge-round badge-info badge-lg mb-2">
                                Featured
                              </span>
                              @endif
                              </p>
                              
                              <div class="d-flex">
                                <a href="{{ route("admin.services.edit",$service->id) }}" class="btn btn-success btn-xs">Update</a>

                                <form action="{{ route("admin.services.destroy",$service->id) }}" method="post">
                                  @method("DELETE")
                                  @csrf
                                  <button class="btn btn-danger btn-xs mx-2">Delete</button>
                                </form>

                              </div>
                          </div>
                        </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
        </div>
    </main>

</x-layouts.admin-includes-layout>