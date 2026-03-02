/*

# 🚀 DSA MASTER PATTERN & ALGORITHM SUMMARY (One-Shot Revision)

---

# 🧠 UNIVERSAL PROBLEM SOLVING BRAIN

When you read ANY question:

1️⃣ Identify DATA STRUCTURE
2️⃣ Find SIGNAL WORDS
3️⃣ Guess PATTERN
4️⃣ Choose ALGORITHM
5️⃣ Estimate TIME & SPACE

---

# 🔵 1. TWO POINTER PATTERN

## Nature

Use two positions to reduce nested loops and solve in O(N).

## Signals

* pair
* sorted array
* remove duplicates
* reverse
* compare from both ends

## Types

1. Opposite direction (left/right)
2. Same direction (slow/fast)

## Question Types

* Two sum (sorted)
* Remove duplicates
* Reverse array/string
* Container with most water
* Move zeros
* Middle of linked list

## Complexity

Time: O(N)
Space: O(1)

## Mental Idea

Move two positions instead of checking all pairs.

---

# 🟢 2. SLIDING WINDOW PATTERN

## Nature

Maintain a continuous range (window) and expand/shrink dynamically.

## Signals

* longest
* shortest
* subarray
* substring
* continuous
* consecutive

## Question Types

* Longest substring without repeating
* Max sum subarray
* Minimum window substring
* Fixed size K window
* Fruits into baskets

## Complexity

Time: O(N)
Space: O(1) or O(N) (if HashMap used)

## Mental Idea

Reuse previous work instead of recalculating.

---

# 🟡 3. HASHMAP / HASHSET PATTERN

## Nature

Store memory for fast lookup.

## Signals

* frequency
* count
* duplicate
* first occurrence
* lookup fast
* pairs

## Question Types

* Two sum (unsorted)
* Contains duplicate
* Frequency count
* Anagram checking
* Longest consecutive sequence

## Complexity

Time: O(N)
Space: O(N)

## Mental Idea

Trade memory for speed.

---

# 🔗 4. LINKED LIST PATTERN

## Nature

Nodes connected by pointers (not index).

## Signals

* linked list input
* reverse
* cycle
* middle
* kth from end

## Algorithms Used

* Two pointer
* Fast & Slow pointer
* Pointer manipulation
* Reverse logic

## Question Types

* Reverse linked list
* Detect cycle
* Merge lists
* Delete node
* Palindrome linked list

## Complexity

Usually Time: O(N)
Space: O(1)

## Mental Idea

Change connections, not data.

---

# 📚 5. STACK PATTERN

## Nature

Last In First Out (LIFO).

## Signals

* nearest greater/smaller
* balanced brackets
* undo operation
* expression evaluation

## Question Types

* Valid parentheses
* Next greater element
* Monotonic stack problems
* Daily temperatures

## Complexity

Time: O(N)
Space: O(N)

## Mental Idea

Need previous decisions remembered in order.

---

# 📥 6. QUEUE PATTERN

## Nature

First In First Out (FIFO).

## Signals

* level by level
* order processing
* scheduling
* BFS

## Question Types

* BFS traversal
* Level order traversal
* Shortest path in unweighted graph

## Complexity

Time: O(N)
Space: O(N)

## Mental Idea

Process items in arrival order.

---

# 🔍 7. BINARY SEARCH PATTERN

## Nature

Search by reducing problem size by half.

## Signals

* sorted array
* search efficiently
* minimum/maximum possible answer

## Question Types

* Search in sorted array
* First/last occurrence
* Peak element
* Search rotated array
* Answer space search

## Complexity

Time: O(log N)
Space: O(1)

## Mental Idea

Eliminate half every step.

---

# 🌳 8. DFS (Depth First Search)

## Nature

Go deep first, then backtrack.

## Signals

* paths
* depth
* recursive exploration
* combinations

## Question Types

* Tree traversal
* Graph traversal
* Maze paths
* Backtracking problems

## Complexity

Time: O(N)
Space: O(H) recursion stack

## Mental Idea

Explore deeply before switching path.

---

# 🌐 9. BFS (Breadth First Search)

## Nature

Explore level by level.

## Signals

* shortest path
* minimum steps
* levels

## Question Types

* Level order traversal
* Shortest path (unweighted)
* Infection spread problems

## Complexity

Time: O(N)
Space: O(N)

## Mental Idea

Expand layer by layer.

---

# 🔁 10. RECURSION

## Nature

Function solves smaller version of itself.

## Signals

* divide into smaller problems
* tree-like decisions

## Question Types

* Factorial
* Tree traversal
* Backtracking base

## Complexity

Depends on calls

Space:
Recursion stack (important).

## Mental Idea

Trust smaller problem result.

---

# 🧩 11. BACKTRACKING

## Nature

Try → Explore → Undo → Try another path.

## Signals

* all combinations
* all possible ways
* permutations
* subsets

## Question Types

* N-Queens
* Subsets
* Permutations
* Sudoku solver

## Complexity

Usually exponential:
O(2^N) or O(N!)

Space:
O(N) recursion depth

## Mental Idea

Decision tree exploration.

---

# 🧠 MASTER PATTERN DETECTION TABLE

| Signal                      | Pattern              |
| --------------------------- | -------------------- |
| pair / sorted               | Two pointers         |
| longest/shortest continuous | Sliding window       |
| count / frequency           | HashMap              |
| linked list                 | Pointer manipulation |
| nearest greater             | Stack                |
| level / minimum steps       | BFS                  |
| depth / paths               | DFS                  |
| sorted search               | Binary Search        |
| all possibilities           | Backtracking         |

---

# ⚡ TIME vs SPACE QUICK RULE

1. First solve correctly
2. Then optimize time
3. Then reduce space

Most interviews prefer better TIME first.

---

# 🎯 GOLDEN RULE (Never Forget)

Same pattern → different story.

You are not solving new problems.
You are recognizing patterns.

---
*/