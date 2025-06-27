<div class="main">
    <div class="content">
        <form action="<?= baseurl; ?>/admin/editmenu" method="post" enctype="multipart/form-data">
            <div class="head-content">
                <h1>Ubah Produk</h1>
                <div class="aksi">
                    <a href="<?= baseurl; ?>/admin/hapus">
                        <button class="hapus">
                            <p>Hapus</p>
                        </button>
                    </a>
                    <a href="<?= baseurl; ?>/admin/produk">
                        <button class="batal">
                            <p>Batal</p>
                        </button>
                    </a>
                    <button type="submit" class="simpan">
                        <p>Simpan</p>
                    </button>
                </div>
            </div>
            <div class="form-content">
                <div class="data">
                    <input type="hidden" name="id" id="id" value="<?= $data['product']['id_menu'] ?>">
                    <div class="name">
                        <p>Nama Produk</p>
                        <input class="form-control" type="text" name="nama" id="nama"
                            value="<?= $data['product']['nama_menu'] ?>">
                    </div>
                    <div class="pic">
                        <p>Gambar</p>
                        <input class="form-control" type="file" name="pic" id="pic">
                    </div>
                    <div class="price">
                        <p>Harga</p>
                        <div class="input-group">
                            <span class="input-group-text">Rp.</span>
                            <input class="form-control" type="text" name="harga" id="harga"
                                value="<?= $data['product']['harga_menu'] ?>">
                        </div>
                    </div>
                    <div class="desc">
                        <p>Deskripsi</p>
                        <textarea class="form-control" name="desk"
                            id="desk"><?= $data['product']['desc_menu'] ?></textarea>
                    </div>
                    <div class="kategori">
                        <select class="form-select" name="kategori" id="kategori">
                            <option selected><?= $data['product']['kategori_menu'] ?></option>
                            <option value="Makanan">Makanan</option>
                            <option value="Makanan">Minuman</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</body>