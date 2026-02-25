var myPow = function(x, n) {
    let result = 1;

    if (n < 0) {
        x = 1 / x;
        n = -n;
        console.log("x ", x)
        console.log("n ", n)
    }

    for (let i = 1; i <= n; i++) {
        console.log("i ", i)
        console.log("inner x ", x)
        console.log("inner result ", result)
        result = result * x;
    }
    return result;
};

myPow(2, -2)