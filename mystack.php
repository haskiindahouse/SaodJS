<!DOCTYPE html>

<html lang="en">
<script src="mystack.js"></script>
<head>
    <link rel="stylesheet" href="designs.css">
    <script>
        let stack;
    </script>
</head>
<body bgcolor="#faebd7">
<h1>Задание № 1. Стек. Проверка правильности расстановки скобок</h1>
<div>
    <p id="stack_box"> </p>
</div>
<input id="createbtn" type="button" value="Create Stack" style="background-color: red">
<script>
    createbtn.onclick = function() {
        stack = new MyStack();
        document.getElementById("pushbtn").disabled = false;
        let string = "Stack: ";
        for(let i = 0; i < stack.length; i++){
            string += String(stack.elem[i]);
        }
        document.getElementById("stack_box").innerHTML = string;
        alert('Был создан stack');
    }
</script>
<input id="pushbtn" type="button" value="Push">
<script>document.getElementById("pushbtn").disabled = true; </script>
<script>
    pushbtn.onclick = function() {
        let new_el = prompt('Введите элемент для добавления в stack', "");
        if (!new_el.length || isNaN(Number(new_el))) {
            alert("NaN Exception!");
        } else {
            stack.Push(Number(new_el));
            let string = "Stack: ";
            for (let i = 0; i < stack.length; i++) {
                string += String(stack.elem[i]);
            }
            document.getElementById("stack_box").innerHTML = string;
            alert(stack.Pop() + " был добавлен!");
        }
    };
</script>
<a href="main_page.php" class = "btn1">Главная страница </a>
</body>
</html>

