$(".approve").click(function () {
  var $row = $(this).closest("tr"); // Find the row
  var $drid = $row.find(".drid").text(); // Find the text

  const ajax = new XMLHttpRequest();
  var method = "GET";
  var url =
    "http://localhost/Hospital%20Management%20System/admin/doctordata.php";
  var asynchronous = true;

  ajax.open(method, url, asynchronous);
  ajax.onload = function () {
    if ((ajax.status = 200)) {
      const data = JSON.parse(ajax.responseText);

      for (let i = 0; i < data.length; i++) {
        if ($drid == data[i].rno) {
          updateStatus($drid);
        }
      }
    }
  };
  ajax.send();
});

function updateStatus(eID) {
  $.ajax({
    url: "updatestatus-doctor.php?id=" + eID,
    type: "POST",
    cache: false,
    success: function () {
      window.location.href =
        "http://localhost/Hospital%20Management%20System/admin/show-unappdoc.php";
    },
  });
}
