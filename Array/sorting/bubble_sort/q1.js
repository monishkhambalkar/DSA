// basic sort

// Ques 1 : Implement in bubble sort in javascript
// Write a funcio to sort the given array nums in ascending ordr

// Input : nums = [29, 10, 14, 37, 14]   output : [ 10, 14, 14, 29, 37 ]



const bubbleSort  = (arr)=>{
    const n = arr.length;
    for (let i = 0; i < n; i++) {   // n times
        for (let j = 0; j < n - 1; j++) {  // n times
            if (arr[j] > arr[j+1]) {
                [arr[j], arr[j+1]] = [arr[j+1], arr[j]]
            }
            
        }
    }
    return arr;
}

console.log(bubbleSort([29, 10, 14, 37, 14]));

// it means above programm is "worst time complexity = O(n*n) = O(n^2)" // means using two time loop

// Best time complexity O(n)   When we use only one loop

// Average time complxity = O((n / 2) * n)  it means in first loop iterate all idex but in second loop interate ony n / 2 index

// Space complexity for above bubble sort code we using O(n) becuas ewe not using anothe array we are using only one arrya 





