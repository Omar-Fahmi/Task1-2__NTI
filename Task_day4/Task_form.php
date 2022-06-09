<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Register</h2>

        <form  method="post"  action="Task-action-form.php">

            <div class="form-group">
                <label for="exampleInputName">Name:</label>
                <input type="text" class="form-control"   name="name"  id="exampleInputName" aria-describedby="" placeholder="Enter Name">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail">Email address:</label>
                <input type="email" class="form-control" name="email"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>


            <div class = "form-group">
                <label for = "exampleInputPassword">Password:</label>
                <input type = "password" class =  "form-control" name = "password" id = "exampleInputPassword1" placeholder = "Enter password">
            </div>


            <div class = "form-group">
                <label for = "exampleInputGender">Select your gender:</label><br>
                <select name="gender">
                    <option value = "none">None</option>
                    <option value = "male">Male</option>
                    <option value = "female">Female</option>
                </select>    
                <!-- there is another way to make gender selection but i will use hte first -->
                <!-- <input type="radio" name="gender" value="male"> Male<br>
                <input type="radio" name="gender" value="female"> Female<br>
                <input type="radio" name="gender" value="other"> Other -->
            </div>


            <div class = "form-group">
                <label for = "exampleInputAdress">Enter your adress:</label>
                <input type="text" class = "form-control" name="adress" id="exampleInputAdress" placeholder="Enter address here">
            </div>


            <div class = "form-group">
                <label for = "exampleInputurl">Enter your linkedIn URL:</label>
                <input type="text" class = "form-control" name="URl" id="exampleInputURL" placeholder="Enter URL here">
            </div>

            <div>
                <label for = "Uplode CV">Uplode your CV:</label>
                <input type="file" name="file" id="UploadCv"><br>
                <!-- <input type="submit" value="Upload File" name="submit"> -->
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>