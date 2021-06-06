const ajax1 = new XMLHttpRequest();
var method = "GET";
var url1 =
  "http://localhost/Hospital%20Management%20System/admin/patientdata.php";
var asynchronous = true;
var pcount1 = 0;
var pcount2 = 0;

ajax1.open(method, url1, asynchronous);
ajax1.onload = function () {
  if ((ajax1.status = 200)) {
    const data = JSON.parse(ajax1.responseText);
    for (let i = 0; i < data.length; i++) {
      if (data[i].approve == 1) pcount1++;
      else pcount2++;
    }
  }

  document.getElementById("patient-count").innerText = pcount1;
  document.getElementById("wapp_patient").innerText = pcount2;
};
ajax1.send();
