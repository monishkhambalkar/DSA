function isValidElement(element){
    let stack = [];
    let elementArr = element.split("");
    for(let ch of elementArr){
        if (ch === "(" || ch === "{" || ch === "["){
            stack.push(ch);
        }else if (ch === ")" && stack[stack.length - 1] === "("){
            stack.pop();
        }else if (ch === "}" && stack[stack.length - 1] === "{"){
            stack.pop();
        }else if (ch === "]" && stack[stack.length - 1] === "["){
            stack.pop();
        }else{
            return false;
        }
    }
    return stack.length === 0;
}

console.log(isValidElement("()")); // true
console.log(isValidElement("()[]{}")); // true
console.log(isValidElement("(]")); // false

