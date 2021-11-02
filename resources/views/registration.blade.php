<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<!-- 
<h1>Registration Form</h1>


<div >

<form action="save" method="POST">
    @csrf

    <table>

        <tr>
            <td><label for="name">Name : </label><br></td>
            <td><input  type="text" name="name" id="name"><br>
                <span style="color:red">
                @error('name')
                    {{ $message }}
                @enderror
                </span><br>
            </td>
        </tr>
        <tr>
            <td><label for="email">Email : </label><br></td>
            <td><input placeholder="example@gmail.com" type="text" name="email" id="email"><br>
                <span style="color:red">
                @error('email')
                    {{ $message }}
                @enderror
                </span><br>
            </td>
        </tr>
        <tr>
            <td><label for="password">Password : </label><br></td>
            <td><input type="password" name="password" id="password"><br>
                <span style="color:red">
                @error('password')
                    {{ $message }}
                @enderror
                </span><br>
            </td>
        </tr>


        <tr>
          <td><br></td>
        </tr>

        <tr>
        	  <td></td>
            <td><input type="submit" name="signup_bt" value="signup" id="signup_bt"></td>
            <td><a href="login"> you already have any account? LOGIN </a></td>
        </tr>


    </table>

</form>
</div> -->
<form action="save" method="POST">
    @csrf



<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Registration</h2>
              <p class="text-white-50 mb-5">Please Fill Up The Form To register</p>


               <div class="form-outline form-white mb-4">
                <input class="form-control form-control-lg" type="text" name="name" id="name"><br>
                <span style="color:red">
                @error('name')
                    {{ $message }}
                @enderror
                </span>
                <label class="form-label" for="name">Name</label>

               
              </div>



              <div class="form-outline form-white mb-4">
                
               <input class="form-control form-control-lg"  placeholder="example@gmail.com" type="text" name="email" id="email"><br>
                <span style="color:red">
                @error('email')
                    {{ $message }}
                @enderror
                </span>
                <label class="form-label" for="typeEmailX">Email</label>
              </div>

              <div class="form-outline form-white mb-4">
               
                <input class="form-control form-control-lg"  type="password" name="password" id="password"><br>
                <span style="color:red">
                @error('password')
                    {{ $message }}
                @enderror
                </span>
                <label class="form-label" for="typePasswordX">Password</label>
              </div>

             

              <button class="btn btn-outline-light btn-lg px-5" type="submit">SIGN-UP</button>

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>

            <div>
              <p class="mb-0">you already have any account?<a href="login" class="text-white-50 fw-bold">LOGIN </a></p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</form>


</body>
</html>
