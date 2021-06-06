$(".approve").click(function () {
  var $row = $(this).closest("tr"); // Find the row
  var $pid = $row.find(".pid").text(); // Find the text

  const ajax = new XMLHttpRequest();
  var method = "GET";
  var url =
    "http://localhost/Hospital%20Management%20System/admin/patientdata.php";
  var asynchronous = true;

  ajax.open(method, url, asynchronous);
  ajax.onload = function () {
    if ((ajax.status = 200)) {
      const data = JSON.parse(ajax.responseText);

      for (let i = 0; i < data.length; i++) {
        if ($pid == data[i].pid) {
          updateStatus($pid);
        }
      }
    }
  };
  ajax.send();
});

function updateStatus(eID) {
  $.ajax({
    url: "updatestatus-patient.php?id=" + eID,
    type: "POST",
    cache: false,
    success: function () {
      console.log("sucess");
      window.location.href =
        "http://localhost/Hospital%20Management%20System/admin/showunapp-patient.php";
    },
  });
}
