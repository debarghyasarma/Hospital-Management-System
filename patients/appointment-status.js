const ajax = new XMLHttpRequest();
var method = "GET";
var url =
  "http://localhost/Hospital%20Management%20System/patients/appointment-data.php";
var asynchronous = true;

ajax.open(method, url, asynchronous);
ajax.onload = function () {
  if ((ajax.status = 200)) {
    const data = JSON.parse(ajax.responseText);

    for (let i = 0; i < data.length; i++) {
      if (data[i].approve == 1) {
        document.querySelector(".app-bar").innerText = "Approved";
        document.getElementById("app-bar").style.backgroundColor = "#6697f2";
      }
    }
  }
};
ajax.send();
