// PATTERN — FAST LOOKUP
// Recognition clues

// Duplicate

// Frequency

// Grouping

// “Find quickly”

// Approach
// store in hashmap
// check existence instantly
// WHY?

// Lookup becomes O(1)

// Example patterns
// Frequency counting

// Most frequent element

// Anagrams

// Seen before

// Two Sum

// Contains duplicate

// Senior insight ⭐

// Whenever you see:

// “Find in O(n)”

// Your brain should scream:

// HASHMAP!!





/*

LEVEL 1 — PURE HASH MAP (MUST START HERE)

These build your foundation.

1️⃣ Two Sum (LC #1) ⭐⭐⭐⭐⭐

Pattern: Complement lookup

Why HashMap?

Store seen numbers

Check target − current instantly

➡️ FIRST HashMap problem everyone solves.

2️⃣ Contains Duplicate (LC #217) ⭐⭐⭐⭐⭐

Pattern:

Seen before or not?

HashMap / HashSet → O(1) lookup.

3️⃣ Valid Anagram (LC #242) ⭐⭐⭐⭐

Pattern:

Frequency counting

Store character counts in map.

4️⃣ Majority Element (LC #169) ⭐⭐⭐⭐

Pattern:

Frequency counter

5️⃣ Single Number (LC #136)

Pattern:

Count occurrence / tracking.

🔥 LEVEL 2 — FREQUENCY + GROUPING (INTERVIEW FAVORITE)

This is where interviews start getting serious.

6️⃣ Group Anagrams (LC #49) ⭐⭐⭐⭐⭐

Pattern:

Key = sorted string

Value = list of words

VERY common interview question.

7️⃣ Top K Frequent Elements (LC #347) ⭐⭐⭐⭐⭐

Pattern:

Frequency map + heap/bucket

Senior-level thinking.

8️⃣ Top K Frequent Words (LC #692)

Same pattern — more advanced.

9️⃣ Sort Characters By Frequency (LC #451)

Map + sorting.

🔥 LEVEL 3 — HASH MAP + SLIDING WINDOW (HIGH VALUE)

These questions appear A LOT in product companies.

🔟 Longest Substring Without Repeating Characters (LC #3) ⭐⭐⭐⭐⭐

Pattern:

Last seen index map

Sliding window.

Top interview question.

11️⃣ Find All Anagrams in a String (LC #438)

Pattern:

Window frequency vs target frequency.

12️⃣ Permutation in String (LC #567)

Same pattern — advanced window.

🔥 LEVEL 4 — PREFIX SUM + HASH MAP (VERY IMPORTANT)

This is where many developers struggle.

13️⃣ Subarray Sum Equals K (LC #560) ⭐⭐⭐⭐⭐

Pattern:

prefixSum → count

EXTREMELY common in interviews.

14️⃣ Continuous Subarray Sum (LC #523)

Prefix + remainder map.

15️⃣ Subarray Sums Divisible by K (LC #974)

Same pattern — advanced.

🔥 LEVEL 5 — HASH SET / HASH MAP TRICK QUESTIONS
16️⃣ Longest Consecutive Sequence (LC #128) ⭐⭐⭐⭐⭐

Pattern:

Use HashSet for O(1) lookup.

Classic interview problem.

17️⃣ Isomorphic Strings (LC #205)

Pattern:

Character → mapping consistency.

18️⃣ Word Pattern (LC #290)

Bidirectional mapping.

🔥 LEVEL 6 — DESIGN LEVEL (ADVANCED)

These show senior-level thinking.

19️⃣ LRU Cache (LC #146) ⭐⭐⭐⭐⭐

Pattern:

HashMap + Doubly Linked List

VERY important for backend engineers.

20️⃣ Design HashMap (LC #706)


*/