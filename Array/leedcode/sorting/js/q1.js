// 905. Sort Array By Parity

function sortArrayByParity(nums){
    let even = [];
    let odd = [];
    for (const element of nums) {
        if (element % 2 == 0) {
            even.push(element)
        }else{
            odd.push(element);
        }
    }
    return even.concat(odd);
}

