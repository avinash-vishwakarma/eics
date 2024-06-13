<x-layouts.admin-includes-layout>
    <main class="main-content">
      <div class="admin">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-8">
              <div class="edit-profile">
                <div class="edit-profile__logos">
                  <a href="index.html">
                    <img class="dark" src="{{ asset("img/logo/logo.svg") }}" alt />
                    <img class="light" src="{{ asset("img/logo/logo.svg") }}" alt />
                  </a>
                </div>
                <div class="card border-0">
                  <div class="card-header">
                    <div class="edit-profile__title">
                      <h6>EICS Admin Login</h6>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="edit-profile__body">
                      <div class="form-group mb-25">
                        <form action="{{ route("admin.login.submit") }}" method="post">
                          @csrf
                          <x-admin.form.alert/>
  
                          <label for="username">Email Address</label>
                          <input
                            type="text"
                            class="form-control"
                            id="username"
                            name="email"
                            placeholder="name@example.com"
                          />
                        </div>
                        <div class="form-group mb-15">
                          <label for="password-field">password</label>
                          <div class="position-relative">
                            <input
                              id="password-field"
                              type="password"
                              class="form-control"
                              name="password"
                              placeholder="Password"
                            />
                            <div
                              class="uil uil-eye-slash text-lighten fs-15 field-icon toggle-password2"
                            ></div>
                          </div>
                        </div>
    
                        <div
                          class="admin__button-group button-group d-flex pt-1 justify-content-md-start justify-content-center"
                        >
                          <button
                            class="btn btn-primary btn-default w-100 btn-squared text-capitalize lh-normal px-50 signIn-createBtn"
                          >
                            log in
                          </button>
                        </form>
  
                        
                      </div>
                    </div>
                  </div>
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <div id="overlayer">
      <div class="loader-overlay">
        <div class="dm-spin-dots spin-lg">
          <span class="spin-dot badge-dot dot-primary"></span>
          <span class="spin-dot badge-dot dot-primary"></span>
          <span class="spin-dot badge-dot dot-primary"></span>
          <span class="spin-dot badge-dot dot-primary"></span>
        </div>
      </div>
    </div>
    <div class="enable-dark-mode dark-trigger">
      <ul>
        <li>
          <a href="#">
            <iconify-icon icon="ph:moon"></iconify-icon>
          </a>
        </li>
      </ul>
    </div>
  </x-layouts.admin-layout>