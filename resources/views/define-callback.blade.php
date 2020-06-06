<html>
<title>Define Callback</title>
<body>
<p>To see the result open the console and change the parameter.</p>
<script>
    var data = {email:'trump@gmail.com', age:70};
    function checkAge(data)
    {
        if(data.age < 18)
        {
            console.log('Age is not valid.');
            return '';
        };
    }

    function finalCall(var1, callback) {
        callback(var1);
    }

    finalCall(data, checkAge);
</script>
</body>
</html>
