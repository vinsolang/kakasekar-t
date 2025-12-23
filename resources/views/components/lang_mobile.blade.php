<div class="relative z-[9999]" id="mobileLangSwitch">
    <!-- Trigger Button -->
    <button id="mobileLangTrigger" type="button" class="flex items-center gap-2 px-3 py-2 rounded-lg transition"
        aria-haspopup="menu" aria-expanded="false" aria-controls="mobileLangMenu">

        <span id="mobileLangFlag" class="w-6 h-4 flex items-center">
            @if(session('locale') === 'km')
                <!-- Khmer Flag -->
                <svg viewBox="0 0 30 20" class="w-6 h-4">
                    <rect width="30" height="20" fill="#032EA1" />
                    <rect y="4" width="30" height="12" fill="#E00025" />
                    <path fill="#FFFFFF" d="M8 14h14v1H8zM14 14V9h2v5zM12 14v-3h2v3zM16 14v-3h2v2z" />
                </svg>
            @else
                <!-- English Flag -->
                <svg viewBox="0 0 640 480" class="w-6 h-4">
                    <rect width="640" height="480" fill="#00247d" />
                    <path d="M0 0 L640 480 M640 0 L0 480" stroke="#fff" stroke-width="60" />
                    <path d="M0 0 L640 480 M640 0 L0 480" stroke="#cf142b" stroke-width="36" />
                    <rect x="268" width="104" height="480" fill="#fff" />
                    <rect y="188" width="640" height="104" fill="#fff" />
                    <rect x="288" width="64" height="480" fill="#cf142b" />
                    <rect y="208" width="640" height="64" fill="#cf142b" />
                </svg>
            @endif
        </span>

        <span id="mobileLangName" class="font-medium text-black">
            {{ session('locale') === 'km' ? 'ភាសាខ្មែរ' : 'English' }}
        </span>

        <svg viewBox="0 0 24 24" class="w-4 h-4">
            <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" />
        </svg>
    </button>

    <!-- Dropdown -->
    <div id="mobileLangMenu" class="absolute left-0 mt-2 w-40 bg-white border rounded-lg shadow-lg hidden z-[9999]"
        role="menu">

        <!-- ENGLISH -->
        <button data-lang="en" data-url="{{ route('locale', 'en') }}"
            class="item w-full flex items-center gap-3 px-3 py-2 hover:bg-gray-100 cursor-pointer">
            <svg viewBox="0 0 640 480" class="w-6 h-4">
                <rect width="640" height="480" fill="#00247d" />
                <path d="M0 0 L640 480 M640 0 L0 480" stroke="#fff" stroke-width="60" />
                <path d="M0 0 L640 480 M640 0 L0 480" stroke="#cf142b" stroke-width="36" />
                <rect x="268" width="104" height="480" fill="#fff" />
                <rect y="188" width="640" height="104" fill="#fff" />
                <rect x="288" width="64" height="480" fill="#cf142b" />
                <rect y="208" width="640" height="64" fill="#cf142b" />
            </svg>
            <span>English</span>
        </button>

        <!-- KHMER -->
        <button data-lang="km" data-url="{{ route('locale', 'km') }}"
            class="item w-full flex items-center gap-3 px-3 py-2 hover:bg-gray-100 cursor-pointer">
            <svg viewBox="0 0 30 20" class="w-6 h-4">
                <rect width="30" height="20" fill="#032EA1" />
                <rect y="4" width="30" height="12" fill="#E00025" />
                <path fill="#FFFFFF" d="M8 14h14v1H8zM14 14V9h2v5zM12 14v-3h2v3zM16 14v-3h2v2z" />
            </svg>
            <span>ភាសាខ្មែរ</span>
        </button>

    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const langTrigger = document.getElementById('mobileLangTrigger');
    const langMenu = document.getElementById('mobileLangMenu');

    langTrigger.addEventListener('click', function(e) {
        e.stopPropagation();
        langMenu.classList.toggle('hidden');
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', function() {
        if (!langMenu.classList.contains('hidden')) {
            langMenu.classList.add('hidden');
        }
    });

    // Stop closing when clicking inside the menu
    langMenu.addEventListener('click', function(e) {
        e.stopPropagation();
    });

    // Switch language when clicking an item
    document.querySelectorAll('#mobileLangMenu .item').forEach(function(button) {
        button.addEventListener('click', function() {
            window.location.href = this.dataset.url;
        });
    });
});
</script>
