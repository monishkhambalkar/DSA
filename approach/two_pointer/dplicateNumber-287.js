function findDuplicate(nums){

    let left = 0;
    let right = nums.length - 1;
    let numsSet = new Set();
    while (left < right){
        if (numsSet.has(nums[left])){
            return nums[left];
        }else{
            numsSet.add(nums[left]);
            left++;
        }
        
        if (numsSet.has(nums[right])){
            return nums[right];
        }else{
            numsSet.add(nums[right]);
            right--;
        }
    }

}

let nums = [1,3,4,2,2]
console.log(findDuplicate(nums));





