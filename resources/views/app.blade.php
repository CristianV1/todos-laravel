<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <title>inicio</title>
</head>
<body>
  
  <style>
    *{
      padding: 0;
      margin: 0;
    }
    html, body {
                background-color:	#f7b267;
                
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
    a{
      text-decoration: none;
    }

    .content-container{
      background-color:#f4845f;
    }

    .color-container{
      width: 12px;
      display: inline-block;
      border-radius: 2px;
      margin-right: 10px;
      height: 12px;
    }

    ul{
      
      padding: 0 !important;
      margin: 0 !important;
    }

    .navbar-color{
      background-color: #f25c54;
    }

    .nav-item{

      list-style: none;
      font-size: 18px;
      margin-right: 10px;
    }
  </style>

<nav class="navbar navbar-expand-lg bg align-items-center text shadow navbar-color" ">
  <div class="container-fluid justify-content-center ">
      <ul class="navbar flex-row">
        <li class="nav-item">
          <a class="nav-link link-light  " aria-current="page" href="/todos"">Todos</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link link-light" href="/categories">Categories</a>
        </li>
      </ul>
    
  </div>
</nav>


@yield("content")

</body>
</html>