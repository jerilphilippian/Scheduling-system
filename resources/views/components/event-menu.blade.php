<ul class="inline-flex items-center gap-6 px-5 py-3 mt-2 mb-2 text-xs font-semibold tracking-wider text-red-900 bg-gray-100 rounded-md shadow">
    <a href="{{ route('events.index') }}" class="relative nav active">
        <li class="font-bold capitalize">All Events</li>
        <div class="nav-underline"></div>
    </a>
    <a href="{{route('my-events.index')}}" class="relative nav">
        <li class="font-bold capitalize">My Events</li>
        <div class="nav-underline"></div>
    </a>
    <a href="{{route('invitation.index')}}" class="relative nav">
        <li class="font-bold capitalize">Invitations</li>
        <div class="nav-underline"></div>
    </a>
</ul>
