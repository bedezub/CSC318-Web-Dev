<!DOCTYPE html>
<html>
    <head> 
        <title>
            Course Registration System
        </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <header>
            <?php include 'header.php' ?>
        </header>
        <section>
            <nav>
                <?php include 'navigation.php'; ?>
            </nav>
            <article>
            <h2 style="text-align: center;">Contact Me</h2><br>
                <form action="insertStudentAction.php" id="form" method="POST">
                    <table>
                        <tr>
                            <td style="text-align: right;">Full Name:</td> 
                            <td style="text-align: left;"><input type="text" name="fullname" maxlength="50" placeholder="Zubli Quzaini" required></td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">Email:</td>
                            <td  style="text-align: left;"><input type="email" name="email" maxlength="100" placeholder="zubliquzaini@gmail.com" required/><br></td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">Title:</td>
                            <td  style="text-align: left;"><input type="text" name="title" maxlength="100" placeholder="hamizradzi@gmail.com" required/><br></td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">Content:</td>
                            <td  style="text-align: left;"><textarea type="text" name="content" rows="5" cols="20"></textarea></td>
                        </tr>
                    </table>
                    <tr>
                        <select name="college" id="college">
                            <option value="tg1">Say Hello</option>
                            <option value="tg2">Discussion</option>
                        </select><br>
                    </tr>
                    <tr>
                            <input type="radio" id="male" name="gender" value="male">
                            <label for="male">Male</label>
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">Female</label><br>
                    </tr>
                    <tr>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        <label for="vehicle1"> Do you want to receive updates from my blog?</label><br>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" value="Submit">
                            <input type="reset" value="Reset">
                        </td>
                    </tr>
                </form>
            </article>
        </section>
    </body>
    <? include 'footer.php'; ?>
</html>