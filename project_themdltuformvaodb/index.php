<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert du lieu tu form client vao database mysql</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-md-3">

                <form id="form_reg" class=bg- light p-4 my-3" action="reg.php" method="post">
                    <h2 class="my-3 text-center tex-upper case">dang ki tai khoann</h2>
                    <div class="form-group">
                        <label for="fullname">ho va ten </label>
                        <input type="text" name="fullname" class="form-control" id="fullname">

                    </div>
                    <div class="form-group">
                        <label for="username">ten dang nhap </label>
                        <input type="text" name="user_name" class=form-control" id="username">

                    </div>
                    <div class="form-group">
                        <label for="password">nhap mat khau</label>
                        <input type="password" name="pass_word" class=form-control" id="password">
                    </div>
                    <div class="form-group">
                        <label for="email">nhap email</label>
                        <input type="email" name="email" class=form-control" id="email">

                    </div>
                    <div class="form-group">
                        <label for="">gioitinh</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="male">nam</label>
                                <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="female">nu</label>
                                <input class="form-check-input" type="radio" name="gender" id="female" value="female">

                            </div>
                        </div>



                    </div>
                    <div class="form-group">
                <label for="address">dia chi</label>    
                <input type="address" name="address" class=form-control" id="address">
                
                </div>
<input type="submit" name="btn-reg" class="btn btn-primary btn-block mt-4" value="dang ki"> 

                </form>

            </div>
        </div>
    </div>
</body>

</html>