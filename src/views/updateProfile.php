<html>
/**
 * Written By: Derek
 * Date: 28/01/12
 * Time: 9:11 AM
 */
 */

    <form action="updated.php" method="post">
    <input type="hidden" name="ud_id" value="<? echo $id; ?>">
    First Name: <input type="text" name="ud_first" value="<? echo $first; ?>"><br>
    Last Name: <input type="text" name="ud_last" value="<? echo $last; ?>"><br>
    Phone Number: <input type="text" name="ud_phone" value="<? echo $phone; ?>"><br>
    Mobile Number: <input type="text" name="ud_mobile" value="<? echo $mobile; ?>"><br>
    Fax Number: <input type="text" name="ud_fax" value="<? echo $fax; ?>"><br>
    E-mail Address: <input type="text" name="ud_email" value="<? echo $email; ?>"><br>
    Web Address: <input type="text" name="ud_web" value="<? echo $web; ?>"><br>
    <input type="Submit" value="Update">
    </form>


</html>