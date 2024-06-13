


@if ($errors->any())
<div
class="alert alert-danger alert-dismissible fade show"
role="alert"
>
<div class="alert-content">
  <p>
    {{ $errors->first() }}
  </p>
  <button
    type="button"
    class="btn-close text-capitalize"
    data-bs-dismiss="alert"
    aria-label="Close"
  >
    <img
      src="{{ asset("admin/img/svg/x.svg") }}"
      alt="x"
      class="svg"
      aria-hidden="true"
    />
  </button>
</div>
</div>
@endif

@if ($message = session()->get("success"))
  <div
  class="alert alert-success alert-dismissible fade show"
  role="alert"
  >
    <div class="alert-content">
      <p>
        {{ $message }}
      </p>
      <button
        type="button"
        class="btn-close text-capitalize"
        data-bs-dismiss="alert"
        aria-label="Close"
      >
        <img
          src="{{ asset("admin/img/svg/x.svg") }}"
          alt="x"
          class="svg"
          aria-hidden="true"
        />
      </button>
    </div>
  </div>
@endif