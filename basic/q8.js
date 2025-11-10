// Count the frequency of each element


function countFrequency(arr){
    let freq = new Map();
    for (let num of arr) {
        freq.set(num, (freq.get(num) || 0) +1)   
    }
    return freq;
}
const arr = [2, 3, 2, 5, 3, 2, 7];
const result = countFrequency(arr);
console.log(result);


function countFrequency1(arr){
    const freq = {};
    for (const num of arr) {
        freq[num] = (freq[num] || 0) + 1;
    }
    return freq;
}
console.log(countFrequency1([2, 3, 2, 5, 3, 2, 7]));


const freq = arr.reduce((acc, num)=>{
    acc[num] = (acc[num] || 0) + 1
    return acc;
}, {})
console.log(freq);