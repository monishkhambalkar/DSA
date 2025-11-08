// reverse string

function reverseString(str){
    let reverseString = "";
    for (let i = str.length - 1; i >= 0; i--) {
        const element = str[i];
        reverseString += element;
    }
    return reverseString;
}
console.log(reverseString("Monish"));


function newReverseString(str){
    return str.split('').reverse().join('');
}
console.log(newReverseString("Hello"));
    