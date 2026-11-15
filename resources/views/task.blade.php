<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>task page</h1>


    <div class="board" id="b_task">

    </div>
    <script>
        (function(){
            async function load(){
                const response =await fetch (`/api/tasks`)
                const result =await response.json();

                if(result.data){

                    result.data.forEach(tasks => {
                        const card_task = document.createElement('div')
                        card_task.setAttribute('class',`task-card-${tasks['id']}`)
                        card_task.replaceChild
                        const h2 = document.createElement('h2')
                        h2.innerText= tasks['title']

                        const board = document.getElementById('b_task')
                        card_task.appendChild(h2)
                        board.appendChild(card_task)
                    });
                            
                }

                
            }
            load();

        })();
    </script>
</body>
</html>