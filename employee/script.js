const navbar = document.querySelector("#header");
    const item = navbar.querySelector("a:first-child");
    item.classList.add("active")

    navbar.addEventListener("click", (event) => {
    const li = event.target.closest("a");
    
 



// Get the current URL path
var path = window.location.pathname;

// Find all the <a> elements in the navigation bar
var navLinks = document.querySelectorAll('nav ul li a');


// Loop through each <a> element and check if the href matches the current URL
for (var i = 0; i < navLinks.length; i++) {
  if (navLinks[i].getAttribute('href') === path) {
    
    

    navLinks[i].classList.add("active");
  }
}



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

