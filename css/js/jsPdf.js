import html2pdf from "../../node_modules/html2pdf.js";
const generatePdfd = document.querySelector(".generatePdf");

function generatePDF() {
  const element = document.getElementById("content");
  html2pdf(element);
}

generatePdfd.addEventListener("click", generatePDF);
