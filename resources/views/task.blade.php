<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>task page</h1>
    <script>
        (function(){
            async function load(){
                const res =await fetch (`/api/tasks/`)
                const resul =await res.json();
                console.log(resul.data)
                
            }
            load();

        })();
    </script>
</body>
</html>