<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>MONITOR EXAMPLE · Bootstrap</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/navbar-fixed/">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">  
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="navbar-top-fixed.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="/">MONITOR EXAMPLE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/">Disabled</a>
      </li>
    </ul>  
  </div>
</nav>
<main role="main" class="container">
  <div class="jumbotron">
    <h1 align="center">MONITOR EXAMPLE</h1>
    <p align="center" class="lead">This example is a quick exercise to illustrate how fixed to top navbar works. As you scroll, it will remain fixed to the top of your browser’s viewport.</p>
  </div>
</main>



<div class="container">
  <table class="table table-bordered table-hover table-sm">
  <thead class="thead-dark fixed">
    <tr> 
      <th scope="col">Region</th>
      <th scope="col">Confirmed</th>
      <th scope="col">Last Update</th>
      <th scope="col">Recovered</th>
      <th scope="col">Deaths</th>
      <th scope="col">Active</th>
    </tr>
  </thead>
  <tbody id="data-monitor"></tbody>
</table>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>  
<script>
  $(document).ready(function(){
    $.ajax({
      url:'https://api.kawalcorona.com/',
      dataType:'json',
      method:'get',
      success:function(res){
        loop(res);
      }
    });
  });
  function loop(data){
    for(var i = 0; i < data.length; i++){
      var string = "<tr>"+
                        "<td>"+data[i]['attributes']['Country_Region']+"</td>"+ 
                        "<td>"+data[i]['attributes']['Confirmed']+"</td>"+
                        "<td>"+data[i]['attributes']['Last_Update']+"</td>"+     
                        "<td>"+data[i]['attributes']['Recovered']+"</td>"+
                        "<td>"+data[i]['attributes']['Deaths']+"</td>"+
                        "<td>"+data[i]['attributes']['Active']+"</td>"+
                      "</tr>";
              $("#data-monitor").append(string);        
        }
      }
</script> 
</body>  
</html>
