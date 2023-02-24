fetch("src/includes/header.html")
  .then((response) => {
    return response.text();
  })
  .then((data) => {
    document.querySelector(".header").innerHTML = data;
  });

fetch("src/includes/footer.html")
  .then((response) => {
    return response.text();
  })
  .then((data) => {
    document.querySelector(".footer").innerHTML = data;
  });

setTimeout(() => {
  document.querySelector(".header h1").addEventListener("click", (e) => {
    e.target.classList.toggle("test");
  });
}, 100);
