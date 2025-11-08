let array = [5, 2, 9, 1, 5];

let bubbleSort = (arr) =>{

    let count = arr.length;
    for (let i = 0; i < count; i++) {
        for (let j = 0; j < count - 1; j++) {
            //console.log(" before ", arr);
            if (arr[j] > arr[j + 1]) {

                [arr[j], arr[j+1]] = [arr[j+1], arr[j]];
                console.log(" after ", arr);
            }
        }
        // console.log(" ");
    }
    return arr;
}


console.log(bubbleSort(array));