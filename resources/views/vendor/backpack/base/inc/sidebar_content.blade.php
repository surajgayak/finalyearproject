{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="la la-users nav-icon"></i> Users</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('driver') }}"><i class="la la-user nav-icon"></i> Drivers</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('vehicle') }}"><i class="la la-car nav-icon"></i> Vehicles</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('upload') }}"><i class="la la-upload nav-icon"></i> Uploads</a></li>