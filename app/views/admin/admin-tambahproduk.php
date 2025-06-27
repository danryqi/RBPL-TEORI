<div class="main">
    <div class="content">
        <form action="<?= baseurl; ?>/admin/tambahmenu" method="post" enctype="multipart/form-data">
            <div class="head-content">
                <h1>Tambah Produk</h1>
                <div class="aksi">
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
                    <div class="name">
                        <p>Nama Produk</p>
                        <input class="form-control" type="text" name="nama" id="nama">
                    </div>
                    <div class="pic">
                        <p>Gambar</p>
                        <input class="form-control" type="file" name="pic" id="pic">
                    </div>
                    <div class="price">
                        <p>Harga</p>
                        <div class="input-group">
                            <span class="input-group-text">Rp.</span>
                            <input class="form-control" type="text" name="harga" id="harga">
                        </div>
                    </div>
                    <div class="desc">
                        <p>Deskripsi</p>
                        <textarea class="form-control" name="desk" id="desk"></textarea>
                    </div>
                    <div class="kategori">
                        <select class="form-select" name="kategori" id="kategori">
                            <option selected>Kategori Produk</option>
                            <option value="Makanan">Makanan</option>
                            <option value="Makanan">Minuman</option>
                        </select>
                    </div>
                </div>
                <!-- <div class="pilihan">
                    <div class="pilihan-penyajian">
                        <h1>Pilihan Penyajian</h1>
                        <div class="option">
                            <div class="form-check">
                                <label class="form-check-label" for="iced">
                                    <input class="form-check-input" type="checkbox" value="Iced" id="iced">
                                    <span>Iced</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="hot">
                                    <input class="form-check-input" type="checkbox" value="Hot" id="hot">
                                    <span>Hot</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="pilihan-espresso">
                        <h1>Pilihan Espresso</h1>
                        <div class="option">
                            <div class="form-check">
                                <label class="form-check-label" for="normal">
                                    <input class="form-check-input" type="checkbox" value="Normal Shot" id="normal">
                                    <span>Normal Shot</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="double">
                                    <input class="form-check-input" type="checkbox" value="Double Shot" id="double">
                                    <span>Double Shot</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="triple">
                                    <input class="form-check-input" type="checkbox" value="Triple Shot" id="triple">
                                    <span>Triple Shot</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="piliham-dairy">
                        <h1>Pilihan Dairy</h1>
                        <div class="option">
                            <div class="form-check">
                                <label class="form-check-label" for="milk">
                                    <input class="form-check-input" type="checkbox" value="Milk" id="milk">
                                    <span>Milk</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="oat">
                                    <input class="form-check-input" type="checkbox" value="Oat Milk" id="oat">
                                    <span>Oat Milk</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="Almond">
                                    <input class="form-check-input" type="checkbox" value="Almond Milk" id="Almond">
                                    <span>Almond Milk</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </form>
    </div>
</div>
</body>