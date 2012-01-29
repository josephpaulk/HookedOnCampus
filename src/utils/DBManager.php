<?php
/**
 * User: Derek Dowling
 * Date: 28/01/12
 * Time: 12:08 AM
 */




    /**
     * Opens a new db connection.
     */
    function open()
    {

        $user="cq7753_test";
        $password="gamejam";
        $database="cq7753_hooked";

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


        $query = "INSERT INTO $tableName VALUES ('',";

        $i = 0;
        $count = sizeof($values);

        //values must be in proper order as in table, first value is null for auto assigned id
        foreach($values as $value=>$key)
        {

            if($i < $count - 1)
                $query . "'$key',";
            else
                $query . "'$key');";

        }

            mysql_query($query);

            mysql_close();

    }

    /**
     * @param $tableName - name of table to delete value from
     * @param $values   - as an associative array. ex) $values["username"] = "joe";
     */
    function delete($tableName, $id)
    {

        open();

        $query = "DELETE FROM $tableName WHERE 'id' = $id;";

        mysql_query($query);

        mysql_close();

    }

    /**
     * @param $tablename - name of table id is in
     * @param $id   - id to update on
     * @param $values - associative array of values ex) $values["age"] = 17;
     */
    function update($tablename, $id, $values)
    {

        open();

        foreach($values as $value)
        {

            $values[$value] = $_POST[$value];

        }

        /*UPDATE table_name
        SET column1=value, column2=value2,...
        WHERE some_column=some_value */

        $query = "UPDATE $tablename SET ";

        $i = 0;
        $count = sizeof($values);

        foreach($values as $key=>$value)
        {

            if($i < $count - 1)
                $query . $key . " = " . $value . ",";
            else
                $query . $key . " = " . $value;

        }

        $query . " WHERE 'id' = $id);";

        mysql_query($query);

        mysql_close();

    }

?>