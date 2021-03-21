<html>
<head>
    <title>Application Form</title>
    <link rel="icon" href="favicon-32x32.png" type="image/png" sizes="32x32">
    <
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        
    <style>
         body{
             background-color:#a6e3e9;
         }
          
           .container
            {
                background-color:#95e1d3;
                margin: auto;
                max-width: 280px;
                padding: 10px;
                border-radius: 4px;    
            } 
            
            .text{
                margin-top:100px;
                display:inline-block;
                width: 100%;
                padding: 20px;
                border-sizing: border-box;
                border-radius: 10px;
                border: .5px solid black;
                margin: 10px 0;
            }

            .header{
                text-align:center;
                font-size:50px;
            }

            .button{
                width: 100%;
                padding: 10px;
                margin:10px 0;
                border-radius: 4px;
                border: none;
                font-size:20px;
                cursor:pointer;
                background-color: yellow;
            }


        </style>


</head>

    


<body>
        
    <h1 class="header">📄Registration Form</h1>
    <div class="container">
        
        <form action="insert.php" method="POST">
            <div class="text">   
                <label for="">Name: </label>
                <input type="text" name="name" required><br>
                <br>
           
                 <label for="">Email: </label>
                 <input type="email" name="email" required><br>
                 <br>
           
                    <label for="">Contact:</label>
                    <input type="tel" name="contact" pattern="[7-9]{1}[0-9]{9}" required><br>
           
                <br>
           
                    <label for="">Date of Birth:</label>
                    <input type="date" name="dob"><br>
                <br>
                    <p>Please select your gender:</p>
                         <input type="radio" id="male" name="gender" value="male">
                         <label for="male">Male</label><br>
                         <input type="radio" id="female" name="gender" value="female">
                         <label for="female">Female</label><br>
                         <input type="radio" id="other" name="gender" value="other">
                         <label for="other">Other</label><br><br>


                <button type="submit" name="submit" class="button">Submit</button>
        </div>
    </div>
        
        </form>



        </fieldset>
        
    </body>
</html>