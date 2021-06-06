const ajax = new XMLHttpRequest();
var method = "GET";
var url =
  "http://localhost/Hospital%20Management%20System/admin/doctordata.php";

var asynchronous = true;
var count1 = 0;
var count2 = 0;

ajax.open(method, url, asynchronous);
ajax.onload = function () {
  if ((ajax.status = 200)) {
    const data = JSON.parse(ajax.responseText);
    for (let i = 0; i < data.length; i++) {
      if (data[i].approve == 1) count1++;
      else count2++;
    }
  }

  document.getElementById("doc-count").innerText = count1;
  document.getElementById("wapp_doc").innerText = count2;
};

ajax.send();
