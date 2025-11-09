// Merge two sorted arrays

const merged = [...[1,3,5], ...[2,4,6]].sort();

console.log(merged);

// *******************************************

function mergeTwoSortedArrays(arr1, arr2){
    let i = 0; let j = 0; let result = [];

    while (i < arr1.length && j < arr2.length) {
        if (arr1[i] < arr2[j]) {
            result.push(arr1[i])
            i++;
        }else{
            result.push(arr1[j])
            j++;
        }
    }
    
    while(j < arr2.length){
        result.push(arr2[j])
        j++;
    }


    return result;
}
console.log(mergeTwoSortedArrays([1, 3, 5], [2, 4, 6]));