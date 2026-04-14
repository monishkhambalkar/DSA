function ListNode(val, next){
    this.val = (val === undefined ? 0 : val);
    this.next  = (next === undefined ? null : next);
}

function mergeTwoSortedLists(arr1, arr2) {

    console.log(arr1, arr2);
    let dummy = new ListNode(-1);
    let current = dummy;
    console.log(current.val);
    console.log(current.next);


    while(arr1 !== null && arr2 !== null){

            if (list1.val < list2.val) {
                current.next  = arr1;
                arr1 = arr1.next;
            } else {
                current.next  = arr2;
                arr2 = arr2.next;

            }

            current = current.next;
    }

     // Remaining nodes
    if (list1 !== null) {
        current.next = list1;
    } else {
        current.next = list2;
    }

    return dummy.next;

}

list1 = [1,2,4], list2 = [1,3,4]
console.log(mergeTwoSortedLists(list1, list2))