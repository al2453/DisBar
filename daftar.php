<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>DisBar</title>
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
    </style>
  </head>
  <body>
    <section class="form my-4 mx-4">
      <div class="container">
        <div class="row">
        <div class="col-5">
            <h3 class="my-3">Daftar</h3>
            <form>
              <div class="form-row">
                <div class="col-lg-8">
                  <label for="inputNamaLengkap" class="form-label">Nama lengkap</label>
                  <input type="text" id="namaLengkap" class="form-control p-2 mb-3" placeholder="Nama lengkap">
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-8">
                  <label for="inputEmail" class="form-label">Alamat email</label>
                  <input type="email" id="inputEmail" class="form-control p-2 mb-3" placeholder="Email">
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-8">
                  <label for="inputUsername" class="form-label">Username</label>
                  <input type="username" id="inputUsername" class="form-control p-2 mb-3" placeholder="Username">
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-8">
                  <label for="inputPassword" class="form-label">Password</label>
                  <input type="password" id="inputPassword" class="form-control p-2 mb-3" placeholder="Password">
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-8">
                  <label for="inputPassword" class="form-label">Ulangi password anda</label>
                  <input type="password" id="inputPassword" class="form-control p-2 mb-3" placeholder="Password">
                </div>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="termsAndCondition">
                <label class="form-check-label" for="termsAndCondition">
                Saya setuju dengan semua penyataan dalam syarat dan ketentuan</label>
              </div>
              <div class="form-row">
                <div class="col-lg-8">
                  <button type="button" class="btn1 mt-3 mb-4">Daftar</button>
                </div>
              </div>
              <p>Sudah punya akun ? <a href="masuk.php">Masuk disini</a></p>
            </form>
          </div>
        </div>
      </div>
    </section>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>