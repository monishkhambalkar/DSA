

function isPalindromeNumber(x){
   if(x < 0 || (x % 10 == 0)) return false;
    let revHalf = 0;    
   while(x > revHalf){
    let lastDigit = x % 10;
    revHalf = revHalf * 10 + lastDigit;
    x = Math.floor(x / 10);
   }
   return x === revHalf || x ===  Math.floor(revHalf / 10)
}


console.log(isPalindromeNumber(120));
console.log(isPalindromeNumber(-121));
console.log(isPalindromeNumber(12321));