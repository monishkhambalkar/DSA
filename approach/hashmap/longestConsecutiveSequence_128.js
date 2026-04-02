function longestConsecutive(nums) {
    let set = new Set(nums);
    let longest = 0;

    for (let num of set) {

        console.log("num: ", num);
        console.log("set ", set);

        // start of sequence
        if (!set.has(num - 1)) {
            let current = num;
            let count = 1;

            console.log("current ", current);

            while (set.has(current + 1)) {
                current++;
                count++;
            }

            longest = Math.max(longest, count);
        }
    }
    console.log()
    console.log()

    return longest;
}


console.log(longestConsecutive([100, 4, 200, 1, 3, 2]));