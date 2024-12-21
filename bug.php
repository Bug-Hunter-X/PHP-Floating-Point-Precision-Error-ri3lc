function foo(a, b) {
  if (a === b) {
    return true; 
  }
  return false;
}

//This function will always return false for floating point numbers that are extremely close but not exactly equal due to floating-point precision errors.

var result = foo(0.1 + 0.2, 0.3);
console.log(result); // Outputs false, even though 0.1 + 0.2 is very close to 0.3

function foo(a, b) {
  const epsilon = 1e-10; //A small number to account for floating point precision errors
  return Math.abs(a - b) < epsilon;
}

//This corrected version will return true when the numbers are sufficiently close to each other
var result = foo(0.1 + 0.2, 0.3);
console.log(result); // Outputs true