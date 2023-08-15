<ul class="inline-flex items-center gap-6 px-5 py-3 mt-2 mb-2 text-xs font-semibold tracking-wider text-red-900 bg-white rounded-md shadow">
    <a href="{{ route('user-management.index') }}" class="relative nav active">
        <li class="font-bold capitalize">User Management</li>
        <div class="nav-underline"></div>
    </a>
    <a href="{{route('roles.index')}}" class="relative nav">
        <li class="font-bold capitalize">Roles</li>
        <div class="nav-underline"></div>
    </a>
    <a href="{{route('department.index')}}" class="relative nav">
        <li class="font-bold capitalize">Department</li>
        <div class="nav-underline"></div>
    </a>
    <a href="{{route('position.index')}}" class="relative nav">
        <li class="font-bold capitalize">Position</li>
        <div class="nav-underline"></div>
    </a>
</ul>
