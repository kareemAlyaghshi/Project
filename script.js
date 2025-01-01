document.addEventListener("DOMContentLoaded", function() {
    // Toggle Navbar
    const navbarToggle = document.getElementById("navbar-toggle");
    const navbar = document.getElementById("navbar");

    navbarToggle.addEventListener("click", function() {
        navbar.classList.toggle("active");
    });

    // Smooth Scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Alert on Shop Now button click
    document.getElementById("hero").querySelector("button").addEventListener("click", function() {
        alert("Shop Now button clicked!");
    });

    // Form Submission Alert
    document.querySelector(".form button").addEventListener("click", function() {
        const emailInput = document.querySelector(".form input").value;
        alert(`Thank you for signing up with the email: ${emailInput}`);
    });
});
