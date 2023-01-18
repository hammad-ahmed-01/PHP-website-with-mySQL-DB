<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="Style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
            <a href="#" class="navbar-brand">Library Management System</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse1">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse1">
                <div class="navbar-nav">
                    <a href="#" class="nav-item nav-link active">Sign In</a>
                    <a href="All_tables.php" class="nav-item nav-link">All Tables</a>
                    <a href="books_data.php" class="nav-item nav-link">Books Data</a>
                </div>                
            </div>
        </div>
    </nav>

<section id="head">
    <h1 class="h1"> Sign In Page </h>
</section>

<script>
    var key = "yharoon";

    function my_submit(curr) {
        var info = document.getElementById("name").value;
        if (key == info) {
            return true;
        }
        else {
            alert('Incorrect!');
            returnToPreviousPage();
            return false;
        }
    }
</script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form action="new.php" method="post" onsubmit="return my_submit(this);">
                  <div class="form-group">
                     <label>User Name</label>
                     <input type="text" id="name" name="name" class="form-control" placeholder="User Name" required>
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" name="pass" class="form-control" placeholder="Password" required>
                  </div>
                  <button type="submit" class="btn btn-black">Sign In</button>
               </form>
            </div>
         </div>
      </div>
  
<footer>
    DBS Project Library Management System | Copyrights
</footer>

</body>
</html>