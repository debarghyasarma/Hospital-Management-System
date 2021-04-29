function transferRow() {
  // var theTbl = document.getElementById("doctor-table");
  document.querySelector(".btn").onclick = function () {
    var row = this.closest("tr").find(".nr").text();
    console.log(row);
  };

  const ajax = new XMLHttpRequest();
  var method = "GET";
  var url = "http://localhost/Hospital%20Management%20System/doctordata.php";

  ajax.open(method, url, true);
  ajax.send();

  ajax.onload = function () {
    if (this.readyState == 4 && this.status == 200) {
      const data = JSON.parse(this.responseText);
    }
  };
}
