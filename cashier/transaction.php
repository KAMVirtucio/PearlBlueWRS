<?php
    session_start();
    if(!isset($_SESSION["session_accountname"]) && !isset($_SESSION["session_id"])){
        header("location: /PearlBlueWRS/login.php");
    }
    else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="60">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/PearlBlue/images/logo.png">
    <title>Pearl Blue Water Refilling Station</title>
    <link href="/PearlBlueWRS/css/cashier/transactiondesign.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
    <div id="navbarContainer">
        <div id="navbarBox">
            <div id="navbar">
                <div id="logoPearlBlueContainer">
                    <img src="/PearlBlue/images/logoPearlBlueWRS.png" alt="LOGO" id="logoPearlBlue">
                </div>
                <a href="/PearlBlueWRS/cashier/" id="dashboardlink" class="linknavbar">
                    <div id="dashboardContainer">
                        <div id="dashboardIconContainer" class="inlineDesign">
                            <img src="/PearlBlue/images/icons/admin/home.png" alt="DASHBOARD" id="dashboardIcon">
                            <span id="dashboardText">DASHBOARD</span>
                        </div>
                    </div>
                </a>
                <a href="/PearlBlueWRS/cashier/walkin.php" id="walkinlink" class="linknavbar">
                    <div id="walkinContainer">
                        <div id="walkinIconContainer" class="inlineDesign">
                            <img src="/PearlBlue/images/icons/walkin.png" alt="WALK-IN" id="walkinIcon">
                            <span id="walkinText">WALK-IN TRANSACTION</span>
                        </div>
                    </div>
                </a>
                <a href="/PearlBlueWRS/cashier/paidorders.php" id="paidlink" class="linknavbar">
                    <div id="paidContainer">
                        <div id="paidIconContainer" class="inlineDesign">
                            <img src="/PearlBlue/images/icons/paid.png" alt="PAID" id="paidIcon">
                            <span id="paidText">LIST OF PAID ORDERS</span>
                        </div>
                    </div>
                </a>
                 <a href="/PearlBlueWRS/cashier/unpaidorders.php" id="unpaidlink" class="linknavbar">
                    <div id="unpaidContainer">
                        <div id="unpaidContainer" class="inlineDesign">
                            <img src="/PearlBlue/images/icons/unpaid.png" alt="UNPAID" id="unpaidIcon">
                            <span id="unpaidText">LIST OF UNPAID ORDERS</span>
                        </div>
                    </div>
                </a>
                
                <a href="/PearlBlueWRS/cashier/logout.php" id="logoutlink" class="linknavbar">
                    <div id="logoutContainer">
                        <div id="patronsIconContainer" class="inlineDesign">
                            <img src="/PearlBlue/images/icons/admin/logout.png" alt="LOGOUT" id="logoutIcon">
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
        <span id="dashboardTextTop">CASHIERING SYSTEM
            <hr>
       <div class="wrap-container">
        <div class="customerinfo">
            <form action="transaction2.php" method="POST">
              <input type="text" name="searchname" placeholder="Search Customer Name.." size=30>
               <button type="submit" name="searchbtn" value="SEARCH"><i class="fa fa-search"></i></button>
            </form>
        </div>
       </div>
       <table class="tableinfo">
        <thead>
                    <tr>
                        <td> Container Type</td>
                        <td> Price </td>
                        <td> Quantity </td>
                        <td> Total Amount </td>
                    </tr>
        </thead>
         <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
        </tbody>
        </table>
                    
    <br>
    <div class="paymentstatus">
               <p>Payment Status: <input type="text" name="payment" placeholder="PHP 0.00">&emsp;
               Change: <input type="text" name="change" size=8 placeholder="PHP 0.00"></p>
               <p>
    </div>

    <input type="submit" name="print" value="Print Receipt" readonly>
    <input type="button" name="clear" alt="clear" value="Clear Table" readonly>
</body>
</html>
<?php
    }
?>