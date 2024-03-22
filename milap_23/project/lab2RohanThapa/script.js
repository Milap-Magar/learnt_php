let container = document.getElementById("container");
function addParagraph() {
  let paragraph = document.createElement("p");
  paragraph.textContent = "New paragraph added!";
  container.appendChild(paragraph);
}

function removeParagraph() {
  let paragraphs = container.getElementsByTagName("p");
  if (paragraphs.length > 0) {
    let lastParagraph = paragraphs[paragraphs.length - 1];
    container.removeChild(lastParagraph);
  } else {
    alert("No paragraph to remove!");
  }
}

function modifyParagraph() {
  let paragraphs = container.getElementsByTagName("p");
  if (paragraphs.length > 0) {
    let firstParagraph = paragraphs[0];
    firstParagraph.textContent = "First paragraph modified!";
  } else {
    alert("No paragraph to modify!");
  }
}

document.getElementById("addButton").addEventListener("click", addParagraph);

document
  .getElementById("removeButton")
  .addEventListener("click", removeParagraph);

document
  .getElementById("modifyButton")
  .addEventListener("click", modifyParagraph);
