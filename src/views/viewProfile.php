/**
 * Written By: Derek
 * Date: 28/01/12
 * Time: 10:21 AM
 */

    <html>
        <form action="updated.php" method="post">
           <input type="hidden" name="ud_id" value="<? echo $id; ?>">
           First Name: <input type="text" name="ud_first" value="<? echo $results["first"]; ?>"><br>
           Last Name: <input type="text" name="ud_last" value="<? echo $results["last"]; ?>"><br>
           Phone Number: <input type="text" name="ud_phone" value="<? echo $results["$phone"]; ?>"><br>
           Mobile Number: <input type="text" name="ud_mobile" value="<? echo $results["$mobile"]; ?>"><br>
           Fax Number: <input type="text" name="ud_fax" value="<? echo $results["$fax"]; ?>"><br>
           E-mail Address: <input type="text" name="ud_email" value="<? echo $results["$email"]; ?>"><br>
           Web Address: <input type="text" name="ud_web" value="<? echo $results["web"]; ?>"><br>
           <input type="Submit" value="Update">
        </form>
    </html>