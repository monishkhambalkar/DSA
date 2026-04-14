

/*
while three sum the value should not reapeate for same calulation or in save window or same array 

array = [1,2,3,4,5,6]
[1,2,3], [3,2,4]  => this allow 
[1,2,2], [1,3,3]  => this not allow

means 
index = 1 can use in array1 = [] and in array2 = [] but not gain in both 

*/

function threeSum(nums){

    nums.sort((a, b)=> a- b);
    const result = [];
    const n = nums.length;

    for(let i = 0; i < n - 2; i++){
        if(i > 0 && nums[i] === nums[i -1]) continue;

        if (nums[i] > 0) break;
        if (nums[i] + nums[i + 1] + nums[i + 2] > 0) break;
        if (nums[i] + nums[n - 2] + nums[n - 1] < 0) continue;


        while(left < right){
            const sum = nums[i] + nums[left] + nums[right];

            if(sum === 0){
                result.push([nums[i], nums[left], nums[right]]);
                while(left < right && nums[left]===nums[left + 1]) left++;
                while(left < right && nums[right]===nums[right - 1]) right--;
                left++;
                right--;
            }else if(sum < 0){
                left++;
            }else{
                right--;
            }
        }
    }
    return result;
}


threeSum([-1,0,1,2,-1,-4])