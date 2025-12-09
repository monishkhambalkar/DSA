<?php

function greet(){
    echo "Hello";
}

function doSomething($callback){
    return $callback();
}

doSomething('greet');



?>

<script>



function greet(){
    console.log("Hello");
}


function doSomething(callback){
    callback();
}

doSomething(greet());

</script>