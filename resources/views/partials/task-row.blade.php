@php
  $brand = $brand ?? 'U';
  $title = $title ?? 'Untitled Task';
  $desc = $desc ?? 'No description';
  $chips = $chips ?? ['in progress'];
  $avatars = $avatars ?? [1,2,3];
@endphp
<li class="flex items-center justify-between gap-4 py-3">
  <div class="flex items-center gap-3">
    <div class="w-9 h-9 rounded-xl grid place-items-center text-white font-bold" style="background: linear-gradient(135deg,#ff8a8a,#ff6b6b);">
      {{ $brand }}
    </div>
    <div>
      <p class="font-medium text-slate-900">{{ $title }}</p>
      <p class="text-xs text-gray-500">{{ $desc }}</p>
    </div>
  </div>
  <div class="flex items-center gap-2">
    <div class="hidden md:flex -space-x-2">
      @foreach ($avatars as $a)
      <img class="w-6 h-6 rounded-full ring-2 ring-white" src="https://i.pravatar.cc/100?img={{ $a }}" />
      @endforeach
    </div>
    <div class="text-xs px-2 py-1 rounded-full bg-gray-100 text-gray-600 capitalize">{{ $chips[0] ?? '' }}</div>
  </div>
</li>
