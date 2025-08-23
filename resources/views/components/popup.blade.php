<div id="myPopup" style="display: {{ ($open ?? false) ? 'flex' : 'none' }};" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-40">
    <div class="bg-white rounded-3xl shadow-panel p-8 w-[90%] max-w-[400px]" onclick="event.stopPropagation()">
        <div class="mb-6 text-gray-800 text-base md:text-lg font-semibold">
            {{ $slot }}
        </div>
        <div class="flex justify-end gap-3">
            <button onclick="closePopup()" class="rounded-xl bg-gray-200 text-gray-700 px-4 py-2 font-semibold hover:bg-gray-300 transition text-xs md:text-base">
                Không
            </button>
            <button onclick="acceptPopup()" class="rounded-xl bg-brand-600 text-white border border-brand-600 px-4 py-2 font-semibold hover:bg-brand-700 transition text-xs md:text-base">
                Đồng ý
            </button>
        </div>
    </div>
</div>

<script>
    function openPopup() {
        document.getElementById('myPopup').style.display = 'flex';
    }
    function closePopup() {
        document.getElementById('myPopup').style.display = 'none';
    }
    function acceptPopup() {
        const event = new CustomEvent('popup-accepted');
        window.dispatchEvent(event);
        closePopup();
    }
    document.getElementById('myPopup').addEventListener('click', function(e) {
        if (e.target === this) closePopup();
    });
</script>
