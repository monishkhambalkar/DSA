// Remove Duplicates from a String

function removeDuplicate(str){
    let result = "";
    for (let i = 0; i < str.length; i++) {
        const element = str[i];
        if (!result.includes(element)) {
            result += element
        }
    }
    return result;
}
console.log(removeDuplicate("programming"));

function setRemoveDuplicate(str){
    return [...new Set(str)].join('');
}
console.log(setRemoveDuplicate("programming"));
