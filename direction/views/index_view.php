<?php
require("partial/hearder.php");

?>

 <!-- START: Main Content-->
 <main>
            <div class="container-fluid site-width">
                <!-- START: Breadcrumbs-->
                <div class="row">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">Dashboard</h4> <p>Welcome to liner admin panel</p></div>

                            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END: Breadcrumbs-->

                <!-- START: Card Data-->
                <div class="row">
                  <div class="col-12 col-sm-6 col-xl-4 mt-3">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class='p-4 align-self-center'>
                                    <h2><? $row['total'] ?></h2>
                                    <h6 class="card-liner-subtitle">Today's colis non envoye</h6>  
                                </div>
                                <div  class="barfiller" data-color="#1e3d73">
                                    <div class="tipWrap">
                                        <span class="tip rounded primary">
                                            <span class="tip-arrow"></span>
                                        </span>
                                    </div>
                                    <span class="fill" data-percentage="80"></span>
                                </div>                              
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xl-4 mt-3">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class='p-4 align-self-center'>
                                    <h2><? $rows['total1'] ?></h2>
                                    <h6 class="card-liner-subtitle">Today's colis en cours d'envoi</h6>  
                                </div>
                                <div  class="barfiller" data-color="#1e3d73">
                                    <div class="tipWrap">
                                        <span class="tip rounded primary">
                                            <span class="tip-arrow"></span>
                                        </span>
                                    </div>
                                    <span class="fill" data-percentage="80"></span>
                                </div>                              
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xl-4 mt-3">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class='p-4 align-self-center'>
                                    <h2><? $rot['total2'] ?></h2>
                                    <h6 class="card-liner-subtitle">Today's coilis envoye</h6>  
                                </div>
                                <div  class="barfiller" data-color="#17a2b8">
                                    <div class="tipWrap">
                                        <span class="tip rounded info">
                                            <span class="tip-arrow"></span>
                                        </span>
                                    </div>
                                    <span class="fill" data-percentage="92"></span>
                                </div>                              
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xl-4 mt-3">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class='p-4 align-self-center'>
                                    <h2><? $rots['total3'] ?></h2>
                                    <h6 class="card-liner-subtitle">Total users</h6>  
                                </div>
                                <div  class="barfiller" data-color="#1ee0ac">
                                    <div class="tipWrap">
                                        <span class="tip rounded success">
                                            <span class="tip-arrow"></span>
                                        </span>
                                    </div>
                                    <span class="fill" data-percentage="67"></span>
                                </div>                              
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-8  mt-3">
                        <div class="card">                           
                            <div class="card-content">
                                <div class="card-body">
                                    <div id="apex_analytic_chart" class="height-500"></div>
                                </div>
                            </div>
                        </div>
                    </div>     
                    </div>   

                    <div class="col-12 col-lg-12 mt-3">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h6 class="card-title">Transaction History</h6>
                            </div>
                            <div class="card-content">
                                <div class="card-body p-0 table-responsive">
                                    <table class="table">

                                        <tbody id="transactionHistoryTrns">
                                            <tr>
                                                <td><strong>Date</strong></td>
                                                <td><strong>Transaction Number</strong></td>
                                                <td><strong>Details</strong></td>
                                                <td><strong>Amount</strong></td>
                                            </tr>
                                            <tr class="gray zoom">
                                                <td>09/04/2020</td>
                                                <td>19999999980409299887130</td>
                                                <td>EMI FOR BT EMI  INT 18  FOR 6  005 006 </td>
                                                <td>4,600.14 (Dr)</td>
                                            </tr>
                                            <tr class="zoom">
                                                <td>09/04/2020</td>
                                                <td>19999999980409299887140</td>
                                                <td>GST</td>
                                                <td>25.03 (Dr)</td>
                                            </tr>
                                            <tr class="zoom">
                                                <td>09/04/2020</td>
                                                <td>19999999980409299887140</td>
                                                <td>EMI INT BT EMI  INT 18  FOR 6  005 006 </td>
                                                <td>139.03 (Dr)</td>
                                            </tr>
                                            <tr class="zoom">
                                                <td>08/04/2020</td>
                                                <td>09999999980408001102363</td>
                                                <td>PAYMENT RECEIVED NEFT</td>
                                                <td>35,225.00 (Cr)</td>
                                            </tr>
                                            <tr class="zoom">
                                                <td>04/04/2020</td>
                                                <td>VT200960059001300000269</td>
                                                <td>PAYTM                  NOIDA         IN</td>
                                                <td>379.00 (Dr)</td>
                                            </tr>
                                            <tr class="zoom">
                                                <td>31/03/2020</td>
                                                <td>VT200920064000540000206</td>
                                                <td>RAZ PHONEPE RECHARGE   Bangalore     IN</td>
                                                <td>98.00 (Dr)</td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                   

                    
                </div>
                <!-- END: Card DATA-->                 
            </div>
        </main>
        <!-- END: Content-->

<?php
require("partial/footer.php");

?>