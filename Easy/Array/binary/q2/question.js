/*Q 1. Binary Search
Given an array of integers nums which is sorted in ascending order, and an
integer target, write a function to search target in nums. If target exists, then
return its index. Otherwise, return -1.
You must write an algorithm with O(log n) runtime complexity.
Example 1:
Input: nums = [-1,0,3,5,9,12], target = 9
Output: 4 */

/*Step-by-Step Explanation of Corrected Code
Initialize variables

low = 0 (start of the array)
high = nums.length - 1 (end of the array)
Run a loop until low is greater than high

The condition low <= high ensures we stop when the search space is exhausted.
Calculate mid

mid = Math.floor((low + high) / 2);
This finds the middle index of the current search space.
Check if nums[mid] matches target

If nums[mid] === target, return mid (found the target).
Decide whether to search left or right half

If nums[mid] < target, search in the right half (low = mid + 1).
If nums[mid] > target, search in the left half (high = mid - 1).
If the loop ends without finding the target, return -1

Example Execution
Input:
javascript
Copy
Edit
nums = [-1, 0, 3, 5, 9, 12];
target = 9;
Iterations:
First Iteration

low = 0, high = 5
mid = Math.floor((0 + 5) / 2) = 2
nums[mid] = 3
3 < 9, so search right → low = mid + 1 = 3
Second Iteration

low = 3, high = 5
mid = Math.floor((3 + 5) / 2) = 4
nums[mid] = 9
Found the target → return 4
Final Output
javascript
Copy
Edit
4
This means the target 9 is at index 4.

This implementation runs in O(log n) time complexity, making it efficient for large datasets.

Let me know if you have any questions! 🚀 */

function binarySearch(num, target) {
  let low = 0;
  let high = num.length - 1;

  while (low <= high) {
    let mid = Math.floor((low + high) / 2);

    if (num[mid] == target) {
      return mid;
    } else if (num[mid] < target) {
      low = mid + 1;
    } else {
      high = mid - 1;
    }
  }
  return -1;
}

let nums = [-1, 0, 3, 5, 9, 12];
let target = 9;
console.log(binarySearch(nums, target));
