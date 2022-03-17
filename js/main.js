function searchbar() {
  let input = document.getElementById("search").value;
  input = input.toLowerCase();
}
const f = document.getElementById("form");
const q = document.getElementById("query");

function submitted(event) {
  event.preventDefault();
  const url = "#" + q.value;
  const win = window.open(url, "_self");
  win.focus();
}
const m = (document.querySelector("mailIndex").onclick = Email());

function Email() {
  f.addEventListener("submit", submitted);
  window.open(
    "https://www.google.com/",
    "Google",
    "width=400,height=425,scrollbars=no,toolbar=no,location=no"
  );
  return false;
}
