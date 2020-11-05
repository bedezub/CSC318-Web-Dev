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
            <table style="text-align: center; margin-right: auto; margin-left: auto;" border="1" width="60%">
                    <tr>
                        <td>Time</td>
                        <td>8:00</td>
                        <td>9:00</td>
                        <td>10:00</td>
                        <td>11:00</td>
                        <td>12:00</td>
                        <td>13:00</td>
                        <td>14:00</td>
                        <td>15:00</td>
                        <td>16:00</td>
                        <td>17:00</td>
                        <td>18:00</td>
                    </tr>
                    <tr>
                        <td>Monday</td>
                        <td colspan="8"></td>
                        <td colspan="3">CSC301</td>
                    </tr>
                    <tr>
                        <td>Tuesday</td>
                        <td colspan="3">CSC305</td>
                        <td colspan="3"></td>
                        <td colspan="3">ITT300</td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td>Wednesday</td>
                        <td colspan="3">CSC301</td>
                        <td colspan="2">MAT263</td>
                        <td colspan="1"></td>
                        <td colspan="3">CSC318</td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td>Thursday</td>
                        <td colspan="2"></td>
                        <td colspan="3">CSC318</td>
                        <td colspan="1"></td>
                        <td colspan="3">MAT263</td>
                        <td colspan="3">CSC305</td>
                    </tr>
                    <tr>
                        <td>Friday</td>
                        <td colspan="2"></td>
                        <td colspan="3">ITT300</td>
                        <td colspan="6"></td>
                    </tr>
                </table>
            </article>
        </section>
    </body>
    <?php include 'footer.php'; ?>
</html>
