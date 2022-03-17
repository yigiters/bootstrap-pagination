<?php 
$page =  isset($_GET["page"]) ? $_GET["page"] : 1;
$showpage = '2';
$totalpage = '10';
?>
<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container" style="margin-top:3%;">
      <div class="col-md-12 d-flex justify-content-center">
        <div class="row">
          <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container" style="margin-top: 1%;">
      <div class="col-md-12 d-flex justify-content-center">
        <nav aria-label="...">
          <ul class="pagination">
            <li class="page-item <?php if($page == 1) {echo 'disabled';} ?>">
              <a class="page-link" href="/home?page=<?php echo $page -1; ?>">Previous</a>
            </li>
            <?php  

            for ($i=$page - $showpage; $i <  $page + $showpage + 1 ; $i++) { 
              if ($i > 0 and $i <= $totalpage ) {
                if ($i == $page) {
                  echo "<li class='page-item active' aria-current='page'>
                  <a class='page-link' href='/home?page=$i'>$i</a>
                  </li>";
                } else {
                  echo "<li class='page-item'><a class='page-link' href='/home?page=$i'>$i</a></li>";
                }
              }
            }

            ?>
            <li class="page-item <?php if($page == $totalpage) {echo 'disabled';} ?>">
              <a class="page-link" href="/home?page=<?php  echo $page + 1 ?>">Next</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
  </html>

