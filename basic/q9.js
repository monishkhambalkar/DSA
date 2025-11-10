// Find the sum of all subarrays

function sumOfAllSubarrays(arr){
    let total = 0
    let n = arr.length;
    for (let i = 0; i < n; i++) {
        total += arr[i] * arr[i] * (n - i);
        console.log(total)
    }

    return total;
}
arr = [1, 2, 3]
console.log("final", sumOfAllSubarrays(arr));