const f = document.querySelector("#form");
const q = document.querySelector("#query");
const m = document.querySelector("#mailIndex");

//popup windows
m.addEventListener("click", () => {
  window.open(
    "contact.html",
    "Google",
    "width=400,height=425,scrollbars=no,toolbar=no,location=no"
  );
});

//Form/searchbar
f.addEventListener("submit", (e) => {
  e.preventDefault();
  const url = "#" + q.value;
  const win = window.open(url, "_self");
  win.focus();
});
