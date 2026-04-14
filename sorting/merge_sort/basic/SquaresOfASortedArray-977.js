

function mergeSortedSquares(nums, left = 0, right  = nums.length - 1){

    if(left > right) return [];

    const mid = Math.floor((left + right) / 2);

    let leftSquares = mergeSortedSquares(nums, left, mid);
    let rightSquares = mergeSortedSquares(nums, mid + 1, right);

    return merge(leftSquares, rightSquares);
}


function merge(left, right){
    let  i = 0;
    let j = 0;
    let k = 0;
    const merged = [];

    while(i < left.length && j < right.length){
        if(left[i] < right[j]){
            merged[k] = square(left[i]);
            i++
        }else{
            merged[k] = square(right[j]);
            j++;
        }
        k++;
    }

    while(i < left.length){
        merged[k] = square(left[i]);
        i++;
        k++;
    }

    while(j < right.length){
        merged[k] = square(right[j]);
        j++;
        k++;
    }

    return merged;
}


function square(num){
    return num * num;
}


console.log(mergeSortedSquares([-4, -1, 0, 3, 10], 0,4));