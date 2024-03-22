// qnsno1
// alert("This is alert");
// document.write("Writing in document");
// console.log("This is console.log");
// console.warn("This is console.warn");
// print();

// qnsno2
// let num1 = parseInt(prompt("Enter first number"));
// let num2 = parseInt(prompt("Enter second number"));
// let operator = prompt("Enter operator");

// switch (operator) {
//   case "+":
//     alert(num1 + num2);
//     break;

//   case "-":
//     alert(num1 - num2);
//     break;
//   case "/":
//     alert(num1 / num2);
//     break;
//   case "*":
//     alert(num1 * num2);
//     break;
//   case "%":
//     alert(num1 % num2);
//     break;
//   default:
//     alert("Enter valid operator");
// }

// qnsno3

// function updateClock() {
//   const now = new Date();
//   const year = now.getFullYear();
//   const month = (now.getMonth() + 1).toString().padStart(2, "0");
//   const day = now.getDate().toString().padStart(2, "0");
//   const hours = now.getHours().toString().padStart(2, "0");
//   const minutes = now.getMinutes().toString().padStart(2, "0");
//   const seconds = now.getSeconds().toString().padStart(2, "0");
//   const ampm = hours >= 12 ? "PM" : "AM";
//   const dayOfWeek = [
//     "Sunday",
//     "Monday",
//     "Tuesday",
//     "Wednesday",
//     "Thursday",
//     "Friday",
//     "Saturday",
//   ][now.getDay()];

//   const formattedTime = `${year}-${month}-${day} ${
//     hours % 12
//   }:${minutes}:${seconds} ${ampm} ${dayOfWeek}`;
//   document.body.textContent = formattedTime;
// }

// setInterval(updateClock, 1000);

// updateClock();

// qns.no4
// function changeText() {
//   const paragraph = document.getElementById("myParagraph");
//   paragraph.textContent = "Text changed by DOM function!";
// }
// const button = document.getElementById("myButton");
// button.addEventListener("click", changeText);
