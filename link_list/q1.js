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

list.pushBack(2);
list.pushBack(3);
list.print();

list.pushFront(1);
list.print();

list.popFront();
list.print();

list.popBack();
list.print();