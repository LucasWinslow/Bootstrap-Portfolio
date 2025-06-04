<script>
const phrases = ["Hello, I'm Lucas.", "Web Developer.", "Creative Thinker.", "Problem Solver."];
let currentPhrase = 0;
let currentChar = 0;
const textElement = document.getElementById("typed-text");

function type() {
  if (currentChar < phrases[currentPhrase].length) {
    textElement.textContent += phrases[currentPhrase].charAt(currentChar);
    currentChar++;
    setTimeout(type, 100);
  } else {
    setTimeout(erase, 1500);
  }
}

function erase() {
  if (currentChar > 0) {
    textElement.textContent = phrases[currentPhrase].substring(0, currentChar - 1);
    currentChar--;
    setTimeout(erase, 50);
  } else {
    currentPhrase = (currentPhrase + 1) % phrases.length;
    setTimeout(type, 500);
  }
}

document.addEventListener("DOMContentLoaded", () => {
  type();
});
</script>
