$(".approve").click(function () {
  var $row = $(this).closest("tr"); // Find the row
  var $email = $row.find(".email").text(); // Find the text

  const ajax = new XMLHttpRequest();
  var method = "GET";
  var url =
    "http://localhost/Hospital%20Management%20System/admin/appointment-data.php";
  var asynchronous = true;

  ajax.open(method, url, asynchronous);
  ajax.onload = function () {
    if ((ajax.status = 200)) {
      const data = JSON.parse(ajax.responseText);

      for (let i = 0; i < data.length; i++) {
        if ($email == data[i].email) {
          updateStatus($email);
        }
      }
    }
  };
  ajax.send();
});

function updateStatus(email) {
  $.ajax({
    url: "appointment-status.php?email=" + email,
    type: "POST",
    cache: false,
    success: function () {
      console.log("sucess");
      window.location.href =
        "http://localhost/Hospital%20Management%20System/admin/approve-appointments.php";
    },
  });
}
