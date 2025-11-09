//  4. Situation-based 1

// Question: You have an array representing daily temperatures. Write a bubble sort function to sort them in ascending order but log every swap so you can see how the array changes at each step.
// Example:
// Input: [30, 20, 25]
// Output (log each swap):

// Swap 30 and 20 => [20, 30, 25]
// Swap 30 and 25 => [20, 25, 30]


// Focus: Traceable algorithm, debugging, understanding bubble sort mechanics.



let temperatures = [30, 20, 25];

let sortTemperatures = (temp) =>{

    let n = temp.length;

    for (let i = 0; i < n - 1 ; i++) {
        for (let j = 0; j < n - i - 1; j++) {
            
            if (temp[j] > temp[j+1]) {
                console.log(`Swap ${temp[j]} and ${temp[j + 1]} =>`, temp); // Log before swap
                [temp[j], temp[j+1]] = [temp[j+1], temp[j]];
                // console.log("After swap:", temp);
            }
        }
    }
 
    return  temp;
}

console.log(sortTemperatures(temperatures));