var maxSubArray = function(nums) {

    let maxValSubArray = {};
    let outerLoopCount = 1;

    for(let i = 0; i < nums.length; i++){

        let sum = 0;
        let temp = [];

        // console.log("\n============================");
        // console.log("START outer loop i =", i);
        // console.log("============================");

        for(let j = i; j < nums.length; j++){

            // console.log("\n---- INNER LOOP ----", outerLoopCount++);
            // console.log("Before update:");
            // console.log("j =", j);
            // console.log("nums[j] =", nums[j]);
            // console.log("sum =", sum);
            // console.log("temp =", temp);

            sum += nums[j];
            temp.push(nums[j]);

            // console.log("After update:");
            // console.log("new sum =", sum);
            // console.log("new temp =", temp);

            maxValSubArray[sum] = [...temp];

            // console.log("Stored:");
            // console.log("maxValSubArray[" + sum + "] =", maxValSubArray[sum]);
        }
    }

    console.log("length ", Object.entries(maxValSubArray).length);
    let maxKey = Math.max(...Object.keys(maxValSubArray).map(Number));

    return maxValSubArray[maxKey];
};

let nums = [-2,1,-3,4,-1,2,1,-5,4];

let result = maxSubArray(nums);
// console.log("\nFINAL RESULT:");
// console.log(result);


var maxSubArray = function(nums) {
    let maxValSubArray = {};

    for(let i = 0; i < nums.length; i++){
        let sum = 0;
        let temp = [];

        for(let j = i; j < nums.length; j++){
            sum += nums[j];
            temp.push(nums[j]);
            maxValSubArray[sum] = [...temp];
        }
    }

    let maxKey = Math.max(...Object.keys(maxValSubArray).map(Number));

    return maxKey; 
};

let nums = [-2,1,-3,4,-1,2,1,-5,4];

console.log(maxSubArray(nums)); // 6
