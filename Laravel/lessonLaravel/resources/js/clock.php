<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div id="clock">

    </div>

<script>
    function update(){
        let date=new date();
        let hours=date.getHours();
        let minutes=date.getMinutes();
        let seconds=date.getSeconds();
        if(hours<10) hours='0'+hours;
        if(minutes<10) minutes='0'+minutes;
        if(seconds<10) seconds='0'+seconds;
        clock.textContent = `${hours}:${minutes}:${seconds}`;
        
    }
    setInterval(update, 1000);
</script>

</body>
</html>