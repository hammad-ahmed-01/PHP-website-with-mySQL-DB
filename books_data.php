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
                    <a href="#" class="nav-item nav-link">Books Data</a>
                </div>                
            </div>
        </div>
    </nav>


<h1 class="h1"> All Books and their Info in our Database</h1>

<section id="block">
<div class="tab">
    <?php include 'display_book.php' ?>
</div>


<footer>
    DBS Project Library Management System | Copyrights
</footer>

</section>
</body>
</html>