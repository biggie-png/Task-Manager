<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="board-head">
        <a href="/">back</a>
    </div>
    <div class="board">
        <div class="head-title">
            <p>{{ $task_id['id'] }}</p><p>{{ $task_id->title }}</p>
        </div>
        <div class="body-title">
            <div class="b-head">
                <p>{{ $task_id->description }}</p><p>{{ $task_id->status }}</p><p>{{ $task_id->priority }}</p>
            </div>
            
            <div class="b-body">
                <p>{{ $task_id->due_date }}</p>
            </div>
        </div>
    </div>

    
    <script>
        (function(){
            async function load(){
                
                console.log(@json($task_id))
            }
            load()
        })()
    </script>
    
</body>
</html>