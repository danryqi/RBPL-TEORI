<main>
    <section class="bagian-produk">
        <div class="flasher">
            <?php Flasher::login(); ?>
        </div>
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
                            <div class="menu-card" data-id="<?= $produk['id_menu'] ?>"
                                style="background-image: url('<?= img; ?>/<?= $produk['pic_menu'] ?>'); cursor: pointer;">
                                <div class="desk">
                                    <h1><?= $produk['nama_menu'] ?></h1>
                                    <p><?= $produk['harga_menu'] ?></p>
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
        <div class="kasir" id="panel-keranjang">
            <form action="" id="form-pembayaran">
                <div class="data">
                    <div class="nama">
                        <p>Nama</p>
                        <input type="text" name="nama" placeholder="Nama Pelanggan">
                    </div>
                    <div class="nomor-meja">
                        <p>Nomor Meja</p>
                        <input type="text" name="nomor-meja" placeholder="Nomor Meja">
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
                        <p>Pajak (10%)</p>
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
                        <div class="button-group" name="metode">
                            <input type="radio" class="btn-check" name="metode_pembayaran" value="Tunai" id="tunai"
                                autocomplete="off" checked>
                            <label for="tunai">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" fill="currentColor"
                                    class="bi bi-cash" viewBox="0 0 16 16">
                                    <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                                    <path
                                        d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2z" />
                                </svg>
                                <p>Tunai</p>
                            </label>

                            <input type="radio" class="btn-check" name="metode_pembayaran" value="Debit" id="debit"
                                autocomplete="off">
                            <label for="debit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" fill="currentColor"
                                    class="bi bi-credit-card" viewBox="0 0 16 16">
                                    <path
                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z" />
                                    <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z" />
                                </svg>
                                <p>Debit</p>
                            </label>

                            <input type="radio" class="btn-check" name="metode_pembayaran" value="QRIS" id="QRIS"
                                autocomplete="off">
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
                        <button class="hapus" type="button" id="btn-reset">Hapus Semua</button>
                        <button class="struk" type="button" id="btn-struk">Cetak Struk</button>
                        <button class="bayar" type="submit" id="btn-submit">Proses Pembayaran</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="struk-box" id="panel-struk">
            <h3 style="text-align:center; color:#0d4f4b">Struk Pembelian</h3>
            <div id="isi-struk" style="white-space:pre-line"></div>
            <div style="margin-top:16px; display:flex; flex-direction:column; gap:10px">
                <button onclick="window.print()"
                    style="padding:8px; background:#005f56; color:white; border:none; border-radius:5px;">Cetak
                    Struk</button>
                <button onclick="window.location.reload()"
                    style="padding:8px; background:#ccc; border:none; border-radius:5px;">Transaksi Baru</button>
            </div>
        </div>
    </section>
</main>

<script>const baseurl = "<?= baseurl; ?>";</script>
<script> document.addEventListener("DOMContentLoaded", function () {
        const panelKeranjang = document.getElementById("panel-keranjang"); // Targetkan div keranjang
        const panelStruk = document.getElementById("panel-struk");
        const form = document.getElementById("form-pembayaran");
        const cart = [];
        const pesananList = document.querySelector(".pesanan-list");
        const subtotalEl = document.querySelector(".sub-total p");
        const pajakEl = document.querySelector(".pajak p:last-child");
        const totalEl = document.querySelector(".data-total p");
        const btnReset = document.getElementById("btn-reset");
        const btnStruk = document.getElementById("btn-struk");

        const btnNewTransaction = document.getElementById("btn-new-transaction");

        function renderCart() {
            if (!pesananList) return; // Guard clause

            if (cart.length === 0) {
                pesananList.innerHTML = `<div class="cart-empty"><svg>...</svg><p>Belum ada item</p></div>`;
            } else {
                const cartHTML = cart.map((item, index) => {
                    const total = item.harga * item.jumlah;
                    return `
                    <div class="item-pesanan" data-index="${index}">
                        <p class="item-nama">${item.nama} - Rp.${total.toLocaleString()}</p>
                        <div class="jumlah-item">
                            <button class="btn-kurang">-</button>
                            <span class="item-jumlah">${item.jumlah}</span>
                            <button class="btn-tambah">+</button>
                        </div>
                    </div>`;
                }).join('');
                pesananList.innerHTML = cartHTML;
            }
            updateSummary();
        }

        function updateSummary() {
            if (!subtotalEl || !pajakEl || !totalEl) return;
            const subtotal = cart.reduce((acc, item) => acc + item.harga * item.jumlah, 0);
            const pajak = Math.floor(subtotal * 0.1);
            const total = subtotal + pajak;
            subtotalEl.innerText = "Rp." + subtotal.toLocaleString();
            pajakEl.innerText = "Rp." + pajak.toLocaleString();
            totalEl.innerText = "Rp." + total.toLocaleString();
        }

        function renderStruk(cart, nama, meja, metode) {
            const now = new Date();
            const tanggal = now.toLocaleString("id-ID", { dateStyle: "short", timeStyle: "medium" });
            let isi = "===================================\n";
            isi += " 🏪 RIFER KAHVE\n"; isi += "===================================\n";
            isi += `Tanggal : ${tanggal}\n`;
            isi += `Nama : ${nama}\n`;
            isi += `Meja : ${meja}\n`;
            isi += "===================================\n";
            isi += "PESANAN :\n";
            let subtotal = 0;
            cart.forEach(item => {
                const totalItem = item.harga * item.jumlah;
                subtotal += totalItem;
                const line = `${item.nama.padEnd(12)} x${item.jumlah} Rp.${item.harga.toLocaleString()} Rp.${totalItem.toLocaleString()}`;
                isi += line + "\n";
            });
            const pajak = Math.floor(subtotal * 0.1); const total = subtotal + pajak; isi += "===================================\n";
            isi += `Subtotal : Rp.${subtotal.toLocaleString()}\n`;
            isi += `Pajak (10%) : Rp.${pajak.toLocaleString()}\n`;
            isi += "===================================\n";
            isi += `TOTAL : Rp.${total.toLocaleString()}\n`;
            isi += "===================================\n";
            isi += `Metode Pembayaran : ${metode}\n`;
            isi += "===================================\n";
            isi += "\nTerima kasih atas kunjungan Anda !\n";
            const strukBox = document.getElementById("struk-box");
            const isiStrukEl = document.getElementById("isi-struk");

            if (!strukBox || !isiStrukEl) {
                console.error("Elemen untuk struk tidak ditemukan!");
                return;
            }
            // ... sisa kode
            isiStrukEl.innerText = isi;
        }

        document.querySelectorAll(".menu-card").forEach((card) => {
            card.addEventListener("click", () => {
                console.log("Kartu menu diklik! ID:", card.dataset.id);
                const id = card.dataset.id;
                const nama = card.querySelector("h1")?.innerText || "";
                const hargaText = card.querySelector("p")?.innerText || "";
                const harga = parseInt(hargaText.replace(/[^\d]/g, ""));

                if (!id || !nama || isNaN(harga)) return;

                const existing = cart.find((item) => item.id === id);
                if (existing) {
                    existing.jumlah += 1;
                } else {
                    cart.push({ id, nama, harga, jumlah: 1 });
                }
                renderCart();
            });
        });

        pesananList.addEventListener("click", function (event) {
            const target = event.target;
            const itemDiv = target.closest(".item-pesanan");
            if (!itemDiv) return;

            const index = parseInt(itemDiv.dataset.index);

            if (target.classList.contains("btn-tambah")) {
                cart[index].jumlah += 1;
            } else if (target.classList.contains("btn-kurang")) {
                cart[index].jumlah -= 1;
                if (cart[index].jumlah <= 0) {
                    cart.splice(index, 1);
                }
            }
            renderCart();
        });

        form.addEventListener("submit", (e) => {
            e.preventDefault();
            if (cart.length === 0) {
                alert("Tidak ada pesanan.");
                return;
            }

            const namaPelanggan = form.querySelector('input[name="nama"]').value.trim();
            const nomorMeja = form.querySelector('input[name="nomor-meja"]').value.trim();

            if (!namaPelanggan || !nomorMeja) {
                alert("Nama dan nomor meja harus diisi.");
                return;
            }

            const metodeInput = document.querySelector('input[name="metode_pembayaran"]:checked')?.id || 'Tunai';
            const metode = metodeInput ? metodeInput.id : 'Tunai';

            const data = new FormData();
            data.append("nama", namaPelanggan);
            data.append("meja", nomorMeja);
            data.append("cart", JSON.stringify(cart));
            data.append("metode", metode);

            const url = `${baseurl}/kasir/tambahPesanan`;
            fetch(url, {
                method: "POST",
                body: data
            })
                .then(res => {
                    if (!res.ok) { // Cek jika status bukan 2xx
                        return res.text().then(text => { throw new Error(text) });
                    }
                    return res.text();
                })
                .then(resText => {
                    alert("Pembayaran berhasil!\n" + resText);

                    renderStruk(cart, namaPelanggan, nomorMeja, metode);

                    if (panelKeranjang) panelKeranjang.style.display = "none";
                    if (panelStruk) panelStruk.style.display = "block";

                    cart.length = 0;
                    renderCart();
                    form.reset();
                })
                .catch(err => {
                    console.error("Fetch Error:", err);
                    alert("Terjadi kesalahan: " + err.message);
                });
        });

        if (btnNewTransaction) { // Pengecekan 'if' adalah praktik yang baik
            btnNewTransaction.addEventListener("click", () => {
                panelStruk.style.display = "none";
                panelKeranjang.style.display = "block";
            });
        }

        btnReset.addEventListener("click", () => {
            if (confirm("Hapus semua item dari keranjang?")) {
                cart.length = 0;
                renderCart();
            }
        });

        btnStruk.addEventListener("click", () => {
            if (cart.length === 0) {
                alert("Tidak ada item yang dipesan.");
                return;
            }
            const nama = form.querySelector('input[name="nama"]')?.value.trim() || 'Pelanggan';
            const meja = form.querySelector('input[name="nomor-meja"]')?.value.trim() || '-';
            const metode = document.querySelector('input[name="btnradio"]:checked')?.id || 'Tunai';
            renderStruk(cart, nama, meja, metode);
            panelKeranjang.style.display = "none";
            panelStruk.style.display = "block";
        });
    });

</script>

</body>