// class Node{
//     constructor(data){
//         this.data = data;
//         this.next = null
//     }
// }

// const { createRef } = require("react");

// class LinkedList{
//     constructor(){
//         this.head = null;
//     }

//     pushFront(head){

//         let newNode = new reverseList(head);

//         newNode.next = this.head
//         this.head = newNode;

//     }

//     print(){
//         let current = this.head;
//         let result = [];

//         while(current){
//             result.push(current.head);
//             current = current.next;
//         }

//         console.log(result);
//     }
// }


// let list = new LinkedList();

// let array = [1,2,3,4,5];
// for (let i = 0; i < array.length; i++) {
//     list.pushFront(array[i]);
// }
// list.print();




// function reverseList(head){
//     console.log(head);

//     let prev = null;
//     let current = head;

//     while(current){
//         let xx   = current.next;
//         current.next = prev;
//         prev = current;
//         current = newNode;
//     }
// }






// var reverseList = function(head) {
//     let prev = null;
//     let current = head;
//     console.log(" head ",head)
//     while(current){
//         let nextNode = current.next; 
//         console.log(" nextNode ",nextNode)
//         current.next = prev;  
//         console.log(" current.next ",current.next)   
//         console.log(" current ",current)       
//         prev = current;    
//         console.log(" prev ",prev)             
//         current = nextNode;  
//         console.log()        
//     }
//     return prev; // new head
// };


// console.log(reverseList([1,2,3,4,5]))

//  head  [1,2,3,4,5]


//  nextNode  [2,3,4,5]
//  current.next  null
//  current  [1]
//  prev  [1]

//  nextNode  [3,4,5]
//  current.next  [1]
//  current  [2,1]
//  prev  [2,1]

//  nextNode  [4,5]
//  current.next  [2,1]
//  current  [3,2,1]
//  prev  [3,2,1]

//  nextNode  [5]
//  current.next  [3,2,1]
//  current  [4,3,2,1]
//  prev  [4,3,2,1]

//  nextNode  null
//  current.next  [4,3,2,1]
//  current  [5,4,3,2,1]
//  prev  [5,4,3,2,1]









//  function reverseList(head){
//     let prev = null;
//     let current = head
//     while(current){
//         let newNode = current.next
//         console.log("newNode ", newNode)
//         return false
//     }
//  }

//  console.log(reverseList([1,2,3,4,5]))




//  newNode  [2,3,4,5]
// current  [1,2,3,4,5]
// prev  null
// current.next  null
// current  [1]
//  prev  [1]
// current  [2,3,4,5]


// newNode  [3,4,5]
// current  [2,3,4,5]
// prev  [1]
// current.next  [1]
// current  [2,1]
//  prev  [2,1]
// current  [3,4,5]


// newNode  [4,5]
// current  [3,4,5]
// prev  [2,1]
// current.next  [2,1]
// current  [3,2,1]
//  prev  [3,2,1]
// current  [4,5]


// newNode  [5]
// current  [4,5]
// prev  [3,2,1]
// current.next  [3,2,1]
// current  [4,3,2,1]
//  prev  [4,3,2,1]
// current  [5]


// newNode  null
// current  [5]
// prev  [4,3,2,1]
// current.next  [4,3,2,1]
// current  [5,4,3,2,1]
//  prev  [5,4,3,2,1]
// current  null

