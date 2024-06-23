<li class="has-child open">
    <a href="#" class="active">
      <span class="nav-icon">
        <iconify-icon icon="mdi:worker"></iconify-icon>
      </span>
      <span class="menu-text">Services</span>
      <span class="toggle-icon"></span>
    </a>
    <ul>
      <li class="">
        <a href="{{ route("admin.services.show") }}">Show All Services</a>
      </li>
      <li class="">
        <a href="{{ route("admin.services.featured") }}">All Featured Services</a>
      </li>
      <li class="">
        <a href="{{ route("admin.services.create") }}">Create New Service</a>
      </li>
    </ul>
  </li>