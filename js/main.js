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

f.addEventListener("submit", submitted);
