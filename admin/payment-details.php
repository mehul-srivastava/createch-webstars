<?php
  include 'assets/layouts/header.php';
  loginStatus();
  include 'assets/layouts/sidebar.php';
  include 'assets/layouts/navbar.php';
  
  if(!isset($_GET['category'])) {
      header('location: ./');
      exit();
  } else {
      $category = $_GET['category'];
  }
?>
<div class="row py-5">
    <div class="col-12 col-xl-12">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h2 class="fs-5 fw-bold mb-0">Payments for <?php echo $category; ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th class="border-bottom" scope="col">#</th>
                                    <th class="border-bottom" scope="col">Name</th>
                                    <th class="border-bottom" scope="col">User name</th>
                                    <th class="border-bottom" scope="col">User phone</th>
                                    <th class="border-bottom" scope="col">Patient contact</th>
                                    <th class="border-bottom" scope="col">Date</th>
                                    <th class="border-bottom" scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $paymentDetails = getPaymentDetails($category);
                                $i = 0;
                                foreach($paymentDetails as $paymentDetail) {
                                    $i++;
                                    
                                    if($paymentDetail['payment_status'] == 'completed') {
                                        $payment_status = '<span class="text-success"><svg style="width:24px;height:24px" class="error-icon" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2C6.5 2 2 6.5 2 12S6.5 22 12 22 22 17.5 22 12 17.5 2 12 2M10 17L5 12L6.41 10.59L10 14.17L17.59 6.58L19 8L10 17Z"></path></svg> Success</span>';
                                    } else {
                                        $payment_status = '<span class="text-danger"><svg style="width:24px;height:24px" class="error-icon " viewBox="0 0 24 24"><path fill="currentColor" d="M13,13H11V7H13M13,17H11V15H13M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path></svg> Pending</span>';
                                    }
                            ?> 
                                <tr>
                                    <td class="text-gray-900" scope="row">
                                       <?php echo $i; ?>
                                    </td>
                                    <td class="fw-bolder text-gray-900" scope="row">
                                       <?php echo $paymentDetail['name']; ?>
                                    </td>
                                    <th class="fw-bolder text-gray-900" scope="row">
                                        <?php echo $paymentDetail['email']; ?>
                                    </th>
                                    <td class="fw-bolder text-gray-900">
                                        <?php echo $paymentDetail['phone']; ?>
                                    </td>
                                    <td class="fw-bolder text-gray-900">
                                        Rs. <?php echo $paymentDetail['amount'] / 100; ?>
                                    </td>
                                    <td class="fw-bolder text-gray-900">
                                        <?php echo $payment_status; ?>
                                    </td>
                                    <td class="fw-bolder text-gray-900">
                                       <?php echo date('d-M-Y h:i:s A', strtotime($paymentDetail['added_on'])); ?>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>

</div>
</div>
<?php
include 'assets/layouts/footer.php';
?>