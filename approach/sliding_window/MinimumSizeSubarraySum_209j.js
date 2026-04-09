function getMinimumSizeSubarraySum(s, target){
    let min = Infinity;
    let left = 0;
    let sum = 0;
    for(let right = 0; right < s.length; right++){
        sum += s[right];  
        console.log("Sum ", sum);
       while(sum >= target){
            console.log("while loop");

            console.log("min ", min, "right ", right, "left ", left);

            min = Math.min(min, right - left + 1);
            console.log("min ", min);
            sum -= s[left];
            left++;
            console.log("sum", sum);
            console.log("left", left);
        }

        console.log();
    }
    return min;
}

console.log(getMinimumSizeSubarraySum([2, 3, 1, 2, 4, 3], 7)) // 2
console.log(getMinimumSizeSubarraySum([1, 4, 4], 4)) // 1
console.log(getMinimumSizeSubarraySum([1, 1, 1, 1, 1, 1, 1, 1], 11)) // Infinity


/*
Approch  : 


add 2
add 3
add 1
add 2

sum = 8 >= 7


while(sum >= target){
    min = Math.min(min, right - left + 1);
    sum -= s[left];
    left++;
}

min = 4

*/