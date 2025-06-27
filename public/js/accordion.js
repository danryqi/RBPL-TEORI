document.addEventListener("DOMContentLoaded", function () {
  const accordionHeaders = document.querySelectorAll(".accordion-header");

  accordionHeaders.forEach((header) => {
    header.addEventListener("click", function () {
      // Toggle kelas 'active' pada header
      this.classList.toggle("active");

      // Temukan konten yang terkait
      const content = this.nextElementSibling; // Mengambil elemen berikutnya (yaitu accordion-content)

      // Toggle kelas 'show' pada konten untuk menampilkan/menyembunyikan
      if (content.classList.contains("show")) {
        content.classList.remove("show");
        // Atur max-height kembali ke 0 setelah transisi selesai jika ingin lebih presisi
        // content.style.maxHeight = null;
      } else {
        // Saat menampilkan, atur max-height agar transisi bekerja
        // Anda bisa mengatur ini ke scrollHeight untuk tinggi dinamis
        // content.style.maxHeight = content.scrollHeight + "px";
        content.classList.add("show");
      }

      // Opsional: Tutup accordion lain saat satu dibuka (hanya satu yang bisa terbuka)
      accordionHeaders.forEach((otherHeader) => {
        if (otherHeader !== this && otherHeader.classList.contains("active")) {
          otherHeader.classList.remove("active");
          otherHeader.nextElementSibling.classList.remove("show");
        }
      });
    });
  });
});
