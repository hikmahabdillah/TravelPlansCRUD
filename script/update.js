$(document).ready(function() {
  $("#updateplan").on("submit", function(e) {
    e.preventDefault();

    // Ambil semua data form
    var formData = $(this).serialize();

    // Kirim data ke server menggunakan AJAX
    $.ajax({
      url: "proses/update.php",
      type: "POST",
      data: formData,
      dataType: "json",
      success: function(response) {
        if (response.status === 'success') {
          alert("Update berhasil!");
          window.location.href = './'; // Redirect ke halaman utama
        } else {
          $("#error-msg").html(response.message);
        }
      }
    });
  });
});
