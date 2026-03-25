class Node {
  constructor(data) {
    this.data = data;
    this.next = null;
  }
}

class LinkedList {
  constructor() {
    this.head = null;
  }

  // ✅ 1. Insert at end (pushBack)
  pushBack(data) {
    let newNode = new Node(data);

    if (!this.head) {
      this.head = newNode;
      return;
    }

    let current = this.head;

    while (current.next) {
      current = current.next;
    }

    current.next = newNode;
  }

  // ✅ 2. Insert at beginning (pushFront)
  pushFront(data) {
    let newNode = new Node(data);

    newNode.next = this.head; // point new node to old head
    this.head = newNode;      // update head
  }

  // ✅ 3. Remove first node (popFront)
  popFront() {
    if (!this.head) return;

    this.head = this.head.next;
  }

  // ✅ 4. Remove last node (popBack)
  popBack() {
    if (!this.head) return;

    // only one node
    if (!this.head.next) {
      this.head = null;
      return;
    }

    let current = this.head;

    while (current.next.next) {
      current = current.next;
    }

    current.next = null;
  }

  getIndex(index){
    let current = this.head;
    let i = 0;
    while(current){
      console.log("current ", current)
      console.log(i, ", ", index)
      if(i == index){
        console.log(current)
        return current.data;
      }
      current.next;
      i++;
    }
    // return  -1;
  }

  addAtIndex(index, data) {

    if (index === 0) {
      this.pushFront(data);
      return;
    }

    let newNode = new Node(data);
    let current = this.head;
    let i = 0;

    while (current && i < index - 1) {
      current = current.next;
      i++;
    }

    if (!current) return; // index out of bound

    newNode.next = current.next;
    current.next = newNode;
  }

  deleteAtIndex(index) {

    if (!this.head) return;

    if (index === 0) {
      this.popFront();
      return;
    }

    let current = this.head;
    let i = 0;

    while (current.next && i < index - 1) {
      current = current.next;
      i++;
    }

    if (!current.next) return; // index out of bound

    current.next = current.next.next;
  }

  // ✅ Print list
  print() {
    let current = this.head;
    let result = "";

    while (current) {
      result += current.data + " → ";
      current = current.next;
    }

    console.log(result + "null");
  }
}


let list = new LinkedList();

list.pushBack(1);
list.pushBack(2);
list.pushBack(3);

list.print(); // 1 → 2 → 3

console.log("get(1):", list.getIndex(1)); // 2


list.addAtIndex(1, 5);
list.print(); // 1 → 5 → 2 → 3

list.deleteAtIndex(2);
list.print(); // 1 → 5 → 3

// list.pushFront(1);
// list.print();

// list.popFront();
// list.print();

// list.popBack();
// list.print();

