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
                    const colums = ['title','descirption','status','priority','due_date','fixed']
                    result.data.forEach(tasks => {
                        const card_task = document.createElement('div')
                        card_task.setAttribute('class',`task-card-${tasks['id']}`)
                        card_task.replaceChild
                        
                        colums.forEach(colum=>{
                            const p = document.createElement('p')
                            if(colum == 'title'){
                                const h2 = document.createElement('h2')
                                h2.textContent = tasks[colum]
                                card_task.appendChild(h2)
                            }
                            else if(colum=='fixed'){
                                const a = document.createElement('a')
                                p.textContent='setting'
                                a.replaceChild
                                a.appendChild(p)
                                a.setAttribute('href',`/tasks/show/${tasks['id']}`)
                                card_task.appendChild(a)
                            }
                            else{
                                
                                p.textContent= tasks[colum]
                                card_task.appendChild(p)
                            }
                        })
                        const board = document.getElementById('b_task')
                        board.appendChild(card_task)
                    });
                            
                }

                
            }
            load();

        })();
    </script>
</body>
</html>