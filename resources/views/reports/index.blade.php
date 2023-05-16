<x-layouts.master>


<div class="row">
    <div class="content">
        <div class="card">
        <div class="card-header card-rounded-top header-elements-inline bg-dark ">
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="move"></a>
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>
        <div class="col-12 card mr-1">
            <div class="card-header header-elements-sm-inline">
                <h6 class="card-title">Report</h6>
                <div class="header-elements">
                    <span class="badge bg-success badge-pill">28 New</span>
                    <div class="list-icons ml-3">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="icon-sync"></i> Update data</a>
                                <a href="#" class="dropdown-item"><i class="icon-list-unordered"></i> Detailed log</a>
                                <a href="#" class="dropdown-item"><i class="icon-pie5"></i> Statistics</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="icon-cross3"></i> Clear list</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            <div class="card-body d-sm-flex align-items-sm-center justify-content-sm-between flex-sm-wrap">
                <div class="d-flex align-items-center mb-3 mb-sm-0">
                    <div id="campaigns-donut"></div>
                    <div class="ml-3">
                        <h5 class="font-weight-semibold mb-0">38,289 <span class="text-success font-size-sm font-weight-normal"><i class="icon-arrow-up12"></i> (+16.2%)</span></h5>
                        <span class="badge badge-mark border-success mr-1"></span> <span class="text-muted">May 12, 12:30 am</span>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-3 mb-sm-0">
                    <div id="campaign-status-pie"></div>
                    <div class="ml-3">
                        <h5 class="font-weight-semibold mb-0">2,458 <span class="text-danger font-size-sm font-weight-normal"><i class="icon-arrow-down12"></i> (-4.9%)</span></h5>
                        <span class="badge badge-mark border-danger mr-1"></span> <span class="text-muted">Jun 4, 4:00 am</span>
                    </div>
                </div>

                
            </div>
         </div>
    </div>
    </div>
</div>
<div class="row">
    <!-- Content area -->
    <div class="content">
        <div class="card ">
            <div class="card-header card-rounded-top header-elements-inline bg-dark ">
                <h5 class="card-title ">{{ __("All Reports (According to Module)") }}</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="move"></a>
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>
    <div class="card-body">
        <div class="row">
            
            
            <div class="col-lg-4">
                <div class="card bg-blue-400">
                    <div class="card-body">
                        <div class="d-flex">
                            <a  href="{{ route('mis.report') }}"><h3 class="font-weight-semibold text-white mb-0">MIS Report</h3></a>
                            <div class="list-icons ml-auto">
                                <a class="list-icons-item" data-action="reload"></a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between my-1">
                            Total: 
                            <div class="font-size-sm opacity-75">123</div>
                            <a href="#" class="btn bg-info-300"><i class="icon-statistics mr-2"></i> View report</a>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card bg-blue-400">
                    <div class="card-body">
                        <div class="d-flex">
                            <a href="{{route('monitoring.report')}}"><h3 class="font-weight-semibold text-white mb-0">Monitoring Report</h3></a>
                            <div class="list-icons ml-auto">
                                <a class="list-icons-item" data-action="reload"></a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between my-1">
                            Total: 
                            <div class="font-size-sm opacity-75">123</div>
                            <a href="{{route('monitoring.report')}}" class="btn bg-info-300"><i class="icon-statistics mr-2"></i> View report</a>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="col-lg-4">
                <div class="card bg-blue-400">
                    <div class="card-body">
                        <div class="d-flex">
                            <a  href=""><h3 class="font-weight-semibold text-white mb-0">Top Sheet Report</h3></a>
                            <div class="list-icons ml-auto">
                                <a class="list-icons-item" data-action="reload"></a>
                            </div>
                        </div>
                        <div>
                            Total: 
                            <div class="font-size-sm opacity-75">043</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card bg-blue-400">
                    <div class="card-body">
                        <div class="d-flex">
                            <a  href=""><h3 class="font-weight-semibold text-white mb-0">Tracking Report</h3></a>
                            <div class="list-icons ml-auto">
                                <a class="list-icons-item" data-action="reload"></a>
                            </div>
                        </div>
                        <div>
                            Total: 
                            <div class="font-size-sm opacity-75">003</div>
                        </div>
                    </div>
                </div>
            </div>




            

            {{-- <div class="col-md-6 col-lg-4 col-sm-12">
                <div class="card text-white text-center left-card">
                    <div class="card-body border-radius bg-blue-400">
                        <div class="top-info my-3">
                            <a class="d-block text-white" href="http://baf-forms.pondit.com/procurement-management-reports"><h6>Reports of Procurement Management</h6></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-sm-12">
                <div class="card text-white text-center left-card">
                    <div class="card-body border-radius bg-brown-400">
                        <div class="top-info my-3">
                            <a class="d-block text-white" href="http://baf-forms.pondit.com/inbound-product-management-reports"><h6>Reports of Inbound Product Managment</h6></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-sm-12">
                <div class="card text-white text-center left-card">
                    <div class="card-body border-radius bg-indigo-400">
                        <div class="top-info my-3">
                            <a class="d-block text-white" href="http://baf-forms.pondit.com/property-accounting-management-reports"><h6>Reports of Property Accounting Management</h6></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-sm-12">
                <div class="card text-white text-center left-card">
                    <div class="card-body border-radius bg-blue-400">
                        <div class="top-info my-3">
                            <a class="d-block text-white" href="http://baf-forms.pondit.com/warehouse-management-reports"><h6>Reports of Warehouse Management</h6></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-sm-12">
                <div class="card text-white text-center left-card">
                    <div class="card-body border-radius bg-brown-400">
                        <div class="top-info my-3">
                            <a class="d-block text-white" href="http://baf-forms.pondit.com/return-management-reports"><h6>Reports of Return Management</h6></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-sm-12">
                <div class="card text-white text-center left-card">
                    <div class="card-body border-radius bg-indigo-400">
                        <div class="top-info my-3">
                            <a class="d-block text-white" href="http://baf-forms.pondit.com/outbound-product-management-reports"><h6>Reports of Outbound Product Managment</h6></a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>

        
    </div>
    </div>
            </div>
  </div>
    @php
        $data1=['name'=>'Faysal','email'=>'laraveldeveloper.bd@gmail.com','phone'=>'01610126347'];
        $data2=['name'=>'Fazar Ali','email'=>'fazarali.bd@gmail.com','phone'=>'01610126347'];
        $id=101;
        // $tata='valo';
    @endphp
  <x-baf.supply title="All Supply Range" sub-title="No more Title" :details=$data1 :id=$id/>

  
</x-layouts.master>