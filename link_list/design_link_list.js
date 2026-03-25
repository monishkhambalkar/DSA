class Node {
    constructor(val){
        this.val = val;
        this.next = null;
    }
}

class MyLinkedList {
    constructor(){
        this.head = null;
    }

    get(index){
        let current = this.head;
        let i = 0;

        while(current){
            if(i === index) return current.val;
            current = current.next;
            i++;
        }

        return -1;
    }

    addAtHead(val){
        let newNode = new Node(val);
        newNode.next = this.head;
        this.head = newNode;
    }

    addAtTail(val){
        let newNode = new Node(val);

        if(!this.head){
            this.head = newNode;
            return;
        }

        let current = this.head;
        while(current.next){
            current = current.next;
        }

        current.next = newNode;
    }

    addAtIndex(index, val){
        if(index === 0){
            this.addAtHead(val);
            return;
        }

        let newNode = new Node(val);
        let current = this.head;
        let i = 0;

        while(current && i < index - 1){
            current = current.next;
            i++;
        }

        if(!current) return;

        newNode.next = current.next;
        current.next = newNode;
    }

    deleteAtIndex(index){
        if(!this.head) return;

        if(index === 0){
            this.head = this.head.next;
            return;
        }

        let current = this.head;
        let i = 0;

        while(current && i < index - 1){
            current = current.next;
            i++;
        }

        if(!current || !current.next) return;

        current.next = current.next.next;
    }
}


    let list = new MyLinkedList();

    console.log("ADD HEAD");
    list.addAtHead(1);
    console.log("ADD TAIL");
    list.addAtTail(3);
    console.log("ADD INDEX");
    list.addAtIndex(1, 2); 
    console.log("DELETE INDEX");
    list.deleteAtIndex(1);

    console.log("get INDEX");
    console.log(list.get(1));