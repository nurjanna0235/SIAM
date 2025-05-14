
<script>
    // Inisialisasi peta
    var map = L.map('map').setView([-7.797068, 110.370529], 13); // Yogyakarta sebagai pusat awal

    // Tambahkan tile layer dari OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    // Marker untuk menunjukkan lokasi yang dipilih
    var marker;

    // Cek jika ada latitude dan longitude yang sudah ada (dari DB)
    <?php if (isset($lokasi['latitude']) && isset($lokasi['longitude'])): ?>
        var lat = <?= $lokasi['latitude']; ?>;
        var lng = <?= $lokasi['longitude']; ?>;
        
        // Set peta ke lokasi yang ada
        map.setView([lat, lng], 16);

        // Tambahkan marker di lokasi yang sesuai
        marker = L.marker([lat, lng]).addTo(map);

        // Isi input koordinat
        document.getElementById("latitude").value = lat;
        document.getElementById("longitude").value = lng;
    <?php endif; ?>

    // Event klik pada peta
    map.on('click', function(e) {
        var lat = e.latlng.lat;
        var lng = e.latlng.lng;

        // Tampilkan ke input
        document.getElementById("latitude").value = lat;
        document.getElementById("longitude").value = lng;

        // Hapus marker sebelumnya jika ada
        if (marker) {
            map.removeLayer(marker);
        }

        // Tambahkan marker baru
        marker = L.marker([lat, lng]).addTo(map);
    });

    // Tambahkan geocoder (fitur pencarian lokasi)
    L.Control.geocoder({
        defaultMarkGeocode: false
    })
    .on('markgeocode', function(e) {
        var latlng = e.geocode.center;

        // Pindah ke lokasi hasil pencarian
        map.setView(latlng, 16);

        // Hapus marker lama
        if (marker) {
            map.removeLayer(marker);
        }

        // Tambahkan marker baru
        marker = L.marker(latlng).addTo(map);

        // Isi input koordinat
        document.getElementById("latitude").value = latlng.lat;
        document.getElementById("longitude").value = latlng.lng;
    })
    .addTo(map);
</script>