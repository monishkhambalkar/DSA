
function getLongestSubString(s){
    let set = new Set();
    let max = 0;
    let left = 0;
    for(let right = 0; right < s.length; right++){
        while(set.has(s[right])){
            set.delete(s[left]);
            left++;
        }
        set.add(s[right]);
        
        max = Math.max(max, right - left + 1);
    }
    return max;
}

console.log(getLongestSubString("abcabcbb")) // 3
console.log(getLongestSubString("bbbbb")) // 1
console.log(getLongestSubString("pwwkew")) // 3

// Approach:

// 1. We will use the Sliding Window technique to solve this problem.

// 2. We do NOT need to convert string into array,
//    because string can be accessed using index (s[i]).

// 3. We will use two pointers:
//    - left → start of window
//    - right → end of window

// 4. We will use a Set to store unique characters in current window.

// 5. We will expand the window by moving right pointer.

// 6. If we find duplicate character:
//    - We will shrink the window from left side
//    - Remove characters until duplicate is removed

// 7. After each step, we calculate window size:
//    (right - left + 1)

// 8. We keep track of maximum length.

// 9. Finally return max length.