const navbar = document.querySelector("#header");
    const item = navbar.querySelector("a:first-child");
    item.classList.add("active")

    navbar.addEventListener("click", (event) => {
    const li = event.target.closest("a");

    if (li) {
    // Remove the active class from the current page
    const currentLi = document.querySelector(".active");
        if (currentLi) {
        currentLi.classList.remove("active");
        }

    // Add the active class to the clicked page
    li.classList.add("active");

    // Update the browser's history
    history.pushState({}, "", li.href);
  }
});

