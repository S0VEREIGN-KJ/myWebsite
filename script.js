

document.addEventListener("DOMContentLoaded", () => {
    const typewriterText = document.querySelector(".typewriter-text");
    const words = ["BSIT GRADUATE","DOST-CAR LODIxR Intern", "COMPUTER LITERATE","TESDA CSS NC2 HOLDER", "PHOTO EDITOR", "VIDEO EDITOR" ]; // Add the words you want to cycle through
    let wordIndex = 0;
    let charIndex = 0;
    let isDeleting = false;
    const typingSpeed = 100; // Speed of typing
    const deletingSpeed = 200; // Speed of deleting
    const delayBetweenWords = 400; // Pause before typing the next word
    const initialDelay = 1000; // Delay before the first word starts typing (0.5 seconds)

    function typeEffect() {
        const currentWord = words[wordIndex];
        const displayedText = isDeleting
            ? currentWord.substring(0, charIndex--)
            : currentWord.substring(0, charIndex++);

        typewriterText.textContent = displayedText;

        if (!isDeleting && charIndex === currentWord.length) {
            // Pause at the end of a word
            setTimeout(() => (isDeleting = true), delayBetweenWords);
        } else if (isDeleting && charIndex === 0) {
            // Move to the next word
            isDeleting = false;
            wordIndex = (wordIndex + 1) % words.length;
        }

        const currentSpeed = isDeleting ? deletingSpeed : typingSpeed;
        setTimeout(typeEffect, currentSpeed);
    }

    // Add initial delay before starting the typing effect
    setTimeout(() => {
        typeEffect();
    }, initialDelay);
});

const hamburg = document.querySelector(".hamburg");
const dropdown = document.querySelector(".dropdown");
const cancelBtn = document.querySelector(".cancel");
const menuLinks = document.querySelectorAll(".dropdown .links a");



// Toggle when clicking hamburger
hamburg.addEventListener("click", (e) => {
  e.stopPropagation();
  dropdown.classList.toggle("active");
});

// Close when clicking outside
document.addEventListener("click", (e) => {
  if (!dropdown.contains(e.target) && !hamburg.contains(e.target)) {
    dropdown.classList.remove("active");
  }
});

// Close when clicking X button
cancelBtn.addEventListener("click", () => {
  dropdown.classList.remove("active");
});

// Close when clicking any menu link
menuLinks.forEach(link => {
  link.addEventListener("click", () => {
    dropdown.classList.remove("active");
  });
});
