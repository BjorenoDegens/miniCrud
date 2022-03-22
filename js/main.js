const form = document.querySelector("#form");
const query = document.querySelector("#query");
const mailIndex = document.querySelector("#mailIndex");

//popup windows
mailIndex.addEventListener("click", () => {
  window.open(
    "contact.html",
    "Google",
    "width=400,height=425,scrollbars=no,toolbar=no,location=no"
  );
});

//Form/searchbar
form.addEventListener("submit", (e) => {
  e.preventDefault();
  const url = "#" + query.value;
  const win = window.open(url, "_self");
  win.focus();
});
