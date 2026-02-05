class ListNode {
    val: number;
    next: ListNode | null;

    constructor(val: number, next: ListNode | null = null) {
        this.val = val;
        this.next = next;
    }
}

function isPalindrome(head: ListNode | null): boolean {
    const arr: number[] = [];
    let curr = head;

    while (curr !== null) {
        arr.push(curr.val);
        curr = curr.next;
    }

    let left = 0;
    let right = arr.length - 1;

    while (left < right) {
        if (arr[left] !== arr[right]) {
            return false;
        }
        left++;
        right--;
    }

    return true;
}

// Test
const head = new ListNode(
    1,
    new ListNode(
        2,
        new ListNode(
            2,
            new ListNode(1)
        )
    )
);

const result = isPalindrome(head);
console.log(result); // true
