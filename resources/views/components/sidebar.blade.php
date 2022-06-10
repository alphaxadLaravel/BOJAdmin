 <!-- the system sidebar here -->
 <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <!-- the dashboard link here -->
      <li class="nav-item">
        <a class="nav-link collapsed active" href="/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <!--  drop down Nav here -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#companies" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Official Word</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="companies" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/official_word">
              <i class="bi bi-circle"></i><span>View All</span>
            </a>
          </li>
          <li>
            <a href="/add_official_word">
              <i class="bi bi-circle"></i><span>Create New</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Add Category</span>
            </a>
          </li>
        </ul>
      </li>

      <!-- the  drop down nav here -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#branches" data-bs-toggle="collapse" href="#">
          <i class="bx bx-git-branch"></i><span>Special Word</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="branches" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/special_word">
              <i class="bi bi-circle"></i><span>View All</span>
            </a>
          </li>
          <li>
            <a href="/add_special_word">
              <i class="bi bi-circle"></i><span>Create New</span>
            </a>
          </li>
        </ul>
      </li>

      <!-- the  drop down nav here -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#cartegories" data-bs-toggle="collapse" href="#">
          <i class="bx bx-list-check"></i><span>Summary</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="cartegories" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/summary">
              <i class="bi bi-circle"></i><span>View All</span>
            </a>
          </li>
          <li>
            <a href="/add_summary">
              <i class="bi bi-circle"></i><span>Create New</span>
            </a>
          </li>
        </ul>
      </li>


      <!-- the  drop down nav here -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#risks" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Slide Banners</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="risks" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/banners">
              <i class="bi bi-circle"></i><span>View All</span>
            </a>
          </li>
          <li>
            <a href="/add_banner">
              <i class="bi bi-circle"></i><span>Create New</span>
            </a>
          </li>
        </ul>
      </li>

      <!-- the  drop down nav here -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Announcements</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/all_announcements">
              <i class="bi bi-circle"></i><span>View All</span>
            </a>
          </li>
          <li>
            <a href="/add_announcement">
              <i class="bi bi-circle"></i><span>Create New</span>
            </a>
          </li>
        </ul>
      </li>

    </ul>

</aside>