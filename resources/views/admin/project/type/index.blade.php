<x-layouts.admin-includes-layout>
    <main class="main-content">
        <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="breadcrumb-main">
                  <h4 class="text-capitalize breadcrumb-title">All Project Types</h4>
                  <div class="breadcrumb-action justify-content-center flex-wrap">
                    <a href="{{ route("admin.project.type.create") }}" class="btn btn-primary"> <iconify-icon icon="material-symbols:add"></iconify-icon> Create new Type</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">

                <div class="col-lg-12 mb-4">
                    <x-admin.form.alert/>
                </div>

                @foreach ($types as $type)
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <p>
                                <strong>Name :</strong> {{ $type->name }}          
                            </p>
                            <div class="d-flex">
                                <a href="{{ route("admin.project.type.edit",$type->id) }}" class="btn btn-success btn-xs btn-squared ">Update</a>
                                <form action="{{ route("admin.project.type.destroy",$type->id) }}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <button class="btn-danger btn btn-xs mx-2"> Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>

</x-layouts.admin-includes-layout>