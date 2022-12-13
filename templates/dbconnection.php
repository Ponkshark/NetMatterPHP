<?php
//Function to open the connection to my contact_details database
            function OpenCon(){
                // My local cpanel host
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "contact_details";
                // $servername = "localhost";
                // $username = "kylewarf_kylewarford";
                // $password = "u2FQhn6ip6DzSLc";
                // $dbname = "kylewarf_portfolio";
                // Create connection
                $conn = new mysqli($servername,
                    $username, $password, $dbname);

                return $conn;
            }
            //Function to close the connection
            function CloseCon($conn)
            {
                $conn -> close();
            }

            //Open the connection
            $conn = OpenCon();
?>