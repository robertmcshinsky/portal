{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-question"></i> Users</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('secrets') }}"><i class="nav-icon la la-question"></i> Secrets</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('clients') }}"><i class="nav-icon la la-question"></i> Clients</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('certificate-fields') }}"><i class="nav-icon la la-question"></i> Certificate fields</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('certificate-templates') }}"><i class="nav-icon la la-question"></i> Certificate templates</a></li>