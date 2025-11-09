// 3. Hard

// Question: Given an array of objects representing students {name, score}, sort the array by score in ascending order using bubble sort.
// Example:
// Input: [{name: 'Alice', score: 50}, {name: 'Bob', score: 40}]
// Output: [{name: 'Bob', score: 40}, {name: 'Alice', score: 50}]

// Focus: Sorting objects, comparing object properties, adapting bubble sort for complex structures.



let students = [
  { name: 'Bob', score: 40 },
  { name: 'Alice', score: 50 },
  { name: 'David', score: 60 },
  { name: 'Charlie', score: 70 }
];

let sortScore = (std) =>{
    let n = std.length;
    let swapped;

    for (let i = 0; i < n-1; i++) {
        swapped = false;
        for (let j = 0; j < n- i - 1; j++) {
            if (std[j].score > std[j+1].score) {
                [std[j], std[j+1]] = [std[j + 1], std[j]];
                swapped = true;
            }            
        }
        if (!swapped) break;
    }

    return std;
}

console.log(sortScore(students));