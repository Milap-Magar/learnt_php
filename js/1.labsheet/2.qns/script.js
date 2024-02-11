const value1 = window.prompt("Enter your 1st number:");
const value2 = window.prompt("Enter your second number:");
const op = parseInt(
  window.prompt("Add an operator: 1) Sum 2) Substract 3)Divide 4)Multiply")
);
const result = [];

switch (op) {
  case 1:
    result.push(parseFloat(value1) + parseFloat(value2));
    break;
  case 2:
    result.push(parseFloat(value1) - parseFloat(value2));
    break;
  case 3:
    result.push(parseFloat(value1) / parseFloat(value2));
    break;
  case 4:
    result.push(parseFloat(value1) * parseFloat(value2));
    break;
  default:
    alert("Error Inputs");
    break;
}

alert(`The result of the values provided value is ${result[0]}`);
