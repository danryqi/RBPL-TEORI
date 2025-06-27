<main>
    <section class="bagian-produk">
        <div class="produk">
            <div class="Page-title">Daftar Menu</div>
            <div class="nav">
                <ul>
                    <li>
                        <button>Semua</button>
                        <button>Kopi</button>
                        <button>Minuman</button>
                        <button>Makanan</button>
                        <button>Snack</button>
                        <button>Paket</button>
                    </li>
                </ul>
            </div>
            <div class="menu-content">
                <?php if ($data['product'] != null) {
                    foreach ($data['product'] as $produk): ?>
                        <div class="menu">
                            <div class="menu-card">
                                <div class="foto">
                                    <img src="<?= $produk['pic_menu'] ?>" alt="">
                                </div>
                                <div class="description">
                                    <h1><?= $produk['nama_menu'] ?></h1>
                                    <p>Rp.<?= $produk['harga_menu'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;
                } else { ?>
                    <p>Belum ada Produk yang ditambahkan</p>
                <?php } ?>
            </div>
        </div>
    </section>
    <section class="bagian-kasir">
        <div class="kasir">
            <form action="">
                <div class="data">
                    <div class="nama">
                        <p>Nama</p>
                        <input type="text" placeholder="Nama Pelanggan">
                    </div>
                    <div class="nomor-meja">
                        <p>Nomor Meja</p>
                        <input type="text" placeholder="Nomor Meja">
                    </div>
                </div>
                <hr>
                <div class="pesanan-content">
                    <div class="pesanan-head">
                        <h1>Pesanan</h1>

                    </div>
                    <div class="pesanan-list">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-cart-fill" viewBox="0 0 16 16">
                            <path
                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                        </svg>
                        <p>Belum ada item yang dipesan</p>
                    </div>
                </div>
            </form>
            <hr>
            <div class="pembayaran">
                <div class="subtotal">
                    <p>Subtotal</p>
                    <div class="sub-total">
                        <p>Rp.0</p>
                    </div>
                </div>
                <div class="diskon">
                    <p>Diskon</p>
                    <p>-</p>
                </div>
                <div class="pajak">
                    <p>Pajak</p>
                    <p>-</p>
                </div>
                <hr>
                <div class="total">
                    <p>Total</p>
                    <div class="data-total">
                        <p>Rp.0</p>
                    </div>
                </div>
            </div>
            <div class="metode-pembayaran">
                <h1>Metode Pembayaran</h1>
                <div class="pilihan-metode">
                    <div class="button-group">
                        <input type="radio" class="btn-check" name="btnradio" id="tunai" autocomplete="off" checked>
                        <label for="tunai">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" fill="currentColor"
                                class="bi bi-cash" viewBox="0 0 16 16">
                                <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                                <path
                                    d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2z" />
                            </svg>
                            <p>Tunai</p>
                        </label>

                        <input type="radio" class="btn-check" name="btnradio" id="debit" autocomplete="off">
                        <label for="debit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" fill="currentColor"
                                class="bi bi-credit-card" viewBox="0 0 16 16">
                                <path
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z" />
                                <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z" />
                            </svg>
                            <p>Debit</p>
                        </label>

                        <input type="radio" class="btn-check" name="btnradio" id="QRIS" autocomplete="off">
                        <label for="QRIS">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" fill="currentColor"
                                class="bi bi-qr-code" viewBox="0 0 16 16">
                                <path d="M2 2h2v2H2z" />
                                <path d="M6 0v6H0V0zM5 1H1v4h4zM4 12H2v2h2z" />
                                <path d="M6 10v6H0v-6zm-5 1v4h4v-4zm11-9h2v2h-2z" />
                                <path
                                    d="M10 0v6h6V0zm5 1v4h-4V1zM8 1V0h1v2H8v2H7V1zm0 5V4h1v2zM6 8V7h1V6h1v2h1V7h5v1h-4v1H7V8zm0 0v1H2V8H1v1H0V7h3v1zm10 1h-1V7h1zm-1 0h-1v2h2v-1h-1zm-4 0h2v1h-1v1h-1zm2 3v-1h-1v1h-1v1H9v1h3v-2zm0 0h3v1h-2v1h-1zm-4-1v1h1v-2H7v1z" />
                                <path d="M7 12h1v3h4v1H7zm9 2v2h-3v-1h2v-1z" />
                            </svg>
                            <p>QRIS</p>
                        </label>
                    </div>
                </div>
                <div class="proses-pembayaran">
                    <button type="submit">Proses Pembayaran</button>
                </div>
            </div>
        </div>
    </section>
</main>

</body>