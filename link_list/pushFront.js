class Node{
    constructor(data){
        this.data = data;
        this.next = null;

        console.log("this.data : ", this.data)
        console.log("this.next : ", this.next)
    }
}

class LinkedList{
    constructor(){
        this.head = null;

        console.log("this.head : ", this.head)
    }

    pushFront(data) {
        let newNode = new Node(data);

        console.log("newNode : ", newNode)

        newNode.next = this.head; // point new node to old head
        console.log("newNode.next : ", newNode.next)
        this.head = newNode;      // update head
        console.log("this.head : ", this.head)
    }

    print(){
        let current = this.head;
        let result = "";

        console.log("current print : ", current)

        while(current){
            result += current.data + "->";
            current = current.next;

            console.log("current print while : ", result)
            console.log("current print while : ", current)
        }

        console.log(result + "null")
    }

}

let arr = [10, 20, 30];

let list = new LinkedList();

  console.log()

for (let num of arr) {
  list.pushFront(num);
  console.log()
  console.log()
}

console.log()
console.log("**********push 40***********")
console.log()

list.pushFront(40);
console.log()
console.log("************PRINT CURRENT**********")
console.log()
list.print();