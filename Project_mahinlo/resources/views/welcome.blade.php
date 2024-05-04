<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/css/login.css">

</head>
<body>

    <div class="login-container">
        <h2>Login</h2>
        <form id="login-form">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <input type="submit" value="Login">
            </div>
        </form>
    </div>
    <script>
            document.getElementById('login-form').addEventListener('submit',function(event){
                event.preventDefault();

                const formData = new FormData(this);

                fetch('api/welcome',{
                    method: 'POST',
                    body: formData,
                    headers: {
                    Accept: 'application/json',
                    Authorization: 'Bearer' + localStorage.getItem('accessToken'),


                    }

                }).then(res => {
                    console.log(res);
                    return res.json();

                }).then(res => {
                    console.log(res);
                    if(res.accessToken) {
                    localStorage.setItem('accessToken', res.accessToken);
                    window.location.href = '/dashboard';
                 } else {
                    let messageDiv = document.getElementById('message');
                    messageDiv.innerHtml = res.message;
                    messageDiv.style = 'display:block';
                 }  

             }) 

            });
    </script>
</body>
</html>
