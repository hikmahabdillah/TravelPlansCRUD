$(document).ready(function() {
  $("#insert-submit").submit(function(e) {
      e.preventDefault();

      // Mendapatkan data form
      var formData = $(this).serialize();

      // Kirim data ke server PHP
      $.ajax({
          url: "proses/insert.php",
          type: "POST",
          data: formData,
          dataType: "json",
          success: function(response) {
              if (response.status === 'success') {
                  alert(response.message);
                  location.reload();
              } else {
                  $("#error-msg").html(response.message);
              }
          }
      });
  });
});