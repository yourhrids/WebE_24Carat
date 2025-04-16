const bar = document.getElementById("bar");
const nav = document.getElementById("navbar");
const closeBtn = document.getElementById("close");
if (bar) {
  bar.addEventListener("click", () => {
    nav.classList.add("active");
  });
}

if (closeBtn) {
  closeBtn.addEventListener("click", () => {
    nav.classList.remove("active");
  });
}

// Single product image select
var mainImage = document.getElementById("mainImg");
var smallImage = document.querySelectorAll("#smallImg");

smallImage.forEach(function (smallImages, index) {
  smallImages.addEventListener("click", function () {
    mainImage.src = smallImages.src;
  });
});


// 
<script>
document.getElementById("contactForm").addEventListener("submit", function(e) {
    e.preventDefault(); // prevent form submission

    let isValid = true;

    // Get values
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const subject = document.getElementById("subject").value.trim();
    const message = document.getElementById("message").value.trim();

    // Error spans
    const nameError = document.getElementById("nameError");
    const emailError = document.getElementById("emailError");
    const subjectError = document.getElementById("subjectError");
    const messageError = document.getElementById("messageError");

    // Reset error messages
    nameError.textContent = "";
    emailError.textContent = "";
    subjectError.textContent = "";
    messageError.textContent = "";

    // Name validation (letters and white spaces only)
    const nameRegex = /^[A-Za-z\s]+$/;
    if (!nameRegex.test(name)) {
        nameError.textContent = "Name can only contain letters and spaces.";
        isValid = false;
    }

    // Email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        emailError.textContent = "Please enter a valid email address.";
        isValid = false;
    }

    // Subject validation
    if (subject === "") {
        subjectError.textContent = "Subject is required.";
        isValid = false;
    }

    // Message validation
    if (message === "") {
        messageError.textContent = "Message is required.";
        isValid = false;
    }

    // If all fields valid
    if (isValid) {
        alert("Message sent successfully!");
        document.getElementById("contactForm").reset();
    }
});
</script>
