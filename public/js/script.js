$(function () {
  $(".cont").on("click", function () {
    $("#modaltambahlabel").html("Stok Baru");
    $(".modal-footer button[type=submit]").html("Tambah");
    $("#nama").val("");
    $("#satuan").val("");
    $("#kuantitas").val("");
    $("#minimum").val("");
  });

  $(".edit_stok").on("click", function () {
    $("#modaltambahlabel").html("Edit Stok");
    $(".modal-footer button[type=submit]").html("Ubah");
    $('.modal-content form').attr('action', 'http://localhost:3000/RBPL/RBPL-TEORI/public/admin/editStok');

    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost:3000/RBPL/RBPL-TEORI/public/admin/ambilStok",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#id").val(data.id_stok);
        $("#nama").val(data.nama_stok);
        $("#satuan").val(data.satuan_stok);
        $("#kuantitas").val(data.jumlah_stok);
        $("#minimum").val(data.min_stok);
      },
    });
  });
});
