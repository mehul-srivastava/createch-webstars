<?php
  include 'assets/layouts/header.php';
  loginStatus();
  include 'assets/layouts/sidebar.php';
  include 'assets/layouts/navbar.php';
?>
<div class="row py-5">
    <div class="col-12 col-sm-6 col-xl-4 mb-4">
        <div class="card border-0 shadow">
            <div class="card-body">
                <div class="row d-block d-xl-flex align-items-center">
                    <div
                        class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                        <div class="icon-shape icon-shape-primary rounded me-4 me-sm-0">
                            <svg class="icon" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                                </path>
                            </svg>
                        </div>
                        <div class="d-sm-none">
                            <h2 class="h5">Total Users</h2>
                            <h3 class="fw-extrabold mb-1"><?php getUsers(); ?></h3>
                        </div>
                    </div>
                    <div class="col-12 col-xl-7 px-xl-0">
                        <div class="d-none d-sm-block">
                            <h2 class="h6 text-gray-400 mb-0">Total Users</h2>
                            <h3 class="fw-extrabold mb-2"><?php getUsers(); ?></h3>
                        </div>
                        <small class="d-flex align-items-center text-gray-500">
                            Since Lifetime
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-xl-4 mb-4">
        <div class="card border-0 shadow">
            <div class="card-body">
                <div class="row d-block d-xl-flex align-items-center">
                    <div
                        class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                        <div class="icon-shape icon-shape-secondary rounded me-4 me-sm-0">
                            <svg class="icon" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="d-sm-none">
                            <h2 class="fw-extrabold h5">Total Sale</h2>
                            <h3 class="mb-1">Rs. <?php getsale() ?></h3>
                        </div>
                    </div>
                    <div class="col-12 col-xl-7 px-xl-0">
                        <div class="d-none d-sm-block">
                            <h2 class="h6 text-gray-400 mb-0">Total Sale</h2>
                            <h3 class="fw-extrabold mb-2">Rs. <?php getsale(); ?></h3>
                        </div>
                        <small class="d-flex align-items-center text-gray-500">
                            Since Lifetime
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-xl-4 mb-4">
        <div class="card border-0 shadow">
            <div class="card-body">
                <div class="row d-block d-xl-flex align-items-center">
                    <div
                        class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                        <div class="icon-shape icon-shape-tertiary rounded me-4 me-sm-0">
                            <svg class="icon" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="d-sm-none">
                            <h2 class="fw-extrabold h5">Unattended Queries</h2>
                            <h3 class="mb-1"><?php echo unattendedQueries(); ?></h3>
                        </div>
                    </div>
                    <div class="col-12 col-xl-7 px-xl-0">
                        <div class="d-none d-sm-block">
                            <h2 class="h6 text-gray-400 mb-0">Unattended Queries</h2>
                            <h3 class="fw-extrabold mb-2"><?php echo unattendedQueries(); ?></h3>
                        </div>
                        <small class="d-flex align-items-center text-gray-500">
                            Total number
                            </svg>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-xl-12">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h2 class="fs-5 fw-bold mb-0">Recent Payments</h2>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th class="border-bottom" scope="col">#</th>
                                    <th class="border-bottom" scope="col">Name</th>
                                    <th class="border-bottom" scope="col">Email</th>
                                    <th class="border-bottom" scope="col">Phone</th>
                                    <th class="border-bottom" scope="col">Category</th>
                                    <th class="border-bottom" scope="col">Amount Paid</th>
                                    <th class="border-bottom" scope="col">Txn. Status</th>
                                    <th class="border-bottom" scope="col">Made On</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $paymentDetails = recentPayments();
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
                                        <?php echo $paymentDetail['category']; ?>
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