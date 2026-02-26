// PATTERN 2 — Sliding Window (VERY IMPORTANT)
// Recognition signals

// Subarray

// Continuous elements

// “Longest”, “Shortest”, “Maximum”

// Approach
// Expand window → condition break → shrink window
// WHY?

// Avoid recalculating every subarray.

// Problem signals

// Longest substring

// Max sum subarray

// Minimum window substring

// PATTERN 3 — Prefix Sum
// Recognition

// Range sum

// Multiple queries

// Approach
// prefix[i] = prefix[i-1] + arr[i]
// WHY?

// Convert O(n) query → O(1)



// LIST OF QUETIONS
/*


🔵 1️⃣ Fixed Size Sliding Window (5–7 Problems)

These build core intuition — expanding and shifting window.

⭐ Beginner → Foundation

Maximum Average Subarray I (LC 643)
→ Pure fixed window sum problem.

Maximum Sum of Distinct Subarrays With Length K (LC 2461)
→ Fixed window + hashmap.

Find K-Length Substrings With No Repeated Characters (LC 1100)
→ Fixed window + set.

Number of Sub-arrays of Size K and Average ≥ Threshold (LC 1343)
→ Fixed window counting.

Sliding Window Maximum (LC 239) 🔥
→ VERY IMPORTANT (Deque concept).

Maximum Points You Can Obtain from Cards (LC 1423)
→ Fixed window from both ends (interview favourite).

Permutation in String (LC 567)
→ Fixed window + frequency map.

🔵 2️⃣ Variable Size Sliding Window (10–15 Problems)

🔥 This is where REAL interview difficulty starts.

⭐ Beginner Variable Window

Longest Substring Without Repeating Characters (LC 3) 🔥 MUST

Longest Repeating Character Replacement (LC 424)

Max Consecutive Ones III (LC 1004)

Fruit Into Baskets (LC 904)

Longest Subarray of 1's After Deleting One Element (LC 1493)

⭐ Medium Level (Core Interview)

Minimum Size Subarray Sum (LC 209)

Subarray Product Less Than K (LC 713)

Number of Subarrays With Bounded Maximum (LC 795)

Longest Nice Subarray (LC 2401)

Get Equal Substrings Within Budget (LC 1208)

⭐ Advanced Variable Window (Important)

Longest Substring with At Most Two Distinct Characters (LC 159)

Longest Substring with At Most K Distinct Characters (LC 340)

Maximum Erasure Value (LC 1695)

Frequency of the Most Frequent Element (LC 1838)

Take K of Each Character From Left and Right (LC 2516)

🔵 3️⃣ Exactly K Type Sliding Window (VERY IMPORTANT)

⚠️ Senior-level pattern. Asked frequently.

Key Idea:

Exactly K = At Most K - At Most (K - 1)
MUST PRACTICE

Subarrays with K Different Integers (LC 992) 🔥🔥 MUST

Count Number of Nice Subarrays (LC 1248)

Binary Subarrays With Sum (LC 930)

Number of Substrings Containing All Three Characters (LC 1358)

Count Complete Subarrays in an Array (LC 2799)

🔵 4️⃣ Hard Sliding Window Problems (Advanced Pattern Mastery)

These separate average dev vs strong DSA engineer.

🔥 MUST DO HARD PROBLEMS

Minimum Window Substring (LC 76) ⭐ ULTRA IMPORTANT

Substring with Concatenation of All Words (LC 30)

Sliding Window Median (LC 480)

Minimum Number of K Consecutive Bit Flips (LC 995)

Count Subarrays With Score Less Than K (LC 2302)

Shortest Subarray with Sum at Least K (LC 862)

Minimum Window Subsequence (LC 727)

🔵 Recommended Order (VERY IMPORTANT)

Since you’re preparing seriously:

Phase 1 — Foundation

All Fixed Window problems

Phase 2 — Core Interview Level

LC 3

LC 424

LC 904

LC 209

LC 713

Phase 3 — Pattern Mastery

At Most K problems

Exactly K problems

Phase 4 — Senior Level

Minimum Window Substring

Sliding Window Median

🔥 REAL INTERVIEW SECRET (Senior Dev Insight)

Almost ALL sliding window questions reduce to:

1️⃣ Fixed Size
2️⃣ At Most K
3️⃣ Exactly K
4️⃣ Minimum Window

Once you master these 4 templates → 80% questions solved.



*/

// for loops code 
function maxSumSubarrayBrute(arr, k){
    let maxSum = -Infinity;
    for (let i = 0; i < arr.length - k; i++) {
        let sum = 0;
        for (let j = i; j < i + k; j++) {
            sum += arr[j];
        }
        maxSum = Math.max(maxSum, sum);
    }
    return maxSum;
}
console.log(maxSumSubarrayBrute([2,1,5,1,3,2], 3));


function maxSumSubarraySliding(arr, k){
    let windowSum = 0;
    let maxSum = -Infinity;
    for (let i = 0; i < k; i++) {
        windowSum += arr[i];
    }

    maxSum = windowSum;

    for (let i = k; i < arr.length; i++) {
        windowSum = windowSum - arr[i - k] + arr[i];
        maxSum = Math.max(maxSum, windowSum); 
    }

    return maxSum;
}
console.log(maxSumSubarraySliding([2,1,5,1,3,2], 3));
