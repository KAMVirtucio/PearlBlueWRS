<?php
    session_start();
    if(!isset($_SESSION["session_accountname"]) && !isset($_SESSION["session_id"])){
        header("location: /PearlBlueWRS/login.php");
    }
    else{
        error_reporting("E-NOTICE");
        include("include/connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="60">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/PearlBlueWRS/images/logo.png">
    <title>Pearl Blue Water Refilling Station</title>
    <link href="/PearlBlueWRS/css/admin/employees.css" rel="stylesheet" media="screen">
</head>
<body>
    <div id="navbarContainer">
        <div id="navbarBox">
            <div id="navbar">
                <div id="logoPearlBlueContainer">
                    <img src="/PearlBlueWRS/images/logoPearlBlueWRS.png" alt="LOGO" id="logoPearlBlue">
                </div>
                <a href="/PearlBlueWRS/admin/" id="dashboardlink" class="linknavbar">
                    <div id="dashboardContainer">
                        <div id="dashboardIconContainer" class="inlineDesign">
                            <img src="/PearlBlueWRS/images/icons/admin/home.png" alt="DASHBOARD" id="dashboardIcon">
                        </div>
                        <div id="dashboardTextContainer" class="inlineDesign">
                            <span id="dashboardText">DASHBOARD</span>
                        </div>
                    </div>
                </a>
                <a href="/PearlBlueWRS/admin/inventory.php" id="inventorylink" class="linknavbar">
                    <div id="inventoryContainer">
                        <div id="inventoryIconContainer" class="inlineDesign">
                            <img src="/PearlBlueWRS/images/icons/admin/inventory.png" alt="INVENTORY" id="inventoryIcon">
                        </div>
                        <div id="inventoryTextContainer" class="inlineDesign">
                            <span id="inventoryText">INVENTORY</span>
                        </div>
                    </div>
                </a>
                <a href="/PearlBlueWRS/admin/sales.php" id="salesandexpenseslink" class="linknavbar">
                    <div id="salesandexpensesContainer">
                        <div id="salesandexpensesIconContainer" class="inlineDesign">
                            <img src="/PearlBlueWRS/images/icons/admin/coins.png" alt="SALES AND EXPENSES" id="salesandexpensesIcon">
                        </div>
                        <div id="salesandexpensesTextContainer" class="inlineDesign">
                            <span id="salesandexpensesText">SALES</span>
                        </div>
                    </div>
                </a>
                <a href="/PearlBlueWRS/admin/expenses.php" id="expenseslink">
                    <div id="salesandexpensesContainer">
                        <div id="salesandexpensesIconContainer" class="inlineDesign">
                            <img src="/PearlBlueWRS/images/icons/admin/expenses.png" alt="SALES AND EXPENSES" id="expensesIcon">
                        </div>
                        <div id="salesandexpensesTextContainer" class="inlineDesign">
                            <span id="salesandexpensesText">EXPENSES</span>
                        </div>
                    </div>
                </a>
                <a href="/PearlBlueWRS/admin/reports.php" id="reportslink" class="linknavbar">
                    <div id="reportsContainer">
                        <div id="reportsIconContainer" class="inlineDesign">
                            <img src="/PearlBlueWRS/images/icons/admin/chart.png" alt="REPORTS" id="reportsIcon">
                        </div>
                        <div id="reportsTextContainer" class="inlineDesign">
                            <span id="reportsText">REPORTS</span>
                        </div>
                    </div>
                </a>
                <a href="/PearlBlueWRS/admin/employees.php" id="employeeslink" class="linknavbar">
                    <div id="employeesContainer">
                        <div id="employeesIconContainer" class="inlineDesign">
                            <img src="/PearlBlueWRS/images/icons/admin/employee.png" alt="EMPLOYEES" id="employeesIcon">
                        </div>
                        <div id="employeesTextContainer" class="inlineDesign">
                            <span id="employeesText">EMPLOYEES</span>
                        </div>
                    </div>
                </a>
                <a href="/PearlBlueWRS/admin/patrons.php" id="patronslink" class="linknavbar">
                    <div id="patronsContainer">
                        <div id="patronsIconContainer" class="inlineDesign">
                            <img src="/PearlBlueWRS/images/icons/admin/patron.png" alt="PATRONS" id="patronsIcon">
                        </div>
                        <div id="patronsTextContainer" class="inlineDesign">
                            <span id="patronsText">PATRONS</span>
                        </div>
                    </div>
                </a>
                <a href="/PearlBlueWRS/admin/logout.php" id="logoutlink" class="linknavbar">
                    <div id="logoutContainer">
                        <div id="patronsIconContainer" class="inlineDesign">
                            <img src="/PearlBlueWRS/images/icons/admin/logout.png" alt="LOGOUT" id="logoutIcon">
                        </div>
                        <div id="logoutTextContainer" class="inlineDesign">
                            <span id="logoutText">LOGOUT</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div id="dashboardTextCont">
        <span id="dashboardTextTop">EMPLOYEES</span>
    </div>
    <div id="searchfilterContainer">
        <div id="searchfilter">
            <div id="addButtonContainer" class="inlinesearchfilter">
                <button id="addButton" onclick="location.href='/PearlBlueWRS/admin/employees-add.php'">
                    <img src="/PearlBlueWRS/images/icons/admin/add.png" id="addButtonIcon">
                </button>
            </div>
            <div id="searchContainer" class="inlinesearchfilter">
                <form action="employees-search.php" method="POST" class="inlinesearchfilter">
                    <input type="text" name="searchKey" id="searchKey" placeholder="Search">
                    <button type="submit" id="submitSearch" name="submitSearch"><img src="/PearlBlueWRS/images/icons/admin/search.png" id="searchIcon"></button>
                </form>
            </div>
        </div>
    </div>
    <div id="addFormContainer">
        <form action="" method="post" id="addForm">
            <div id="inputNameContainer" class="FormData">
                <input type="text" name="name" id="name" placeholder="Input the Patrons Name">
            </div>
            <div id="inputAddressContainer" class="FormData">
                <input type="text" name="address" id="address" placeholder="Input the Patrons Address">
            </div>
            <div id="inputContactDetailsCOntainer" class="FormData">
                <input type="text" name="contactnumber" id="contactnumber" placeholder="Input the Patron Contact Details">
            </div>
            <div id="inputPositionContainer" class="FormData">
                <select name="position" id="position">
                    <option value="">Select the Patron Delivery Scheme</option>
                    <option value="Refilling Staff">Daily</option>
                    <option value="Delivery Staff">Weekly</option>
                    <option value="Cashier">Monthly</option>
                </select>
            </div>
            <div id="submitAddContainer">
                <input type="submit" value="ADD NEW EMPLOYEE" id="submitAdd" name="submitAdd">
            </div>
        </form>
    </div>
    <?php
        if(isset($_POST['submitAdd'])){
            if($_POST['name'] != null && $_POST['address'] != null && $_POST['contactnumber'] != null && $_POST['position']){
                $name = $_POST['name'];
                $address = $_POST['address'];
                $contactnum = $_POST['contactnumber'];
                $position = $_POST['position']; 

                $sql = mysqli_query($con, "SELECT * FROM employee WHERE employeename='$name' AND employeeaddress='$address' AND employeecontactdetails='$contactnum' AND employeeposition='$position'");
                $checksql = mysqli_num_rows($sql);

                if($checksql > 0){
                    ?>
                    <script>
                        alert("Employee already existing! Please try again!");
                    </script>
                    <?php
                }
                else{
                    mysqli_query($con, "INSERT INTO employee (employeename, employeeposition, employeeaddress, employeecontactdetails) VALUES ('$name', '$position', '$address', '$contactnum')");
                    ?>
                    <script>
                        alert("New employee successfully added!");
                    </script>
                    <?php
                }
            }
            else{
                ?>
                    <script>
                        alert("Please input all the needed details!");
                    </script>
                <?php
            }
        }
    ?>
</body>
</html>
<?php
    }
?>