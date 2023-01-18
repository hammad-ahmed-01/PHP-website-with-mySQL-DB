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
                    <a href="#" class="nav-item nav-link">All Tables</a>
                    <a href="books_data.php" class="nav-item nav-link">Books Data</a>
                </div>                
            </div>
        </div>
    </nav>


<h1 class="h1"> All tables of our Database</h1>

<section id="buttons">

<!button 1>
<button class= "btn" id="ShowBOOK">Book Table</button>
<div class="Container" id="book-container"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="book.js"></script>


<!button 2>
<button class= "btn" id="ShowLOGIN">Login Table</button>
<div class="Container" id="login-container"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="login.js"></script>

<!button 3>
<button class= "btn" id="ShowFINE">Fine Table</button>
<div class="Container" id="fine-container"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="fine.js"></script>

</section>

<section id="buttons">

<!button 4>
<button class= "btn" id="ShowISSUE">Issue Books Table</button>
<div class="Container" id="issue-container"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="issue.js"></script>



<!button 5>
<button class= "btn" id="ShowUSER">User Table</button>
<div class="Container" id="user-container"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="user.js"></script>

</section>

<footer>
    DBS Project Library Management System | Copyrights
</footer>

</body>
</html>