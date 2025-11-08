// Find the second largest element

function secondLargest(arr){
    const unique = [...new Set(arr)].sort((a, b)=> b - a);
    return unique[1] ?? null;
}
// console.log(secondLargest([10, 5, 20, 8, 15]));

class MinHeap{
     constructor(){
        this.heap = [];
    }
    insert(val){
        this.heap.push(val);
        this.heap.sort((a, b)=> a - b);
        if (this.heap.length > 2) {
            this.heap.shift();
        }
    }
    getSecondLargest(){
        return this.heap.length < 2 ? null : this.heap[0];
    }
}

function secondLargestHeap(arr){
    let heap = new MinHeap();
    for (let num of arr) {
        heap.insert(num);
    }
    return heap.getSecondLargest();
}
console.log(secondLargestHeap([10, 5, 20, 8, 15]));