$(".discharge").click(function () {
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
          dischargePatient($pid);
        }
      }
    }
  };
  ajax.send();
});

function dischargePatient(pid) {
  $.ajax({
    url: "patient-bill.php?pid=" + pid,

    type: "POST",
    cache: false,
    success: function () {
      window.location.href =
        "http://localhost/Hospital%20Management%20System/admin/patient-bill.php?pid=" +
        pid;
      updateDischarged(pid);
    },
  });
}

function updateDischarged(pid) {
  $.ajax({
    url: "updatepatients-discharged.php?pid=" + pid,

    type: "POST",
    cache: false,
    success: function () {
      window.location.href =
        "http://localhost/Hospital%20Management%20System/admin/discharge-patient.php";
    },
  });
}
