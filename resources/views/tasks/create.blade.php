<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="board">
        <p><a href="/">back</a></p>
        <form id="create-task" action="" method="get">
            <div class="formgroup">
                <input type="text" name="title" id="title" placeholder="enter-title">
                <div class="title-error"></div>
            </div>
            <div class="formgroup">
                <input type="text" name="description" id="description">
                <div class="description-error"></div>
            </div>
            
            <select name="status" id="status">
                <option value="TODO" >TODO</option>
                <option value="DONE">DONE</option>
                <option value="IN_PROGRESS">IN PROGRESS</option>
            </select>
            <select name="priority" id="priority" >
                <option value="HIGH">HIGH</option>
                <option value="MEDIUM">MEDIUM</option>
                <option value="LOW">LOW</option>
            </select>
            <div class="formgroup">
                <input type="date" name="due_date" id="due_date">
                <div class="due_date-error"></div>
            </div>
            
            
            <input type="submit" name="enter" id="enter" value="enters">
            <a href="/">back</a>
        </form>
    </div>
    <script>
        (function(){
            async function save()  {
                const e= document.getElementById('enter')
                const inputform = document.querySelectorAll('input')
                const form = document.getElementById('create-task')
                
                form.addEventListener('submit', async(es)=>{
                    es.preventDefault()
                    const feild= ['title','description','due_date']
                    for(let i=0 ; i<inputform.length;i++){
                        const input = inputform[i]
                        const formgroup = input.parentElement
                        if(feild[i]){
                            const errorbox = document.querySelector(`.${feild[i]}-error`)
                            errorbox.textContent=""
                        }
                        
                    }
                    
                    
                    try {
                        const task_form = new FormData(form)
                        const respon = await fetch('/api/tasks/store',{method:'post',headers:{'Accept':'application/json'},body:task_form})
                        const result = await respon.json()
                        form
                        if(respon.ok){
                            'นันทึกข้อมูลสำเร็จ'
                        }
                        else{
                            Object.entries(result.errors).forEach(([key,message]) => {
                                const error = document.querySelector(`.${key}-error`)
                                if(error)
                                    error.textContent= message[0]
                            });
                            return;
                        }
                    } catch (error) {
                        console.log(error)
                    }
                       
                })

            }

            save()

        })()
    </script>
</body>
</html>