<?php
/**
 * User: Derek Dowling
 * Date: 28/01/12
 * Time: 12:08 AM
 */


    $user="username";
    $password="password";
    $database="database";



//    $query= "CREATE TABLE contacts (id int(6) NOT NULL auto_increment, " +
//            "first varchar(15) NOT NULL,last varchar(15) NOT NULL, " +
//            "phone varchar(20) NOT NULL,mobile varchar(20) NOT NULL," +
//            "fax varchar(20) NOT NULL,email varchar(30) NOT NULL," +
//            "web varchar(30) NOT NULL,PRIMARY KEY (id),UNIQUE id (id),KEY id_2 (id))";
//
//    mysql_query($query);
    mysql_close();

    /**
     * Opens a new db connection.
     */
    function open()
    {

        mysql_connect(localhost,$user,$password);
        @mysql_select_db($database) or die( "Unable to select database");

    }

    /**
     * @param $statement - the SQL Select Query
     * @param $cols - the columns you wish to have returned
     *
     * @returns Returns a 2D array equivalent to [numRows][NumCols] where
     * numRows is of type int and numCols is a string value. Example:
     *
     *  $username = $array[0]["username"];
     *
     * This would return the username of the first user returned in the select statement.
     */
    function select($statement, $cols)
    {

        open();

        $result = mysql_query($statement);

        $num = mysql_num_rows($result);

        $i = 0;

        $array = "";

        //iterate for each row result
        while($i < $num)
        {
            $aPos = 0;

            //add associative value for each column
            while($aPos < sizeof($cols))
            {

                $array[$i][$cols[$aPos]] = mysql_result($result,$i,$cols[$aPos]);

            }


            $i++;
        }

        mysql_close();

        return $array;

    }

    /**
     * @param $tableName - name of table inserting into in string form. ex) $table = "users";
     * @param $cols - array of strings containing the names of the columns we are inserting into,
     *                column names in db tables must match the "name" value in: <input type="text" name="first">
     */
    function insert($tableName, $cols)
    {

        open();

        $values = "";

        foreach($cols as $col)
        {

            $values[$col] = $_POST[$col];

        }


        $query = "INSERT INTO '$tableName' VALUES ('',"; //"'$first','$last','$phone','$mobile','$fax','$email','$web')";

        //values must be in proper order as in table, first value is null for auto assigned id
        foreach($values as $value)
        {

            $query . "'$value,'";

        }

            mysql_query($query);

            mysql_close();

    }

    /**
     * @param $tableName - name of table to delete value from
     * @param $values   - as an associative array. ex) $values["username"] = "joe";
     */
    function delete($tableName, $values)
    {

        open();

        $query = "DELETE FROM '$tableName' WHERE "


        //TODO: Needs work, have to add optional condition "AND" condition
        foreach($values as $key=>$value)
        {

            $query . "'$key' = '$key'";

        }

        mysql_query("DELETE FROM Persons WHERE LastName='Griffin'");

        mysql_close($con);

    }

?>