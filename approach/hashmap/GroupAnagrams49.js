function getGroupAnagram(strs){
    let map = new Map();
    for(let i = 0; i < strs.length; i++){
        let sorted = strs[i].split("").sort().join("");
        if(map.has(sorted)){
            map.get(sorted).push(strs[i])
        }else{
            map.set(sorted, [strs[i]]);
        }
    }
    return [...map.values()];
}
let strs = ["eat","tea","tan","ate","nat","bat"];
console.log(getGroupAnagram(strs));

// get key of max val 
function getKeyWithMaxValue(nums){

    let maxKey = null;
    let maxValue = -Infinity;

    for(let key in nums){
        if(nums[key] > maxValue){
            maxValue = nums[key];
            maxKey = key;
        }
    }
    return maxKey;
}

let map =  {1 : 2, 2 : 1, 3:5 };

console.log(getKeyWithMaxValue(map));

// using reduce function 

const maxKey = [...map.entries()].reduce((a, b)=> b[1] > a[1] ? b : a)[0];
console.log(maxKey)