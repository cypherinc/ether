<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ether Home</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('include.css')
</head>
<body>


    @include('include.sidebar')

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        @include('include.header')
        <!-- Header-->

        <!-- <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="content mt-3">

            <!-- <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div> -->

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Bitcoin Balance</div>
                                <div class="stat-digit">1.00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Bitcoin Cash</div>
                                <div class="stat-digit">2.00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Ethereum Balance</div>
                                <div class="stat-digit">3.00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Litcoin Balance</div>
                                <div class="stat-digit">4.00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Ripple Balance</div>
                                <div class="stat-digit">5.00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Cardano Balance</div>
                                <div class="stat-digit">6.00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Stellar Balance</div>
                                <div class="stat-digit">7.00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Total Naira</div>
                                <div class="stat-digit">450000.00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Market</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Pair</th>
                        <th>Last Price</th>
                        <th>24h Change</th>
                        <th>24h High</th>
                        <th>24h Low</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>BTC/USD</td>
                        <td>${{$btcusd->last}}</td>
                        <td>10%</td>
                        <td>${{$btcusd->high}}</td>
                        <td>${{$btcusd->low}}</td>
                        <td><button type="button" class="btn btn-primary btn-sm">Order</button></td>
                      </tr>
                      <tr>
                        <td>ETH/USD</td>
                        <td>${{$ethusd->last}}</td>
                        <td>11%</td>
                        <td>${{$ethusd->high}}</td>
                        <td>${{$ethusd->low}}</td>
                        <td><button type="button" class="btn btn-primary btn-sm">Order</button></td>
                      </tr>
                      <tr>
                        <td>LTC/USD</td>
                        <td>${{$ltcusd->last}}</td>
                        <td>12%</td>
                        <td>${{$ltcusd->high}}</td>
                        <td>${{$ltcusd->low}}</td>
                        <td><button type="button" class="btn btn-primary btn-sm">Order</button></td>
                      </tr>
                      <tr>
                        <td>BCH/USD</td>
                        <td>${{$bchusd->last}}</td>
                        <td>13%</td>
                        <td>${{$bchusd->high}}</td>
                        <td>${{$bchusd->low}}</td>
                        <td><button type="button" class="btn btn-primary btn-sm">Order</button></td>
                      </tr>
                      <tr>
                        <td>XRP/USD</td>
                        <td>${{$xrpusd->last}}</td>
                        <td>14%</td>
                        <td>${{$xrpusd->high}}</td>
                        <td>${{$xrpusd->low}}</td>
                        <td><button type="button" class="btn btn-primary btn-sm">Order</button></td>
                      </tr>
                      <tr>
                        <td>ADA/USD</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td><button type="button" class="btn btn-primary btn-sm">Order</button></td>
                      </tr>
                      <tr>
                        <td>XLM/USD</td>
                        <td>${{$xlmusd->result->XXLMZUSD->a[0]}}</td>
                        <td>15%</td>
                        <td>${{$xlmusd->result->XXLMZUSD->h[0]}}</td>
                        <td>${{$xlmusd->result->XXLMZUSD->l[0]}}</td>
                        <td><button type="button" class="btn btn-primary btn-sm">Order</button></td>
                      </tr>
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    @include('include.js')
</body>
</html>
