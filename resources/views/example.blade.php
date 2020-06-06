<html>
<title>
    Examples
</title>
<body>
<?php
if ($s == 1) {?>
<div class="example1" style="padding: 15px;">
    <h2>1. Example Sort JS (Array sorting)</h2>
    <p>The sort() method sorts an array alphabetically.</p>
    <button onclick="sortFunction()">Try it</button>
    <p id="ex-1"></p>
</div>
<?php }elseif ($s == 2){ ?>

<div class="example2" style="padding: 15px;">
    <h2>2. Example Sort JS (Array Foreach)</h2>
    <p>List all array items, with keys and values:</p>
    <p id="ex-2-extension"> The fruits are: "apple", "orange", "cherry", "jack-fruit"</p>
    <button onclick="foreachFunction()">Try it</button>
    <p id="ex-2"></p>
</div>
<?php }elseif ($s == 3){ ?>
<div class="example3" style="padding: 15px;">
    <h2>3. Example Filter JS</h2>
    <p>Click the button to get every element in the array that has a value of 18 or more.</p>
    <button onclick="filterFunction()">Try it</button>
    <p>The ages are: 32, 33, 16, 40</p>
    <p id="ex-3"></p>
</div>
<?php }elseif ($s == 4){ ?>
<div class="example4" style="padding: 15px;">
    <h2>4. Example MAP JS</h2>
    <p>Click the button to get the square root of each element in the array.</p>
    <button onclick="mapFunction()">Try it</button>
    <p>The Numbers are: 4, 9, 16, 25</p>
    <p id="ex-4"></p>
</div>
<?php }elseif ($s == 5){ ?>
<div class="example5" style="padding: 15px;">
    <h2>5. Example Reduce JS</h2>
    <p>Subtract the numbers in the array, starting from the left:</p>
    <button onclick="reduceFunction()">Try it</button>
    <p>Numbers are: 175, 50, 25</p>
    <p id="ex-5"></p>
</div>
<?php } ?>
</body>

<script>

    var fruits = ["Banana", "Orange", "Apple", "Mango"];
    var numbers = [4, 9, 16, 25];
    var ages = [32, 33, 16, 40];
    var red_numbers = [175, 50, 25];
    var ripe_fruits = ["apple", "orange", "cherry", "jack-fruit"];
    document.getElementById("ex-1").innerHTML = fruits;
    document.getElementById("ex-2-extension").innerHTML = ripe_fruits;
    document.getElementById("ex-3").innerHTML = ages;
    document.getElementById("ex-4").innerHTML = numbers;
    document.getElementById("ex-5").innerHTML = red_numbers;

    function sortFunction() {
        fruits.sort();
        document.getElementById("ex-1").innerHTML = fruits;
    }

    function foreachFunction()
    {
        ripe_fruits.forEach(eachFunction);
    }


    function eachFunction(item, index) {
        document.getElementById("ex-2").innerHTML += index + ":" + item + "<br>";
    }

    function mapFunction() {
        x = document.getElementById("ex-4")
        x.innerHTML = "Ans: "+numbers.map(Math.sqrt);
    }

    function checkAdult(age) {
        return age >= 18;
    }
    function filterFunction() {
        document.getElementById("ex-3").innerHTML = "Ans: "+ages.filter(checkAdult);
    }


    function reduceFunction() {
        document.getElementById("ex-5").innerHTML = "Ans: "+ red_numbers.reduce(myFunc);
    }
    function myFunc(total, num) {
        return total - num;
    }
</script>
</html>
