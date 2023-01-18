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
                    <a href="data-list.php" class="nav-item nav-link active">Sign In</a>
                    <a href="All_tables.php" class="nav-item nav-link">All Tables</a>
                    <a href="books_data.php" class="nav-item nav-link">Books Data</a>
                </div>                
            </div>
    </div>
</nav>

<section id="head">
    <h1 class="h1"> Your Account </h>
</section>

<section id="buttons">

<!button 1>
<button class= "btn" id="ShowINFO">User Info</button>
<div class="Container" id="info-container"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="info.js"></script>

</section>

<h1 class="h2">
    Issue Section
</h1>

<form name="form" action="book_issue.php" method="post">
<input class="form-control" type="" name="book" placeholder="Enter Book You Want To Issue"></input>
</form>

<h1 class="h2">
    Return Section
</h1>

<form name="form" action="book_return.php" method="post">
<input class="form-control" type="" name="return" placeholder="Enter Book You Want To Return"></input>
</form>


<footer>
    DBS Project Library Management System | Copyrights
</footer>

</body>
</html>
