// 1.   Traversing an Array

// Using loops to iterate over arrays:
const arr = [1, 2, 3, 4, 5];

for (let i = 0; i < arr.length; i++) {
  console.log(arr[i]);
}

// 2. Common Array Algorithms

// Linear Search: Find a specific element in an array.
function linearSearch(arr, target) {
  for (let i = 0; i < arr.length; i++) {
    if (arr[i] === target) return i;
  }
  return -1;
}
const targetElement = 3;
console.log(
  `linearSearch the index number of ${targetElement} is `,
  linearSearch(arr, targetElement)
);

// 3. Sum of Array Elements (Easy)
// Problem: Given an array, find the sum of all elements.
// Solution:

// without default function
function sumArrayWithout(arr) {
  let sum = 0;
  for (let i = 0; i < arr.length; i++) {
    sum += arr[i];
  }
  return sum;
}
console.log(
  `with out function The sum of array is `,
  sumArrayWithout([1, 2, 3, 4])
); // Output: 10

//with default function
// arrow function
function sumArrayWith(arr) {
  return arr.reduce(
    (sum /*sum as accumulator */, num) /* num as item*/ => sum + num,
    0
  );
}

// simple function
// function sumArrayWith(arr) {
//   return arr.reduce(function (sum, item) {
//     return sum + item;
//   }, 0);
// }
console.log(`with function The of array is `, sumArrayWith([1, 2, 3, 4])); // Output: 10

// 4. Find the Largest Element (Easy)
// Problem: Find the largest element in a given array.
// Solution:

// without default functionn
function findLargest(arr) {
  let largest = arr[0];
  for (let i = 1; i < arr.length; i++) {
    if (arr[i] > largest) largest = arr[i];
  }
  return largest;
}

// with default function

function findLargest1(arr) {
  return Math.max(...arr);
}

console.log(
  `the largest element of an array without default function is `,
  findLargest([3, 1, 4, 1, 5, 9])
);

console.log(
  `the largest element of an array with default function is `,
  findLargest1([3, 1, 4, 1, 5, 9])
);

// 5.Check if Array is Sorted (Easy)
// Problem: Check whether a given array is sorted in ascending order.
// Solution:
function isSorted(arr) {
  for (let i = 0; i < arr.length; i++) {
    if (arr[i] > arr[i + 1]) return false;
  }
  return true;
}

console.log("first array is sorted ", isSorted([1, 2, 3, 4]));
console.log("second array is sorted ", isSorted([1, 3, 2, 4]));

//Reverse an Array
// without default function
function reverseArrayWithFor(arr) {
  let reverseArr = [];
  for (var i = arr.length - 1; i >= 0; i--) {
    reverseArr.push(arr[i]);
  }
  return reverseArr;
}

console.log(reverseArrayWithFor([1, 2, 3, 4]));

function reverseArrayWithFor(arr) {
  let reverseArr = [];
  for (var i = arr.length - 1; i >= 0; i--) {
    reverseArr.push(arr[i]);
  }
  return reverseArr;
}

console.log(reverseArrayWithFor([1, 2, 3, 4]));
