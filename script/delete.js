$(document).ready(function() {
  $(".delete-plan").submit(function(e) {
      e.preventDefault();
      
      let confirmation = confirm("Are you sure you want to delete this plan?");
      if (confirmation) {
         
        // Mendapatkan data form
          let planId = $(this).serialize();

        // Kirim data ke server PHP
          $.ajax({
              url: "proses/delete.php",
              type: "POST",
              data: planId,
              dataType: "json",
              success: function(response) {
                  if (response.status === 'success') {
                      alert(response.message);
                      location.reload();
                  } else {
                      alert("Delete failed: " + response.message);
                  }
              }
          });
      }
  });
});
