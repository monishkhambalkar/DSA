// /home/monish/Downloads/ChatGPT Image Jan 30, 2026, 09_51_34 AM.png

// O(1) — Constant Time    

    // Time always same, no matter input size.
    // 1 element or 1 million → still 1 step.

    // Example: arr[5]

    // 💾 Space:
        // Usually O(1) space also.
        // No extra memory based on input size.
        // 👉 Think: direct access
        // 📈 Time graph: flat line
        // 📦 Memory: flat line

    // No loop. No search. No comparison with other elements.
    // Access by index is always O(1).

    
// 2. O(log n) — Logarithmic Time 

    // Time:
        // Each step cuts input in half
        // Example: Binary Search
        // 1000 → 500 → 250 → 125 → …
    
    // Example: binarySearch(sortedArray)

    // 💾 Space:

        // Iterative → O(1) space
        // Recursive → O(log n) (call stack)
        // 👉 Think: divide by 2 every step 
        // 📈 Time: grows very slowly
        // 📦 Memory: small stack if recursion

    // O(log n) = “I don’t check everything. I cut the problem in half each step.”

    // Example: 
        // I think of a number between 1 and 1000.
        // You can only ask: 👉 “Is it higher or lower than X?”
        // You play like this:
            // Ask: Is it 500? → No, lower
            // Ask: Is it 250? → No, higher
            // Ask: Is it 375? → No, lower
            // Ask: Is it 312? → Yes!

    // Example: Real-life Example 2: Finding a name in a phone book
        // You want to find: “Monish”
        // You don’t start from A and check one by one ❌
        // You:
            // Open in the middle
            // See “K” → go right
            // Open middle again
            // See “R” → go left
            // Keep halving

// 3. O(n) — Linear Time

    // Time:
        // Goes through every element once
        // n elements → n steps

    // Example: for(i=0;i<n;i++)

    // 💾 Space:
        // If no extra array → O(1)
        // If you create new array → O(n)
        // 👉 Think: scan everything
        // 📈 Time: straight diagonal line
        // 📦 Memory: depends on if you store data

    // O(n) = “I must touch or look at every item once.”

    // Code analogy : for (let i = 0; i < n; i++) {check(arr[i]); }

    // Real-life Example 1: Checking attendance in a class

        // Teacher has a list of n students.
        // To check attendance:
        // Call each name one by one
        // Mark present/absent
        // If:
        // 10 students → 10 checks
        // 50 students → 50 checks
        // 100 students → 100 checks
        // ⏱️ Work = n times
        // ✅ O(n)
        // You must see every student once.
    
    // Real-life Example 3: Checking expiry dates on medicine boxes

        // You have n medicine boxes.
        // To find expired ones:
        // Check box 1
        // Check box 2
        // Check box 3
        // Check box n
        // No shortcut.
        // You must look at every box.

// 4. O(n log n)
    
    // Time:
        // For each element (n)
        // you do log n work

    // Example: Merge Sort, Quick Sort (avg)

    // 💾 Space:

        // Merge Sort → O(n)
        // Quick Sort → O(log n) stack
        // 👉 Think:
        // “Divide array (log n) AND process all elements (n)”
        // 📈 Time: steeper than O(n)
        // 📦 Memory: moderate