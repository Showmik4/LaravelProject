<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body style="background-color: slategray">
    <a href="/Registration">Registration</a>
    <form method="POST">
        @csrf
        <table>
        
           
            <tr>
                <td>Username:</td>
                <td ><input type="text" name="email" value=""></td>
            </tr> 

            <tr>
                <td>Password:</td>
                <td ><input type="text" name="password" value=""></td>
            </tr> 

              <tr>
                <td ><input type="submit" value="Submit"></td>
                
              </tr>
        
        
        </table>
        
        
        
         </form>
        
         <br>
         {{session('msg')}}
         <br>
         @foreach ($errors->all() as $error)
             {{$error}} <br>
         @endforeach 
</body>
</html>