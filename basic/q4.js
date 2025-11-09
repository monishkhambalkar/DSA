// Using Extra Array (Simple but O(n) space)
// ✅ Simpler logic but uses O(n) extra space.
// Rotate an array by k positions
// ➡️ Right Rotate (JS)
function rotateRight(array, k){
    const n  = array.length;
    k = k % n;
    return [...array.slice(n -k), ...array.slice(0, n - k)];
}
console.log(rotateRight([1,2,3,4,5,6,7], 3));


// Left Rotate (JS)

function rotateLeft(array, k){
    const n  = array.length;
    k = k % n;
    return [...array.slice(k), ...array.slice(0, k)];
}
console.log(rotateLeft([1,2,3,4,5,6,7], 3));


function rotateRight(arr, k) {
    const n = arr.length;
    k = k % n;

    reverse(arr, 0, n - 1)
    reverse(arr, 0, k - 1)
    reverse(arr, k, n - 1)

    return arr;
}

function reverse(arr, start, end){
    while (start < end) {
        [arr[start], arr[end]] = [arr[end], arr[start]];
        start++;
        end++
    }
}

console.log(rotateRight([1,2,3,4,5,6,7], 3)); // [5,6,7,1,2,3,4]