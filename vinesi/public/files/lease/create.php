<?php require_once('../../../private/initialize.php'); ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<?php


if(is_post_request()){

    $leaseMonthlyRent = $_POST['leaseMonthlyRent'] ?? 100.00;
    $leaseUtilities= $_POST['leaseUtilities'] ?? 100.00;
    $leasePaymentMethod= $_POST['leasePaymentMethod'] ?? 'Email';
    $leaseDeposit= $_POST['leaseDeposit'] ?? 'Half';
    $leaseStart= $_POST['leaseStart'] ?? "2018-06-06";
    $leaseEnd= $_POST['leaseEnd'] ?? "2018-06-06";
    $propertytable_propertyID= $_POST['propertytable_propertyID'] ?? 11;
    $tentanttable_tenantID= $_POST['tenanttable_tenantID'] ?? 1;

    $result = insertLeaseTable($leaseMonthlyRent, $leaseUtilities, $leasePaymentMethod, $leaseDeposit, $leaseStart, $leaseEnd, $propertytable_propertyID, $tentanttable_tenantID);

    if($result == true){
        $new_id = mysqli_insert_id($db);
        redirect_to(url_for('/files/lease/index.php'));

    } else{
        redirect_to(url_for('/lease/index.php'));

    }


    //mysqli_free_result($result);
}

?>

    <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Vinesi</title>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="../../assets/css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="../../assets/css/Data-Summary-Panel---3-Column-Overview--Mobile-Responsive.css">
    <link rel="stylesheet" href="../../assets/css/Data-Table-1.css">
    <link rel="stylesheet" href="../../assets/css/Data-Table.css">
    <link rel="stylesheet" href="../../assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="../../assets/css/Projects-Horizontal.css">
    <link rel="stylesheet" href="../../assets/css/register.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="../../assets/css/Team-Clean.css">
</head>

<body>

<div class="projects-horizontal">
    <div class="container">
        <div class="intro">
            <h2 class="text-center" style="font-weight: normal;"><strong>Create</strong>&nbsp;Lease</h2>
            <form href="<?php echo url_for('lease/create.php')?>" method="post">
                <div class="form-grou§p"><label class="text-secondary">Monthly Rent</label><input name="leaseMonthlyRent" class="form-control" type="number" required="" ></div>
                <div class="form-group"><label class="text-secondary">Utilities</label><input name="leaseUtilities" class="form-control" type="number" required=""></div>
                <div class="form-group"><label class="text-secondary">Payment Method</label><input name="leasePaymentMethod" class="form-control" type="text" required=""></div>
                <div class="form-group"><label class="text-secondary">Deposit</label><input name="leaseDeposit" class="form-control" type="text" required=""></div>
                <div class="form-group"><label class="text-secondary">Lease Start</label><input name="leaseStart" class="form-control" type="date" required=""></div>
                <div class="form-group"><label class="text-secondary">Lease Expiry</label><input name="leaseEnd" class="form-control" type="date" required=""></div>
                <div class="form-group"><label class="text-secondary">Property</label><input name="propertytable_propertyID" class="form-control" type="number" required=""></div>
                <div class="form-group"><label class="text-secondary">Tenant</label><input name="tenanttable_tenantID" class="form-control" type="number" required=""></div>
                <button class="btn btn-info mt-2" type="submit" style="max-height: -8px;"><i class="icon ion-ios-compose-outline"></i></button></form>
        </div>
    </div>
</div>
<?php include(SHARED_PATH . '/footer.php'); ?>

</body>

</html>

<?php
/**
 * Created by PhpStorm.
 * User: Nedzo
 * Date: 06.11.2018
 * Time: 09:51
 */