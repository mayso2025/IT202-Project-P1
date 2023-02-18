<?php
    //Package information
    
    
    include('header.php');
    $Dimensions_Error = "Error, one of the dimensions is too big, check to make sure none of the dimensions are greater than 36 inches";
    $firstName_input = filter_input(INPUT_POST, 'firstName_input');
    $lastName_input = filter_input(INPUT_POST, 'lastName_input');
    $address_inputC = filter_input(INPUT_POST, 'address_inputC');
    $city_input = filter_input(INPUT_POST, 'city_input');
    $state_input = filter_input(INPUT_POST, '$state_input');
    $zip_inputC = filter_input(INPUT_POST, 'zip_inputC');

    //Customer Information 
    $ship_date = filter_input(INPUT_POST, 'ship_date');
    $order_number = filter_input(INPUT_POST, 'order_number');
    $address_inputF = filter_input(INPUT_POST, 'address_inputF');
    $package_weight = filter_input(INPUT_POST, 'package_weight');
    $dimensionsL = filter_input(INPUT_POST, 'dimensionsL');
    $dimensionsW = filter_input(INPUT_POST, 'dimensionsW');
    $dimensionsH = filter_input(INPUT_POST, 'dimensionsH');
    $zip_inputF = filter_input(INPUT_POST, 'zip_inputF');

    $full_name = $firstName_input . $lastName_input;
    $full_address = $address_inputC . $city_input . $state_input . $zip_inputC;
    $package_dimensions = $dimensionsL . "L " . $dimensionsW . "W " . $dimensionsH . "H ";
    include('footer.php');
?>
<html>
    <link rel="stylesheet" herf="styles.css">
    
    <body> 
        <h3> Final Product Label </h3> 
        <br>
        <label> Customer Name: </label>
        <span> <?php echo htmlspecialchars($full_name);?>
        <br>

        
        <label> Customer Address: </label>
        <span> <?php echo htmlspecialchars($full_address);?>
        <br>

        
        <label> Package Dimensions: </label>
        <span> <?php echo htmlspecialchars($package_dimensions);?>
        <br>

        
        <label> Package Weight (lbs): </label>
        <span> <?php echo htmlspecialchars($package_weight);?>
        <br>

        
        <label> Shipping Company: </label>
        <span> <?php echo htmlspecialchars('FedEx');?>
        <br>

        
        <label> Shipping Class: </label>
        <span> <?php echo htmlspecialchars('Priority Mail');?>
        <br>

        
        <label> Tracking Number: </label>
        <span> <?php echo htmlspecialchars('RA777810030US');?> <!-- Note, USED RANDOM TRACKING NUMBER GENERATOR -->
        <br>

        <label> Order Number: </label>
        <span> <?php echo htmlspecialchars($order_number);?> 
        <br>

        <label> Ship Date: </label>
        <span> <?php echo htmlspecialchars($ship_date);?> 
        <br>

        <img src= "barcode.png">
    <body>
</html>
 