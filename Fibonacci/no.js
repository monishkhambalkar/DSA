function fib(n) {

    // Base cases
    if (n <= 1) {
        return n;
    }

    // Initialize first two Fibonacci numbers
    let prev2 = 0; // F(0)
    let prev1 = 1; // F(1)

    // Calculate from F(2) to F(n)
    for (let i = 2; i <= n; i++) {

        let current = prev1 + prev2;

        console.log("current ", current, "prev1 ", prev1, "prev2 ", prev2);

        // Shift values
        prev2 = prev1;
        prev1 = current;
    }

    // prev1 always holds F(n)
    return prev1;
}


// Calling the function with input
let input = 5;
let result = fib(input);

console.log("Input:", input);
console.log("Output:", result);
