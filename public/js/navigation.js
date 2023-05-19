document.addEventListener("DOMContentLoaded", function() {
    // Select all navigation links
    const navLinks = document.querySelectorAll("nav a");

// Attach click event listeners to the navigation links
    navLinks.forEach(function(link) {
      link.addEventListener("click", function(e) {
    e.preventDefault();

// Get the target section ID from the href attribute
    const targetId = this.getAttribute("href");

// Scroll smoothly to the target section
    document.querySelector(targetId).scrollIntoView({
      behavior: "smooth"
        });
      });
  });
});