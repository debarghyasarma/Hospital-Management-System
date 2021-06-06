$(".submit-btn").click(function () {
  var pname = document.getElementById("pname").innerText;
  var dname = document.getElementById("dname").innerText;
  var mobile = document.getElementById("mobile").innerText;
  var address = document.getElementById("address").innerText;
  var symptoms = document.getElementById("symptoms").innerText;
  var admit_date = document.getElementById("admit-date").innerText;
  var release_date = document.getElementById("release-date").innerText;
  var days_spent = document.getElementById("days-spent").innerText;

  var inputs = document.getElementsByTagName("input");
  var roomcharge = inputs[0];
  var doctorfee = inputs[1];
  var medicinecost = inputs[2];
  var othercharges = inputs[3];

  window.location.href =
    "bill-pdf.php?pname=" +
    pname +
    "&dname=" +
    dname +
    "&mobile=" +
    mobile +
    "&address=" +
    address +
    "&symptoms=" +
    symptoms +
    "&roomcharge=" +
    roomcharge.value +
    "&doctor-fee=" +
    doctorfee.value +
    "&medicine-cost=" +
    medicinecost.value +
    "&other-charges=" +
    othercharges.value +
    "&admit_date=" +
    admit_date +
    "&release_date=" +
    release_date +
    "&days_spent=" +
    days_spent;
});
