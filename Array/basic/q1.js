const arr = [10, 5, 20, 8, 25];

let max = arr[0];
let min = arr[0];

for (let i = 0; i < arr.length; i++) {
    const element = arr[i];
    
    if (max < element) {
        max = element
    }
    if (min > element) {
        min = element
    }
}
console.log("max ", max);
console.log("min ", min);


console.log("********************************************************")
console.log("usuning math default functioon")
let max1 = arr[0];
let min1 = arr[0];
for (let j = 0; j < arr.length; j++) {
    const element = arr[j];
    max1 = Math.max(max1, element)
    min1 = Math.min(min, element);
}
console.log(max1)
console.log(min1)


console.log("********************************************************")
console.log("usuning resducer default functioon")


let max2 = arr.reduce((a, b)=>(a> b ? a: b))
let min2 = arr.reduce((a, b)=>(a< b ? a: b))

console.log(max2)
console.log(min2)