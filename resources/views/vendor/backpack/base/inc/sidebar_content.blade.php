{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="/admin"><i class="nav-icon la la-home"></i> HOME</a></li>

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-user-check"></i>Admin</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-users"></i> Users</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('client') }}"><i class="nav-icon la la-building"></i> Clients</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('secret') }}"><i class="nav-icon la la-user-secret"></i> Secrets</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-lock"></i> <span>Roles</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon la la-key"></i> <span>Role Permissions</span></a></li>
    </ul>
</li>

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-address-card"></i>Certificates</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('field') }}"><i class="nav-icon la la-edit"></i> Fields</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('template') }}"><i class="nav-icon la la-images"></i> Templates</a></li>
    </ul>
</li>


