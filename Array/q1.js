// sort() method in js 

const fruits = ["dragon", "apple", "date", "cherry", "banana"];

console.log(fruits.sort) // it will work for string but not number

const nums = [10, 5, 18, 1, 27];
const people = [
    {name : "Monish", age : 23},
    {name : "khusha", age : 45},
    {name : "karan", age : 30},
    {name : "harsh", age : 15}
]

const compareFunctionForObj = (a, b)=>{
    return a.age - b.age;
}

console.log(people.sort(compareFunctionForObj));