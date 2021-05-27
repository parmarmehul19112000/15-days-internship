<html>
    <body align="center" >
        <h1>Registration Form</h1>

        <!-- registration form for post method-->
        <form action="regpostprocess.php" method="post">
                <label><b>Firstname</b></label><br>
                <input type="text" placeholder="Enter Firstname" name="txt1" required><br><br>
                <label><b>LastName</b></label><br>
                <input type="text" placeholder="Enter Lastname" name="txt2" required><br><br>
                <label><b>Mobile</b></label><br>
                <input type="text" placeholder="Enter Mobile" name="txt3"required><br><br>
                <label><b>Email</b></label><br>
                <input type="email" placeholder="Enter Email" name="txt4" required><br><br>
                <label><b>Password</b></label><br>
                <input type="password" placeholder=" Enter Password" name="txt5" required><br><br>
                <label><b>Confirm Password</b></label><br>
                <input type="password" placeholder="Reapeat Password" name="txt6" required><br><br>
                <input type="submit" value="Register">
        </form>
    </body>
 </html>