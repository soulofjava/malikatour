<div id="map" style="height: 400px;"></div>

@once
    @push('styles')
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
            integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    @endpush

    @push('scripts')
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
            integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    @endpush
@endonce

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(() => {
                const lat = document.getElementById('latitude');
                const lng = document.getElementById('longitude');

                if (!lat || !lng) {
                    console.warn("Latitude/Longitude field not found.");
                    return;
                }

                const map = L.map('map').setView([lat.value || -7.35, lng.value || 109.90], 15);
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; OpenStreetMap contributors'
                }).addTo(map);

                const marker = L.marker([lat.value || -7.35, lng.value || 109.90], {
                    draggable: true
                }).addTo(map);

                marker.on('dragend', function() {
                    const position = marker.getLatLng();
                    lat.value = position.lat;
                    lng.value = position.lng;

                    // Beritahu Livewire kalau nilai berubah
                    lat.dispatchEvent(new Event('input'));
                    lng.dispatchEvent(new Event('input'));
                });
            }, 500); // delay biar inputnya pasti ready
        });
    </script>
@endpush
