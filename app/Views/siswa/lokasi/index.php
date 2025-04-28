<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

<!-- Leaflet Geocoder CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />

<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">Tambah Lokasi Magang</h5>
    </div>
    <div class="card-body">
        <form action="<?= base_url('siswa/lokasi/simpan') ?>" method="post" enctype="multipart/form-data">
            
            <!-- Map untuk memilih lokasi -->
            <div class="mb-3">
                <label for="map" class="form-label">Pilih Lokasi di Peta</label>
                <div id="map" style="height: 400px; border: 1px solid #ccc;"></div>
            </div>

            <!-- Input koordinat -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="latitude" class="form-label">Latitude</label>
                    <input type="text" class="form-control" id="latitude" name="latitude" value="<?= isset($lokasi) ? $lokasi['latitude'] : ''; ?>" readonly required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="longitude" class="form-label">Longitude</label>
                    <input type="text" class="form-control" id="longitude" name="longitude" value="<?= isset($lokasi[0]) ? $lokasi[0]->longitude : ''; ?>" readonly required>
                </div>
            </div>

            <!-- Form data lainnya -->
            <div class="mb-3">
                <label for="lokasi_siswa" class="form-label">Nama Tempat Magang</label>
                <input type="text" class="form-control" id="lokasi_siswa" name="lokasi_siswa" value="<?= isset($lokasi[0]) ? $lokasi[0]->lokasi_siswa : ''; ?>" required>
            </div>

            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" value="<?= isset($lokasi[0]) ? $lokasi[0]->kategori : ''; ?>" required>
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= isset($lokasi[0]) ? $lokasi[0]->deskripsi : ''; ?>" required>
            </div>

            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar">
                <!-- Menampilkan gambar jika sudah ada -->
                <?php if (isset($lokasi[0]) && $lokasi[0]->gambar): ?>
                    <img src="<?= base_url('uploads/' . $lokasi[0]->gambar) ?>" alt="Lokasi Gambar" width="100" height="100">
                <?php endif; ?>
            </div>

            <!-- Tombol -->
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= base_url('siswa/lokasi') ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<!-- Leaflet Geocoder JS -->
<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>

<script>
// Ambil data lokasi dari PHP dan buat array JavaScript
var lokasiData = <?= json_encode($lokasi); ?>;

// Inisialisasi map
var map = L.map('map').setView([-6.200000, 106.816666], 13); // Default Jakarta

// Tambahkan tile layer
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap contributors'
}).addTo(map);

var marker;

// Plotkan semua marker lokasi yang ada di database
lokasiData.forEach(function(lokasi) {
    var lat = lokasi.latitude;
    var lng = lokasi.longitude;
    
    // Membuat marker untuk setiap lokasi
    L.marker([lat, lng]).addTo(map)
        .bindPopup('<strong>' + lokasi.lokasi_siswa + '</strong><br>' + lokasi.kategori + '<br>' + lokasi.deskripsi);
});

// Event klik di map
map.on('click', function(e) {
    var lat = e.latlng.lat;
    var lng = e.latlng.lng;

    document.getElementById('latitude').value = lat;
    document.getElementById('longitude').value = lng;

    if (marker) {
        map.removeLayer(marker);
    }

    marker = L.marker([lat, lng]).addTo(map);
});

// Tambahkan kontrol search
L.Control.geocoder({
    defaultMarkGeocode: false
})
.on('markgeocode', function(e) {
    var latlng = e.geocode.center;

    map.setView(latlng, 15);

    if (marker) {
        map.removeLayer(marker);
    }

    marker = L.marker(latlng).addTo(map);

    // Update input koordinat
    document.getElementById('latitude').value = latlng.lat;
    document.getElementById('longitude').value = latlng.lng;
})
.addTo(map);
</script>
