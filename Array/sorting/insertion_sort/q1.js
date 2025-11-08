// question 3 : implement insertion sort in js 
// write a function to sort the given array nums in ascending order

// inout name [29, 10, 14, 27, 14, 33, 8, 11]


function insertionSort(arr){
    const n = arr.length;

    for (let i = 1; i < n; i++) {
        const key = arr[i];
        let j = i - 1;   // in start will (0) i start from 1 and i - 1;
        while(j >= 0 && arr[j] > key){
            arr[j + 1] = arr[j];
            j--;
        }
     
        arr[j + 1] = key;
    }

    return arr;
}

console.log(insertionSort([29, 10, 14, 27, 14, 33, 8, 11]));

// time complexity = O(n^2)
// space complexiy = O(n)