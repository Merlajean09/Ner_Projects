<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <script>
        const token = localStorage.getItem('accessToken');
        if(!token){
            window.location.href = '/welcome';
        }
    </script>

</head>
<body>
<div class="sidebar">
    <div class="dashboard">
        <center><h2>Dashboard</h2></center>
        <ul>
            <a href="/home">Home</a>
            <a href="/post">Post</a>
            <a href="/user">User</a>
            <a href="#" onclick="logout()">Logout</a>
        </ul>
    </div> 
</div>
<div class="content">
    <h2>Welcome!!</h2>
</div>
@yield('table')
<script>
    function logout(){
        const confirmLogout = confirm("Are you sure you want to logout?");
        if(confirmLogout){
            localStorage.removeItem('accessToken');
            window.location.href = '/welcome';
        }
        
    }
</script>
</body>
</html>