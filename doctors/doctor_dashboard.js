var dname = document.getElementById("dname").innerText;
countAppointments(dname);
countPatients(dname);
countDischarged(dname);

function countAppointments(dname) {
  const ajax = new XMLHttpRequest();
  var method = "GET";
  var url =
    "http://localhost/Hospital%20Management%20System/patients/appointment-data.php";

  var asynchronous = true;
  var count = 0;

  ajax.open(method, url, asynchronous);
  ajax.onload = function () {
    if ((ajax.status = 200)) {
      const data = JSON.parse(ajax.responseText);
      for (let i = 0; i < data.length; i++) {
        if (data[i].approve == 1) {
          count++;
        }
      }
    }

    document.getElementById("app-count").innerText = count;
  };

  ajax.send();
}

function countPatients(dname) {
  const ajax = new XMLHttpRequest();
  var method = "GET";
  var url =
    "http://localhost/Hospital%20Management%20System/doctors/patientdata.php";

  var asynchronous = true;
  var count = 0;

  ajax.open(method, url, asynchronous);
  ajax.onload = function () {
    if ((ajax.status = 200)) {
      const data = JSON.parse(ajax.responseText);
      for (let i = 0; i < data.length; i++) {
        if (
          data[i].doctor_assigned == dname &&
          data[i].approve == 1 &&
          data[i].discharge == 0
        ) {
          count++;
        }
      }
    }

    document.getElementById("patient-count").innerText = count;
  };

  ajax.send();
}

function countDischarged() {
  const ajax = new XMLHttpRequest();
  var method = "GET";
  var url =
    "http://localhost/Hospital%20Management%20System/doctors/patientdata.php";

  var asynchronous = true;
  var count = 0;

  ajax.open(method, url, asynchronous);
  ajax.onload = function () {
    if ((ajax.status = 200)) {
      const data = JSON.parse(ajax.responseText);
      for (let i = 0; i < data.length; i++) {
        if (data[i].doctor_assigned == dname && data[i].discharge == 1) {
          count++;
        }
      }
    }

    if (count > 0) document.getElementById("discharge-count").innerText = count;
    else document.getElementById("discharge-count").innerText = 0;
  };

  ajax.send();
}
