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
                            <td>Full Name:</td> 
                            <td><input type="text" name="fullname" maxlength="50" placeholder="Hamiz Radzi" required></td>
                        </tr>
                        <tr>
                            <td>Birth date:</td>
                            <td><input type="date" name="birthdate" required></td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td><input type="email" name="email" maxlength="100" placeholder="hamizradzi@gmail.com" required/><br></td>
                        </tr>
                        <tr>
                            <td>Address:</td>
                            <td><textarea type="text" name="address" rows="5" cols="20"></textarea></td>
                        </tr>
                        <tr>
                            <td>States:</td>
                            <td>
                                <select id="state" name="state">
                                    <option value="Johor">Johor</option>
                                    <option value="Kedah">Kedah</option>
                                    <option value="Kelantan">Kelantan</option>
                                    <option value="KL">Kuala Lumpur</option>
                                    <option value="Melaka">Melaka</option>
                                    <option value="NSembilan">Negeri Sembilan</option>
                                    <option value="Pahang">Pahang</option>
                                    <option value="Penang">Penang</option>
                                    <option value="Perak">Perak</option>
                                    <option value="Perlis">Perlis</option>
                                    <option value="Selangor" selected>Selangor</option>
                                    <option value="Sabah">Sabah</option>
                                    <option value="Sarawak">Sarawak</option>
                                    <option value="Terengganu">Terengganu</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Faculty:</td>
                            <td>
                                <input id="faculty" type="radio" name="faculty" value="Fakulti Sains Komputer dan Matematik"><span style="padding-left: 5px;">Fakulti Sains Komputer dan Matematik<br>
                                <input id="faculty" type="radio" name="faculty" value="Fakulti Perladangan and Agroteknologi"><span style="padding-left: 5px;"></span>Fakulti Perladangan and Agroteknologi<br>
                                <input id="faculty" type="radio" name="faculty" value="Fakulti Kejuteraan Mekanikal"><span style="padding-left: 5px;"></span>Fakulti Kejuteraan Mekanikal<br>                     
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <input type="submit" value="Submit">
                                <input type="reset" value="Reset">
                            </td>
                        </tr>
                    </table>
                </form>
            </article>
        </section>
    </body>
    <? include 'footer.php'; ?>
</html>