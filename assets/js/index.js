// for get to know image
  const slides = document.querySelectorAll('.slide');
  let index = 0;

  setInterval(() => {
    slides[index].classList.remove('active');
    index = (index + 1) % slides.length; // cycle to next image
    slides[index].classList.add('active');
  }, 5000); // change every 3 seconds
//   end of get to know

// Function to animate the counter
function animateCounter(id, target, duration) {
    let current = 0;
    const step = target / (duration / 50); // The step to increase the counter
    const interval = setInterval(() => {
        current += step;
        if (current >= target) {
            current = target;
            clearInterval(interval); // Stop when the target is reached
        }
        document.getElementById(id).textContent = Math.floor(current);
    },100); // Update every 50 milliseconds
}

// Call the function for each counter
animateCounter('counter1', 36, 1000); // Registered users
animateCounter('counter2', 9, 1000); // Registered users
animateCounter('counter3', 174, 1000);  // Countries supported
animateCounter('counter4', 10, 1000);  // average investment
animateCounter('counter5', 8, 1000);  // average investment






document.addEventListener("DOMContentLoaded", function () {
    const logos = document.querySelectorAll("[id^='type-']");
    const texts = document.querySelectorAll("[id^='text-']");

    // Hide all text divs initially
    texts.forEach(text => text.style.display = "none");

    // Set the first logo as active by default
    logos[0].style.backgroundColor = "#1e96c6";
    texts[0].style.display = "block";

    logos.forEach((logo, index) => {
        logo.addEventListener("click", function () {
            // Hide all text divs
            texts.forEach(text => text.style.display = "none");

            // Remove active class from all logos
            logos.forEach(l => l.style.backgroundColor = "");

            // Show the clicked text div
            document.getElementById(`text-${index + 1}`).style.display = "block";

            // Set active background color
            logo.style.backgroundColor = "#1e96c6";
        });
    });
});