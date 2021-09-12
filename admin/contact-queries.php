<?php
  include 'assets/layouts/header.php';
  loginStatus();
  include 'assets/layouts/sidebar.php';
  include 'assets/layouts/navbar.php';
  
?>
<div class="row py-5">
    <div class="col-12 col-xl-12">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h2 class="fs-5 fw-bold mb-0">Contact Queries</h2>
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
                                    <th class="border-bottom" scope="col">Message</th>
                                    <th class="border-bottom" scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $queries = getContactQueries();
                                $i = 0;
                                
                                foreach($queries as $query) {
                                    $i++;
                                    
                                    if($query['status'] == 'unattended') {
                                        $status = '<span class="text-danger">Unattended</span>';
                                    } else {
                                        $status = '<span class="text-success">Responded</span>';
                                    }
                            ?>
                                <tr>
                                    <th class="text-gray-900" scope="row">
                                        <?php echo $i; ?>
                                    </th>
                                    <td class="fw-bolder text-gray-500">
                                        <?php echo $query['name']; ?>
                                    </td>
                                    <td class="fw-bolder text-gray-500">
                                        <?php echo $query['email']; ?>
                                    </td>
                                    <td class="fw-bolder text-gray-500">
                                        <?php echo $query['message']; ?>
                                    </td>
                                    <td class="fw-bolder text-gray-500">
                                        <?php echo $status; ?>
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
<script>
    jQuery.ajax({
       type: 'post',
       url: 'update-queries'
    });
</script>