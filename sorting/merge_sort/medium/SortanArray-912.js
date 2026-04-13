function mergeSort(arr, left = 0, right = arr.length - 1) {

    if (left >= right) {
        return;
    }
    let mid = Math.floor((left + right) / 2);

    mergeSort(arr, left, mid);
    mergeSort(arr, mid + 1, right);

    merge(arr, left, mid, right);
}

function merge(arr, left, mid, right){
    
    let i = left;
    let j = mid + 1;
    let k = 0;
    let temp = [];

    while(i <= mid && j <= right){
        if(arr[i] < arr[j]){
            temp[k] = arr[i];
            i++;
        }else{
            temp[k] = arr[j];
            j++
        }
        k++;
    }

    while(i<= mid){
        temp[k] = arr[i];
        i++; k++;
    }
    while(j <= right){
        temp[k] = arr[j];
        j++; k++; 
    }

    for(let x = 0; x < temp.length; x++){

        arr[left + x] = temp[x];
    }
}

let arr = [5, 2, 3, 1];
// mergeSort(arr, 0, arr.length - 1)
console.log(mergeSort(arr, 0, arr.length - 1));