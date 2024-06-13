<li class="menu-title mt-30">
    <span>Project Options</span>
</li>

<li class="">
    <a href="{{ route("admin.project.type.index") }}">
      <iconify-icon class="nav-icon" icon="iconamoon:category-fill"></iconify-icon>
      <span class="menu-text">Project Types</span>
    </a>
</li>


<li class="">
    <a href="{{ route("admin.project.section.index") }}">
        <iconify-icon class="nav-icon" icon="icon-park-twotone:intersection"></iconify-icon>
        <span class="menu-text">Project Sections</span>
    </a>
</li>

<li class="has-child open">
    <a href="#">
      <span class="nav-icon">
        <iconify-icon icon="bi:tools"></iconify-icon>
      </span>
      <span class="menu-text">Project </span>
      <span class="toggle-icon"></span>
    </a>
    <ul>
      <li class="">
        <a href="{{ route("admin.project.index") }}">Projects</a>
      </li>
      <li class="">
        <a href="{{ route("admin.project.create") }}">Create Projects</a>
      </li>
    </ul>
</li>