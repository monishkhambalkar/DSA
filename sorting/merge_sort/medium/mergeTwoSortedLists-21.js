function mergeTwoSortedLists(arr1, arr2) {
    let merged = []
    let i = 0;
    let j = 0;
    let k = 0;

    while(i < arr1.length && j < arr2.length){
        if(arr1[i] < arr2[j]){
            merged[k] =  arr1[i];
            i++;
        }else{
            merged[k] = arr2[j];
            j++;
        }
        k++;
    }

    while(i < arr1.length){
        merged[k] =  arr1[i];
        i++; k++;
    }

    while(i < arr2.length){
        merged[k] =  arr2[j];
        j++; k++;
    }

    return merged;
}

console.log(mergeTwoSortedLists([1, 2, 4], [1, 3, 4]))