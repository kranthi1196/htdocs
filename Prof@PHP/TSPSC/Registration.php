<?php
include 'validations.php';


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration</title>
    <style>
      /*
        div {
          height: auto;
          width: 85%;
          background-color: powderblue;
          align-items: center;
        }

        fieldset {
            padding-top: 20px;
            margin: auto;
          width: 70%;
          background-color: powderblue;
          font-weight: 700;
          color: rgb(1, 6, 100);
          
        }
        table {
            
          width: 100%;
          padding: 0px;
          padding-left: 150px;
        }
        h4 > a {
            align-content: center;
          padding-left: 220px;
          color: rgb(5, 10, 163);
          font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
            "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
        }
        tr > td {
          padding-right: 50px;
        }
        
        
        td>center{
            padding-top:10px;
            padding-left:10px;
        }
       
      a{
        padding-left:auto;
        padding-right:auto;
      }*/
      body{
        background-color: powderblue;
      }
      form {
            padding-left:auto;
            padding-right:auto;
            margin:auto;
            width: 30%;
            height: 300px;
            background-color: powderblue;
        }
        fieldset {
            padding-left:auto;
            padding-right:auto;
            padding-top: 20px;
            padding-bottom:20px;
            margin: auto;
            width:80%;
            background-color: powderblue;
            font-weight: 100;
            color: rgb(1, 6, 100); 
        }
        table{
            padding-left:auto;
            padding-right:auto;
            margin:auto;
        }

      </style>
  </head>
  <body>
    <center>
      <u
        ><h3 style="color: green; font-family: Lato">
          User Registration Form
        </h3></u
      ></center>
      <center><form
        action=""
        method="post"
        enctype="multipart/form-data"
      >
        <br />
        <fieldset>
          <legend >Register Here :</legend>
          <table>
            <tr>
              <td>First Name</td>
              <td>
                
                <input
                  type="text"
                  name="fname"
                  onKeyup="this.value = this.value.toUpperCase()"
                  required
                />
              </td>
            </tr>
            <tr>
              <td>Last Name</td>
              <td>
                
                <input
                  type="text"
                  name="lname"
                  onKeyup="this.value = this.value.toUpperCase()"
                  required
                />
              </td>
            </tr>
            <tr>
              <td>Mobile Number</td>
              <td> <input type="text" name="mobile" value="" required /></td>
            </tr>
            <tr>
              <td>Email ID</td>
              <td> <input type="email" name="email" value="" required /></td>
            </tr>
            <tr>
              <td>Password</td>
              <td> <input type="password" name="pass" value="" required /></td>
            </tr>
            <tr>
              <td>Confirm Password</td>
              <td>
                 <input type="password" name="conpass" value="" required />
              </td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr><center>
              <td></td>
              <td>
                <input type="submit" name="reg_submit" id="" />
              </td>
              <td></td></center>
            </tr>
          </table>

          <h4><a href="login.php"> Already a Registered? Login Here</a></h4>
        </fieldset>
      </form>
    </center>
  </body>
</html>
