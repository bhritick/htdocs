<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <style>
    body {
      background: rgb(255,255,255);
background: -moz-linear-gradient(135deg, rgba(255,255,255,0) 50%, rgba(132,205,212,1) 50%, rgba(132,205,212,1) 100%);
background: -webkit-linear-gradient(135deg, rgba(255,255,255,0) 50%, rgba(132,205,212,1) 50%, rgba(132,205,212,1) 100%);
background: linear-gradient(135deg, rgba(255,255,255,0) 50%, rgba(132,205,212,1) 50%, rgba(132,205,212,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#ffffff",endColorstr="#84cdd4",GradientType=1);
    }
  </style>
</head>

<body>
  <header></header>
  <section>
    <div class="container-fluid" id="after-bodu-bg">
      <div class="row">
        <div class="col-12">
          <div class="card shadow-lg d-block rounded-0" style="max-width: 500px; margin:35vh auto;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="https://images.pexels.com/photos/1938032/pexels-photo-1938032.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-0" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control shadow-none rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control shadow-none rounded-0" id="exampleInputPassword1">
                    </div>
                    <!-- <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input shadow-none rounded-0" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div> -->
                    <button type="submit" class="btn btn-primary shadow-none rounded-0">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer></footer>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> -->
</body>

</html>