<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<!-- Leaflet Geocoder CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />

<!-- Leaflet Geocoder JS -->
<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>

<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">Tambah Lokasi Magang</h5>
    </div>
    <div class="card-body">
        <form action="<?= base_url('siswa/lokasi/simpan') ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_lokasi" value="<?= isset($lokasi) ? $lokasi['id_lokasi'] : ''; ?>">

            <!-- Input lokasi -->
            <div id="map" style="height: 400px; margin-bottom: 20px;"></div>

            <!-- Input koordinat -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="latitude" class="form-label">Latitude</label>
                    <input type="text" class="form-control" id="latitude" name="latitude"
                        value="<?= isset($lokasi) ? $lokasi['latitude'] : ''; ?>" readonly required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="longitude" class="form-label">Longitude</label>
                    <input type="text" class="form-control" id="longitude" name="longitude"
                        value="<?= isset($lokasi) ? $lokasi['longitude'] : ''; ?>" readonly required>
                </div>
            </div>

            <!-- Form data lainnya -->
            <div class="mb-3">
                <label for="lokasi_siswa" class="form-label">Nama Tempat Magang</label>
                <input type="text" class="form-control" id="lokasi_siswa" name="lokasi_siswa" value="<?= isset($lokasi) ? $lokasi['lokasi_siswa'] : ''; ?>" required>
            </div>

            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" value="<?= isset($lokasi) ? $lokasi['kategori'] : ''; ?>" required>
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= isset($lokasi) ? $lokasi['deskripsi'] : ''; ?>" required>
            </div>

            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar">
                <!-- Menampilkan gambar jika sudah ada -->
                <?php if (isset($lokasi) && $lokasi['gambar']): ?>
                    <img src="<?= base_url('uploads/' . $lokasi['gambar']) ?>" alt="Lokasi Gambar" width="100" height="100">
                <?php endif; ?>
            </div>

            <!-- Tombol -->
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= base_url('siswa/lokasi') ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>

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
