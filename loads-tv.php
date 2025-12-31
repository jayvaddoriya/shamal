<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Load TV</title>
    <!-- cache control -->
    <meta http-equiv="Expires" content="0" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta name="theme-color" content="#0040B4">

    
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(Bootstrap Icons)-->
    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="assets/css/adminlte.css" />
    <!--end::Required Plugin(AdminLTE)-->
   
    <!-- jsvectormap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
      integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4="
      crossorigin="anonymous"
    /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/23.1.0/css/intlTelInput.css" integrity="sha512-OkSoWyaoScjXhOm87XO5hDz1E5buvm2aAkq+5zJmaYpylA0OKJ5no5qc4ZRrmApoaXEgXc3n0iyVS1q5FgiJjg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="assets/css/daterangepicker.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@easepick/bundle@1.2.1/dist/index.css">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <main class="load__tv__page py-5 d-flex align-items-center">
        <div class="container-fluid mx-auto px-4">
            <div class="row g-4">
                <?php
                $LOAD_DATA = [
                    [
                        'title' => 'Load 1',
                        'green' => '1',
                        'slots'  => '12',
                        'time'   => '6 mins',
                        'load_master' => 'Luna',
                        'data' => [
                            ['id' => '1', 'name' => 'John Doe', 'td' => '2499 TD', 'no' => '27-1', 't1'=> 'Benja', 'vid' => 'Sasha'], 
                            ['id' => '1', 'name' => 'John Doe', 'td' => '2499 TD', 'no' => '27-1', 't1'=> 'Benja', 'vid' => 'Sasha'], 
                            ['id' => '1', 'name' => 'John Doe', 'td' => '2499 TD', 'no' => '27-1', 't1'=> 'Benja', 'vid' => 'Sasha'], 
                            ['id' => '1', 'name' => 'John Doe', 'td' => '2499 TD', 'no' => '27-1', 't1'=> 'Benja', 'vid' => 'Sasha'], 
                            ['id' => '1', 'name' => 'John Doe', 'td' => '2499 TD', 'no' => '27-1', 't1'=> 'Benja', 'vid' => 'Sasha'], 
                            ['id' => '1', 'name' => 'John Doe', 'td' => '2499 TD', 'no' => '27-1', 't1'=> 'Benja', 'vid' => 'Sasha'], 
                            ['id' => '1', 'name' => 'John Doe', 'td' => '2499 TD', 'no' => '27-1', 't1'=> 'Benja', 'vid' => 'Sasha'], 
                            ['id' => '1', 'name' => 'John Doe', 'td' => '2499 TD', 'no' => '27-1', 't1'=> 'Benja', 'vid' => 'Sasha'], 
                            ['id' => '1', 'name' => 'John Doe', 'td' => '2499 TD', 'no' => '27-1', 't1'=> 'Benja', 'vid' => 'Sasha'], 
                            ['id' => '1', 'name' => 'John Doe', 'td' => '2499 TD', 'no' => '27-1', 't1'=> 'Benja', 'vid' => 'Sasha'], 
                        ]
                    ],
                    [
                        'title' => 'Load 2',
                        'green' => '1',
                        'slots'  => '12',
                        'time'   => '-5 mins',
                        'load_master' => 'Luna',
                        'data' => [
                            ['id' => '1', 'name' => 'John Doe', 'td' => '2499 TD', 'no' => '27-1', 't1'=> 'Benja', 'vid' => 'Sasha'], 
                            ['id' => '1', 'name' => 'John Doe', 'td' => '2499 TD', 'no' => '27-1', 't1'=> 'Benja', 'vid' => 'Sasha'], 
                            ['id' => '1', 'name' => 'John Doe', 'td' => '2499 TD', 'no' => '27-1', 't1'=> 'Benja', 'vid' => 'Sasha'], 
                            ['id' => '1', 'name' => 'John Doe', 'td' => '2499 TD', 'no' => '27-1', 't1'=> 'Benja', 'vid' => 'Sasha'], 
                            ['id' => '1', 'name' => 'John Doe', 'td' => '2499 TD', 'no' => '27-1', 't1'=> 'Benja', 'vid' => 'Sasha'], 
                            ['id' => '1', 'name' => 'John Doe', 'td' => '2499 TD', 'no' => '27-1', 't1'=> 'Benja', 'vid' => 'Sasha'], 
                            ['id' => '1', 'name' => 'John Doe', 'td' => '2499 TD', 'no' => '27-1', 't1'=> 'Benja', 'vid' => 'Sasha'], 
                            ['id' => '1', 'name' => 'John Doe', 'td' => '2499 TD', 'no' => '27-1', 't1'=> 'Benja', 'vid' => 'Sasha'], 
                            ['id' => '1', 'name' => 'John Doe', 'td' => '2499 TD', 'no' => '27-1', 't1'=> 'Benja', 'vid' => 'Sasha'], 
                        ]
                    ],
                    [
                        'title' => 'Load 3',
                        'green' => '1',
                        'slots'  => '12',
                        'time'   => '25 mins',
                        'load_master' => 'Luna',
                        'data' => [
                             
                        ]
                    ],
                ];
                ?>
                <?php foreach($LOAD_DATA as $load): ?>
                <div class="col-12 col-md-6 col-lg-4 d-flex">
                    <div class="card p-12 rounded-3 border-0 bg-white w-100">
                        <div class="card-header d-flex flex-row align-items-center justify-content-between px-3 py-2 rounded-3 mb-3 border-0">
                            <div class="d-inline-flex align-items-center fw-semibold fs-18 text-dark flex-shrink-0 gap-1"><?php echo $load['green']; ?> <span class="fs-12 fw-normal">Green</span></div>
                            <h5 class="card-title fw-semibold fs-18 text-dark m-0 flex-grow-1 text-center"><?php echo $load['title']; ?></h5> 
                            <div class="d-inline-flex align-items-center fw-semibold fs-18 text-dark flex-shrink-0 gap-1"><span class="fs-12 fw-normal">Slots</span> <?php echo $load['slots']; ?> </div>
                        </div>
                        <?php 
                            $load_time = 0;
                            if($load['time'] < $load_time){
                                echo '<div class="alert alert-warning border-0 fs-4 fw-bold text-white text-center" role="alert"> '.$load['time'].'</div>';
                            } else {
                                echo '<div class="alert alert-success border-0 fs-4 fw-bold text-white text-center" role="alert"> '.$load['time'].'</div>';
                            }
                        ?>
                        <div class="d-flex flex-row align-items-center justify-content-between px-3 py-2 rounded-3 mb-3 border-0 load__bg">
                            <div class="small fw-normal text-dark">Load Master</div>  
                            <div class="small fw-bold text-dark text-end"><?php echo $load['load_master']; ?></div>
                        </div>
                        <div class="">
                            <div class="table-responsive">
                                <div class="rounded-3 overflow-hidden"> 
                                    <table class="table table-striped">
                                        <thead>
                                            <tr> 
                                                <th scope="col">Name</th>
                                                <th scope="col">TD</th>
                                                <th scope="col">NO</th>
                                                <th scope="col">T1</th>
                                                <th scope="col">VID</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($load['data'] as $data): ?>
                                            <tr> 
                                                <td><?php echo $data['name']; ?></td>
                                                <td><?php echo $data['td']; ?></td>
                                                <td><?php echo $data['no']; ?></td>
                                                <td><?php echo $data['t1']; ?></td>
                                                <td><?php echo $data['vid']; ?></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div><!-- /.row g-4 -->
        </div><!-- /.container-fluid -->
    </main>
</body>
</html>