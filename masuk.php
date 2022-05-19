<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>DisBar</title>
    <script type="text/javascript" src="js/jquery.js"></script>
	  <script type="text/javascript" src="js/bootstrap.js"></script>
    <style>
      *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }
      .border1{
        width: 250px;
        height: 150px;
      }
      .btn1{
        border: none;
        outline: none;
        height: 50px;
        width: 50%;
        background-color: black;
        color: white;
        border-radius: 5px;
        font-weight: bold;
      }
      .btn1:hover{
        background: white;
        border: 1px solid;
        color: black;
      }
      img{
      }
    </style>
  </head>
  <body>
    <section class="form my-5 mx-5">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-7 text-center">
          </div>
          <div class="col-5 px-5 pt-5">
            <div class="">
            </div>
            <h3 class="my-3">Masuk</h3>
            <form>
              <div class="form-row">
                <div class="col-lg-8">
                  <input type="username" class="form-control my-3 p-2" placeholder="Username">
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-8">
                  <input type="password" class="form-control p-2" placeholder="Password">
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-8">
                  <a href="dashboard.php"><button type="button" class="btn1 mt-3 mb-4">Masuk</button></a>
                </div>
              </div>
              <a href="">Lupa password</a>
              <p>Belum punya akun? <a href="daftar.php">Daftar disini</a></p>
            </form>
          </div>
        </div>
      </div>
    </section>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>