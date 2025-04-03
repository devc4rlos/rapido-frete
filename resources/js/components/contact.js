import inputMask from "inputmask";

const phoneInput = document.getElementById("phone");
inputMask("(99) 99999-9999").mask(phoneInput);
