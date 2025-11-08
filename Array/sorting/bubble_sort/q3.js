// 2. Medium

// Question: Modify the bubble sort function to sort in descending order and optimize it so that it stops if the array becomes sorted before completing all passes.
// Example:
// Input: [3, 8, 1, 4]
// Output: [8, 4, 3, 1]

// Focus: Optimization (early exit), descending sorting logic.


let array = [3, 8, 1, 4];

resBubbleSort = (arr) => {
    let count = arr.length;
    let swapped;
    for (let i = 0; i < array.length; i++) {
        swapped=false;
        for (let j = 0; j < array.length - 1; j++) {
            if (arr[j] < arr[j + 1]) {
                [arr[j], arr[j+1]] = [arr[j+1], arr[j]];
                swapped = true;
            }
        }   
        if (!swapped) break;
    }
    return arr;
}

console.log(resBubbleSort(array));







