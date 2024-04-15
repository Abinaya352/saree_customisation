document
  .getElementById("payment-form")
  .addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent form submission

    // Validate card number
    const cardNumberInput = document.getElementById("card-number");
    const cardNumber = cardNumberInput.value.replace(/\s+/g, ""); // Remove spaces from the card number
    const numDigits = cardNumber.length;

    if (numDigits !== 16 || isNaN(cardNumber)) {
      document.getElementById("payment-message").innerText =
        "Invalid card number. Please enter a valid 16-digit card number.";
      return; // Stop further execution
    }

    // Simulate payment processing
    setTimeout(function () {
      document.getElementById("payment-message").innerText =
        "Payment successful!";
      document.getElementById("payment-form").reset(); // Reset form fields
    }, 2000); // Simulate 2 seconds delay (replace with actual payment processing)
  });

document
  .getElementById("card-number")
  .addEventListener("input", function (event) {
    const input = event.target;
    const trimmedValue = input.value.replace(/\s+/g, ""); // Remove existing spaces
    const formattedValue = trimmedValue.replace(/(.{4})/g, "$1 ").trim(); // Insert space every 4 characters
    input.value = formattedValue;
  });

$(document).ready(function () {
  $("#expiry-date").on("input", function () {
    let expiryDate = $(this).val();
    expiryDate = expiryDate.replace(/\D/g, ""); // Remove non-digit characters
    if (expiryDate.length > 2) {
      const month = parseInt(expiryDate.substr(0, 2));
      if (month < 1 || month > 12) {
        document.getElementById("payment-message").innerText =
          "Invalid month. Please enter a month between 01 and 12.";
        return;
      }
      expiryDate = expiryDate.substr(0, 2) + "/" + expiryDate.substr(2); // Add "/" after first two digits
    }
    if (expiryDate.length > 5) {
      expiryDate = expiryDate.substr(0, 5); // Restrict to MM/YY format
    }
    document.getElementById("payment-message").innerText = ""; // Clear any previous error messages
    $(this).val(expiryDate);
  });
});
