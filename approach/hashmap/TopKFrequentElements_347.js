function  getTopKFrequent(nums, k){
    let map =new Map();
    let temp = [];
    for(let num of nums){
        map.set(num, (map.get(num)|| 0) + 1);
    }
    for(let [key, value] of map){
        temp.push([key, value]);
    }
    temp.sort((a, b)=> b[1] - a[1]);
    return temp.slice(0, k).map(item => item[0])
}



console.log(getTopKFrequent([1,1,1,2,2,3,3,3,4], 2));
