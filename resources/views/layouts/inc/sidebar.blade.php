<div class="sidebar" data-color="purple" data-background-color="white" data-image="images/logo.png">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="#" class="d-flex align-items-center text-decoration-none col-md-4">
            <div class="offset-md-10 pt-1">
                <h3>TMS</h3>
            </div>
            <img src="images/logo.png" width="60rem" height="auto" alt="logo">
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}  ">
                <a class="nav-link" href="{{ url('/dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p><b>Dashboard</b></p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('tasks') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('tasks.index') }}">
                    <i class="fa fa-list-alt fa-bounce"></i>
                    <p><b>Tasks</b></p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('tasks/create') ? 'active' : '' }} ">
                <a class="nav-link" href="{{ route('tasks.create') }}">
                    <i class="fa fa-plus fa-beat"></i>
                    <p><b>Add Task</b></p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('members') ? 'active' : '' }} ">
                <a class="nav-link" href="{{ route('members.index') }}">
                    <i class="fa fa-people-group fa-bounce"></i>
                    <p><b>Team Members</b></p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('members/create') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('members.create') }}">
                    <i class="fa-sharp fa-solid fa-clock-rotate-left fa-beat"></i>
                    <p><b>Add Team Member</b></p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('profiles') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('profiles.index') }}">
                    <i class="fa fa-address-card fa-beat"></i>
                    <p><b>Profile</b></p>
                </a>
            </li>
        </ul>
    </div>
</div>
