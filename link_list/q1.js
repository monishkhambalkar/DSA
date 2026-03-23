class Node{
    constructor(data){
        this.data = data;
        this.next = null;
    }
}

class LinkedList{
    constructor(){
        this.head = null;
    }

    pushBack(data){
        let newNode = new Node(data);

        if (!this.head) {
            this.head = newNode;
            return;
        }

        let current = this.head;

        while(current.next){
            current = current.next;
        }
        current.next = newNode;
    }

    print(){
        let current = this.head;
        let result = "";

        while(current){
            result += current.data + "->";
            current = current.next;
        }

        console.log(result + "null")
    }

}

let arr = [10, 20, 30];

let list = new LinkedList();

for (let num of arr) {
  list.pushBack(num);
}
list.pushBack(40);
list.print();