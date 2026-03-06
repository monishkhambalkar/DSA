// function moveZeroEnd(nums){
//     let j = 0;
//     for(let i = 0; i < nums.length; i++){
//         if(nums[i] !== 0){
//             let temp = nums[i];
//             nums[i] = nums[j];
//             nums[j] = temp;
//             j++;
//         }
//     }
//     // return nums;
// }


var moveZeroEnd = function(nums){
    let j = 0;
    for(let i = 0; i < nums.length; i++){
        if(nums[i] !== 0){
            let temp = nums[i];
            nums[i] = nums[j];
            nums[j] = temp;
            j++;
        }
    }
    return nums;
}

console.log(moveZeroEnd([0,1,0,3,12]));