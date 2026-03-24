class Node{
    constructor(data){
        this.data = data;
        this.next = null;
        // console.log("this.data : ", this.data)
        // console.log("this.next : ", this.next)
    }
}

class LinkedList{
    constructor(){
        this.head = null;
        // console.log("this.head : ", this.head)
    }

    pushBack(data){
        let newNode = new Node(data);
        // console.log("newNode : ", newNode)
        // console.log("this.head : ", this.head)
        if (!this.head) {
            this.head = newNode;
            // console.log("this.head inner : ", this.head)
            return;
        }
        let current = this.head;
        // console.log("current : ", current)
        while(current.next){
            current = current.next;
            // console.log("current while : ", current)
        }
        current.next = newNode;
        // console.log("current next : ", current.next)
    }

    popFront() {
        console.log("this.head : ", this.head)
        if (!this.head) return;

        console.log("this.head.next : ", this.head.next)
        this.head = this.head.next;
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
  list.pushBack(num);
  console.log()
  console.log()
}

console.log()
console.log("**********print before pop front***********")
list.print();
console.log()

console.log()
console.log("**********pop front***********")
console.log()

list.popFront();
console.log()
console.log("************PRINT CURRENT**********")
console.log()
list.print();