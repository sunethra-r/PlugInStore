<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
</head>
<body>
    <div class="container">
        <div class="box">
            <h3>Login</h3>
            <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">
                <input id="username" type="text" placeholder="Username..." name="username" required><br><br>
                <input id="password" type="password" placeholder="Password..." name="password" required>
                <br><br><input type = "submit" value = "Login" id="btn"/><br />
            </form>
        </div>
    </div>

    <script>  
            function validation()  
            {  
                var id=document.f1.username.value;  
                var ps=document.f1.password.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>
</html>


0