var ListNode = /** @class */ (function () {
    function ListNode(val, next) {
        if (next === void 0) { next = null; }
        this.val = val;
        this.next = next;
    }
    return ListNode;
}());
function isPalindrome(head) {
    var arr = [];
    var curr = head;
    while (curr !== null) {
        arr.push(curr.val);
        curr = curr.next;
    }
    var left = 0;
    var right = arr.length - 1;
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
var head = new ListNode(1, new ListNode(2, new ListNode(2, new ListNode(1))));
var result = isPalindrome(head);
console.log(result); // true
