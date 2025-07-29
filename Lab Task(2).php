<DOCTYPE html>
    <html>
        <body>
            <center>
            <title>Mid_Task2</title>
            <h1>Bank Management System</h1>
            <h2>Your Trusted Financial Partner </h2>
            </center>

            <h3>Customer Register Form</h3>
            <table>
                <tr>
                <td>FullName</td><td><input type = "text" ></td>
                </tr>

                <tr>
                    <td>Date of Birth</td><td><input type = "date"></td>
                </tr>
                <tr>
                    <td>Gender : </td>
                    <td><input type = "radio" name = "des"> Male </td>
                    <td><input type = "radio" name = "des"> Female </td>
                    <td><input type = "radio" name = "des"> Other </td>
                </tr>


                <tr>
                    <td>Marital status : </td>

                    <td>
                        <select name = "Marital Status">
                            <option vlaue = "">Select</option>
                            <option value ="Single" >Single</option> 
                            <option value ="Married" >Married</option>
                        </select>
                    </td>

                    
                </tr>

                <tr>
                    <td>Account Type : </td>
                    
                    <td>
                        <select name = "Account Type">
                            <option value = "" >Select</option>
                            <option value = "Current">Current</option>
                            <option value = "Savings">Savings</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Mobile Number : </td><td><input type = "number"></td>
                </tr>


                <tr> 
                    <td>Email Address : </td><td><input type = "email"></td>
                </tr>

                <tr>
                    <td>Address : </td>
                    <td><textarea rows = "4" cols = "50" ></textarea></td>
                </tr>


                <tr>
                    <td></td>
                </tr>

            </table>

            <style>
                body {background-color: aqua;}
                h1,h2 {color: black;}
                table{background-attachment: #white;}
            </style>
           

        </body>
    </html>