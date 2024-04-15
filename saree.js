// Function to populate the pattern select options
function populatePatternSelect(patternName) {
  var select = document.getElementById(patternName);
  var option = document.createElement("option");
  option.value = "0";
  option.text = "None";
  select.add(option);
  for (var i = 1; i <= 30; i++) {
    var option = document.createElement("option");
    option.value = "pattern" + i + ".png";
    option.text = "Pattern " + i;
    select.add(option);
  }
}

populatePatternSelect('blousePat');
populatePatternSelect('palluPat');
populatePatternSelect('bodyPat');
populatePatternSelect('borderTopPat');
populatePatternSelect('borderBottomPat');

function applyColor(section) {
  var sectionIdColor = section.concat('ColorInp');
  var selectedSectionId = section.concat('Rect');
  var selectedSectionIdPat = selectedSectionId.concat("Pat");
  
  //Applying Color
  var selectedColor = document.getElementById(sectionIdColor).value;
   document.getElementById(selectedSectionId).style.fill = selectedColor;
  
   //Appyling Pattern
   var selectedPat = section.concat("Pat");
   var selectedPatternValue = document.getElementById(selectedPat).value;
   if (selectedPatternValue!='0') {
    var selectedPattern = "./Pattern/".concat(selectedPatternValue);
    var sectionImage = section.concat("Image");
    var patternImage = document.getElementById(sectionImage);
    patternImage.setAttribute("href", selectedPattern);
    document.getElementById(selectedSectionIdPat).style.fill ="url(#".concat(section).concat("_pattern)");
    document.getElementById(selectedSectionIdPat).style.fillOpacity = 0.9;
   }
   else {
    document.getElementById(selectedSectionIdPat).style.fill ="white";
    document.getElementById(selectedSectionIdPat).style.fillOpacity = 0.01;
   }
   
   
}
document
  .getElementById("payment-button")
  .addEventListener("click", function () {
    // Redirect to the payment page or trigger the payment process
    window.location.href = "payment.html"; // Replace "payment.html" with the path to your payment page
  });
/*
  function applyPattern() {
  var selectedSectionId = document.getElementById("sectionSelect").value;
  var selectedSectionIdPat = selectedSectionId.concat("Pat");
  var selectedColor = document.getElementById("colorInput").value;
  var selectedPatternValue = document.getElementById("patternSelect").value;
  var selectedPattern = "./Pattern/".concat(selectedPatternValue);
  //alert(selectedPattern);

  // Apply the color
  var useGradient = document.getElementById("gradientCheckbox").checked;
  if (useGradient) {
    var gradientId = selectedSectionId + "Gradient";
    var stops = document.querySelectorAll("#" + gradientId + " stop");
    stops.forEach(function (stop) {
      stop.setAttribute("stop-color", selectedColor);
    });
  } else {
    document.getElementById(selectedSectionId).style.fill = selectedColor;
  }

  // Apply the pattern on top of the color

  var patternImage = document.getElementById("patternImage");
  patternImage.setAttribute("href", selectedPattern);
  document.getElementById(selectedSectionIdPat).style.fill =
    "url(#body_pattern)";
  document.getElementById(selectedSectionIdPat).style.fillOpacity = 0.9;
}
*/