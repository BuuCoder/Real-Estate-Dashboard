@php
  $value = $value ?? 0;
  $title = $title ?? 'Stat';
  $bg = $bg ?? 'bg-gray-100';
@endphp
<div class="{{ $bg }} rounded-2xl p-4">
  <div class="text-2xl font-extrabold text-slate-900">{{ $value }}</div>
  <div class="text-xs text-gray-500">{{ $title }}</div>
</div>
