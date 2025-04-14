<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Tambah Lokasi</strong></h1>

        <div class="card">
            <div class="card-body">
                <form action="/admin/lokasi/simpan" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="siswa" class="form-label">Siswa</label>
                        <select class="form-control" id="siswa" name="siswa" required>
                            <option value="">Pilih Siswa</option>
                            <option value="siswa1">Siswa 1</option>
                            <option value="siswa2">Siswa 2</option>
                            <option value="siswa3">Siswa 3</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select class="form-control" id="kategori" name="kategori" required>
                            <option value="">Pilih Kategori</option>
                            <option value="kategori1">Kategori 1</option>
                            <option value="kategori2">Kategori 2</option>
                            <option value="kategori3">Kategori 3</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="longitude" class="form-label">Longitude</label>
                        <input type="text" class="form-control" id="longitude" name="longitude" required>
                    </div>
                    <div class="mb-3">
                        <label for="latitude" class="form-label">Latitude</label>
                        <input type="text" class="form-control" id="latitude" name="latitude" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_tempat" class="form-label">Nama Tempat</label>
                        <input type="text" class="form-control" id="nama_tempat" name="nama_tempat" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>

    </div>
</main>