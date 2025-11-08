// Move all zeros to the end 

function moveZeroCount(arr){

    let nonZero = arr.filter(x => x != 0);
    let zero = Array(arr.length - nonZero.length).fill(0);
    return [...nonZero, ...zero];

}
// console.log(moveZeroCount([0, 1, 0, 3, 12]));

function moveZero(arr){
    let count = 0;
    for (let i = 0; i < arr.length; i++) {
        if(arr[i] !== 0) arr[count++] = arr[i];
    }
    while (count < arr.length) arr[count++] = 0;

    return arr;
}
// console.log(moveZero([0, 1, 0, 3, 12]));

function moveZeroelement(arr){
    let nonZero = 0;
    for (let i = 0; i < arr.length; i++) {
        if (arr[i] !== 0) {
            [arr[nonZero], arr[i]] = [arr[i], arr[nonZero]];
            console.log(" nonzero " + nonZero, " arrayIndex " + i);
            console.log(arr);
            nonZero++;
        }
    }
}
// console.log(moveZeroelement([0, 1, 0, 3, 12]));
moveZeroelement([0, 1, 0, 3, 12])

