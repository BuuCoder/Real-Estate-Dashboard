<div class="bg-white rounded-2xl p-4 shadow-soft">
  <div class="flex items-center justify-between mb-3">
    <div>
      <div class="text-xs text-gray-500">May, 2020</div>
      <div class="text-sm font-semibold">Calendar</div>
    </div>
    <div class="flex items-center gap-2">
      <button class="p-1 rounded-lg bg-gray-100 hover:bg-gray-200">&larr;</button>
      <button class="p-1 rounded-lg bg-gray-100 hover:bg-gray-200">&rarr;</button>
    </div>
  </div>
  <div class="grid grid-cols-7 text-center text-xs text-gray-500">
    <div>Mon</div><div>Tue</div><div>Wed</div><div>Thu</div><div>Fri</div><div>Sat</div><div>Sun</div>
  </div>
  <div class="mt-2 grid grid-cols-7 gap-1 text-center">
    @php for ($i = 1; $i <= 31; $i++) { @endphp
      <div class="py-2 rounded-lg {{  $i == 16 ? 'bg-brand-600 text-white' : 'bg-gray-50' }}">{{ $i }}</div>
    @php } @endphp
  </div>
</div>
