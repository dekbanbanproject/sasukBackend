<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
      
         <div class="row">
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="success">{{$per}}</h3>
                                <h6>บุคคลากรทั้งหมด</h6>
                            </div>
                            <div>
                                <i class="icon-user-follow success font-large-2 float-right"></i>
                            </div>
                        </div>
                    
                          <div class="progresst_per" max="50000">
                            <div class="progress-per progress-sm mt-1 mb-0 box-shadow-2" data-per="{{$percen}}">{{$per}} /50000
                            </div> 
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
          <div class="card pull-up">
              <div class="card-content">
                  <div class="card-body">
                      <div class="media d-flex">
                          <div class="media-body text-left">
                              <h3 class="warning">{{$assets}}</h3>
                              <h6>รายการครุภัณฑ์ทั้งหมด</h6>
                          </div>
                          <div>
                              <i class="icon-screen-tablet warning font-large-2 float-right"></i>
                          </div>
                      </div>
                      <div class="progresst_assets" max="50000">
                        <div class="progress-assets progress-sm mt-1 mb-0 box-shadow-2" data-assets="{{$assetscen}}">{{$assets}} /50000
                        </div> 
                      </div>
                    </div>
              </div>
          </div>
      </div>
          <div class="col-xl-3 col-lg-6 col-12">
              <div class="card pull-up">
                  <div class="card-content">
                      <div class="card-body">
                          <div class="media d-flex">
                              <div class="media-body text-left">
                                  <h3 class="info">{{$assetbuildings}}</h3>
                                  <h6>อาคารสิ่งปลูกสร้างทั้งหมด</h6>
                              </div>
                              <div>
                                  <i class="icon-home info font-large-2 float-right"></i>
                              </div>
                          </div>
                          <div class="progresst_assetbuildings" max="2000">
                            <div class="progress-assetbuildings progress-sm mt-1 mb-0 box-shadow-2" data-assetbuildings="{{$assetbuildingscen}}">{{$assetbuildings}} /2000
                           
                          </div>
                          </div>  
                      </div>
                  </div>
              </div>
          </div>                   
          <div class="col-xl-3 col-lg-6 col-12">
              <div class="card pull-up">
                  <div class="card-content">
                      <div class="card-body">
                          <div class="media d-flex">
                              <div class="media-body text-left">
                                  <h3 class="danger">102</h3>
                                  <h6>Hospital</h6>
                              </div>
                              <div>
                                  <i class="icon-graduation danger font-large-2 float-right"></i>
                              </div>
                          </div>
                          <div class="progresst_hospital" max="102">
                            <div class="progress-hospital progress-sm mt-1 mb-0 box-shadow-2" data-hospital="102">102 /102
                            </div> 
                        
                      </div>
                  </div>
              </div>
          </div>
      </div>
         
    </div>

          <div class="row">
            <div class="col-12 col-md-3">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">จำนวนบุคลากรแต่ละจังหวัด</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body pt-0">
                    <p class="pt-1">เชียงใหม่
                      {{-- <p class="pt-1"><a href="{{ url('backend/person_province_only/'.$hos_persons->HOSPCODE)}}">เชียงใหม่</a>  --}}
                      <span class="float-right">
                        <span class="text-bold-600">{{$chaingmai}}</span> คน</span>
                    </p>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-1">                     
                        @if($chaingmai <= 1000)
                          <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 10%" aria-valuenow="2999" aria-valuemin="0" aria-valuemax="10000"></div>
                        @elseif($chaingmai <= 2000)
                          <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 20%" aria-valuenow="5999" aria-valuemin="0" aria-valuemax="10000"></div>
                        @elseif($chaingmai <= 3000)
                          <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 30%" aria-valuenow="8999" aria-valuemin="0" aria-valuemax="10000"></div>
                        @elseif($chaingmai <= 4000)
                          <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 40%" aria-valuenow="11999" aria-valuemin="0" aria-valuemax="10000"></div>
                        @elseif($chaingmai <= 5000)
                          <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 50%" aria-valuenow="14999" aria-valuemin="0" aria-valuemax="10000"></div>
                        @elseif($chaingmai <= 6000)
                          <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 60%" aria-valuenow="16999" aria-valuemin="0" aria-valuemax="10000"></div>
                        @elseif($chaingmai <= 7000)
                          <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 70%" aria-valuenow="19999" aria-valuemin="0" aria-valuemax="10000"></div>
                        @elseif($chaingmai <= 8000)
                          <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 80%" aria-valuenow="22999" aria-valuemin="0" aria-valuemax="10000"></div>
                        @elseif($chaingmai <= 9000)
                          <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 90%" aria-valuenow="25999" aria-valuemin="0" aria-valuemax="10000"></div>
                        @else
                          <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 100%" aria-valuenow="10000" aria-valuemin="0" aria-valuemax="10000"></div>
                        @endif
                    </div>
                    <p class="pt-1">ลำพูน
                        <span class="float-right">
                          <span class="text-bold-600">{{$lamphoon}}</span> คน</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                              @if($lamphoon <= 1000)
                                <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 10%" aria-valuenow="2999" aria-valuemin="0" aria-valuemax="10000"></div>
                                @elseif($lamphoon <= 2000)
                                  <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 20%" aria-valuenow="5999" aria-valuemin="0" aria-valuemax="10000"></div>
                                @elseif($lamphoon <= 3000)
                                  <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 30%" aria-valuenow="8999" aria-valuemin="0" aria-valuemax="10000"></div>
                                @elseif($lamphoon <= 4000)
                                  <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 40%" aria-valuenow="11999" aria-valuemin="0" aria-valuemax="10000"></div>
                                @elseif($lamphoon <= 5000)
                                  <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 50%" aria-valuenow="14999" aria-valuemin="0" aria-valuemax="10000"></div>
                                @elseif($lamphoon <= 6000)
                                  <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 60%" aria-valuenow="16999" aria-valuemin="0" aria-valuemax="10000"></div>
                                @elseif($lamphoon <= 7000)
                                  <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 70%" aria-valuenow="19999" aria-valuemin="0" aria-valuemax="10000"></div>
                                @elseif($lamphoon <= 8000)
                                  <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 80%" aria-valuenow="22999" aria-valuemin="0" aria-valuemax="10000"></div>
                                @elseif($lamphoon <= 9000)
                                  <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 90%" aria-valuenow="25999" aria-valuemin="0" aria-valuemax="10000"></div>
                                @else
                                  <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 100%" aria-valuenow="10000" aria-valuemin="0" aria-valuemax="10000"></div>
                              @endif
                      </div>
                      <p class="pt-1">ลำปาง
                        <span class="float-right">
                          <span class="text-bold-600">{{$lampang}}</span> คน</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                            @if($lampang <= 1000)
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 10%" aria-valuenow="2999" aria-valuemin="0" aria-valuemax="10000"></div>
                          @elseif($lampang <= 2000)
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 20%" aria-valuenow="5999" aria-valuemin="0" aria-valuemax="10000"></div>
                          @elseif($lampang <= 3000)
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 30%" aria-valuenow="8999" aria-valuemin="0" aria-valuemax="10000"></div>
                          @elseif($lampang <= 4000)
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 40%" aria-valuenow="11999" aria-valuemin="0" aria-valuemax="10000"></div>
                          @elseif($lampang <= 5000)
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 50%" aria-valuenow="14999" aria-valuemin="0" aria-valuemax="10000"></div>
                          @elseif($lampang <= 6000)
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 60%" aria-valuenow="16999" aria-valuemin="0" aria-valuemax="10000"></div>
                          @elseif($lampang <= 7000)
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 70%" aria-valuenow="19999" aria-valuemin="0" aria-valuemax="10000"></div>
                          @elseif($lampang <= 8000)
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 80%" aria-valuenow="22999" aria-valuemin="0" aria-valuemax="10000"></div>
                          @elseif($lampang <= 9000)
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 90%" aria-valuenow="25999" aria-valuemin="0" aria-valuemax="10000"></div>
                          @else
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 100%" aria-valuenow="10000" aria-valuemin="0" aria-valuemax="10000"></div>
                          @endif
                      </div>
                      <p class="pt-1">แพร่
                        <span class="float-right">
                          <span class="text-bold-600">{{$prae}}</span> คน</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                              @if($prae <= 1000)
                              <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 10%" aria-valuenow="2999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($prae <= 2000)
                              <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 20%" aria-valuenow="5999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($prae <= 3000)
                              <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 30%" aria-valuenow="8999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($prae <= 4000)
                              <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 40%" aria-valuenow="11999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($prae <= 5000)
                              <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 50%" aria-valuenow="14999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($prae <= 6000)
                              <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 60%" aria-valuenow="16999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($prae <= 7000)
                              <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 70%" aria-valuenow="19999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($prae <= 8000)
                              <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 80%" aria-valuenow="22999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($prae <= 9000)
                              <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 90%" aria-valuenow="25999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @else
                              <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 100%" aria-valuenow="10000" aria-valuemin="0" aria-valuemax="10000"></div>
                            @endif
                      </div>
                      <p class="pt-1">น่าน
                        <span class="float-right">
                          <span class="text-bold-600">{{$nan}}</span> คน</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                            @if($nan <= 1000)
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 10%" aria-valuenow="2999" aria-valuemin="0" aria-valuemax="10000"></div>
                          @elseif($nan <= 2000)
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 20%" aria-valuenow="5999" aria-valuemin="0" aria-valuemax="10000"></div>
                          @elseif($nan <= 3000)
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 30%" aria-valuenow="8999" aria-valuemin="0" aria-valuemax="10000"></div>
                          @elseif($nan <= 4000)
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 40%" aria-valuenow="11999" aria-valuemin="0" aria-valuemax="10000"></div>
                          @elseif($nan <= 5000)
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 50%" aria-valuenow="14999" aria-valuemin="0" aria-valuemax="10000"></div>
                          @elseif($nan <= 6000)
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 60%" aria-valuenow="16999" aria-valuemin="0" aria-valuemax="10000"></div>
                          @elseif($nan <= 7000)
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 70%" aria-valuenow="19999" aria-valuemin="0" aria-valuemax="10000"></div>
                          @elseif($nan <= 8000)
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 80%" aria-valuenow="22999" aria-valuemin="0" aria-valuemax="10000"></div>
                          @elseif($nan <= 9000)
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 90%" aria-valuenow="25999" aria-valuemin="0" aria-valuemax="10000"></div>
                          @else
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 100%" aria-valuenow="10000" aria-valuemin="0" aria-valuemax="10000"></div>
                          @endif
                      </div>
                      <p class="pt-1">พะเยา
                        <span class="float-right">
                          <span class="text-bold-600">{{$payoua}}</span> คน</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                            @if($payoua <= 1000)
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 10%" aria-valuenow="2999" aria-valuemin="0" aria-valuemax="10000"></div>
                          @elseif($payoua <= 2000)
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 20%" aria-valuenow="5999" aria-valuemin="0" aria-valuemax="10000"></div>
                          @elseif($payoua <= 3000)
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 30%" aria-valuenow="8999" aria-valuemin="0" aria-valuemax="10000"></div>
                          @elseif($payoua <= 4000)
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 40%" aria-valuenow="11999" aria-valuemin="0" aria-valuemax="10000"></div>
                          @elseif($payoua <= 5000)
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 50%" aria-valuenow="14999" aria-valuemin="0" aria-valuemax="10000"></div>
                          @elseif($payoua <= 6000)
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 60%" aria-valuenow="16999" aria-valuemin="0" aria-valuemax="10000"></div>
                          @elseif($payoua <= 7000)
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 70%" aria-valuenow="19999" aria-valuemin="0" aria-valuemax="10000"></div>
                          @elseif($payoua <= 8000)
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 80%" aria-valuenow="22999" aria-valuemin="0" aria-valuemax="10000"></div>
                          @elseif($payoua <= 9000)
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 90%" aria-valuenow="25999" aria-valuemin="0" aria-valuemax="10000"></div>
                          @else
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 100%" aria-valuenow="10000" aria-valuemin="0" aria-valuemax="10000"></div>
                          @endif
                      </div>
                      <p class="pt-1">เชียงราย
                        <span class="float-right">
                          <span class="text-bold-600">{{$chaingray}}</span> คน</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                              @if($chaingray <= 1000)
                              <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 10%" aria-valuenow="2999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($chaingray <= 2000)
                              <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 20%" aria-valuenow="5999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($chaingray <= 3000)
                              <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 30%" aria-valuenow="8999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($chaingray <= 4000)
                              <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 40%" aria-valuenow="11999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($chaingray <= 5000)
                              <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 50%" aria-valuenow="14999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($chaingray <= 6000)
                              <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 60%" aria-valuenow="16999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($chaingray <= 7000)
                              <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 70%" aria-valuenow="19999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($chaingray <= 8000)
                              <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 80%" aria-valuenow="22999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($chaingray <= 9000)
                              <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 90%" aria-valuenow="25999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @else
                              <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 100%" aria-valuenow="10000" aria-valuemin="0" aria-valuemax="10000"></div>
                            @endif
                      </div>
                      <p class="pt-1">แม่ฮ่องสอน
                        <span class="float-right">
                          <span class="text-bold-600">{{$maehongson}}</span> คน</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                        @if($maehongson <= 1000)
                              <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 10%" aria-valuenow="2999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($maehongson <= 2000)
                              <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 20%" aria-valuenow="5999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($maehongson <= 3000)
                              <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 30%" aria-valuenow="8999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($maehongson <= 4000)
                              <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 40%" aria-valuenow="11999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($maehongson <= 5000)
                              <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 50%" aria-valuenow="14999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($maehongson <= 6000)
                              <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 60%" aria-valuenow="16999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($maehongson <= 7000)
                              <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 70%" aria-valuenow="19999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($maehongson <= 8000)
                              <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 80%" aria-valuenow="22999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($maehongson <= 9000)
                              <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 90%" aria-valuenow="25999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @else
                              <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 100%" aria-valuenow="10000" aria-valuemin="0" aria-valuemax="10000"></div>
                        @endif
                      </div>
                  </div>
                </div>
              </div>
            </div>           
            <div class="col-12 col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Person Chart</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <canvas id="person-chart" height="420"></canvas>
                        </div>
                    </div>
                </div>
            </div>
          </div>
      
          <div class="row">
            <div class="col-12 col-md-3">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">จำนวนคุรุภัณฑ์แต่ละจังหวัด</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body pt-0">
                    <p class="pt-1">เชียงใหม่
                      <span class="float-right">
                        <span class="text-bold-600">{{$As_chaingmai}}</span> /10000</span>
                    </p>
                    <div class="progresst_chaingmai" max="10000">
                      <div class="progress-chaingmai progress-sm mt-1 mb-0 box-shadow-2" data-chaingmai="{{$As_chaingmaicen}}">{{$As_chaingmai}} 
                      </div> 
                    </div>
                    <p class="pt-1">ลำพูน
                        <span class="float-right">
                          <span class="text-bold-600">{{$As_lamphoon}}</span> /10000</span>
                      </p>
                      <div class="progresst_lampoonas" max="10000">
                        <div class="progress-lampoonas progress-sm mt-1 mb-0 box-shadow-2" data-lampoonas="{{$As_lamphooncen}}">{{$As_lamphoon}} 
                        </div> 
                      </div>
                      <p class="pt-1">ลำปาง
                        <span class="float-right">
                          <span class="text-bold-600">{{$As_lampang}} </span>  /10000</span>
                      </p>
                      <div class="progresst_lampangss" max="10000">
                        <div class="progress-lampangss progress-sm mt-1 mb-0 box-shadow-2" data-lampangss="{{$As_lampangcen}}">{{$As_lampang}} 
                        </div> 
                      </div>
                      <p class="pt-1">แพร่
                        <span class="float-right">
                          <span class="text-bold-600">{{$As_prae}} </span>  /10000</span>
                      </p>
                      <div class="progresst_praeas" max="10000">
                        <div class="progress-praeas progress-sm mt-1 mb-0 box-shadow-2" data-praeas="{{$As_praecen}}">{{$As_prae}} 
                        </div> 
                      </div>
                     
                      <p class="pt-1">น่าน
                        <span class="float-right">
                          <span class="text-bold-600">{{$As_nan}} </span>  /10000</span>
                      </p>
                      <div class="progresst_nans" max="10000">
                        <div class="progress-nans progress-sm mt-1 mb-0 box-shadow-2" data-nans="{{$As_nancen}}">{{$As_nan}} 
                        </div> 
                      </div>
                      <p class="pt-1">พะเยา
                        <span class="float-right">
                          <span class="text-bold-600">{{$As_payoua}} </span>  /10000</span>
                      </p>
                      <div class="progresst_payouaas" max="10000">
                        <div class="progress-payouaas progress-sm mt-1 mb-0 box-shadow-2" data-payouaas="{{$As_payouacen}}">{{$As_payoua}} 
                        </div> 
                      </div>
                      <p class="pt-1">เชียงราย
                        <span class="float-right">
                          <span class="text-bold-600">{{$As_chaingray}} </span>  /10000</span>
                      </p>
                      <div class="progresst_chaingrayss" max="10000">
                        <div class="progress-chaingrayss progress-sm mt-1 mb-0 box-shadow-2" data-chaingrayss="{{$As_chaingraycen}}">{{$As_chaingray}} 
                        </div> 
                      </div>
                     
                      <p class="pt-1">แม่ฮ่องสอน
                        <span class="float-right">
                          <span class="text-bold-600">{{$As_maehongson}} </span>  /10000</span>
                      </p>
                      <div class="progresst_maehongsonas" max="10000">
                        <div class="progress-maehongsonas progress-sm mt-1 mb-0 box-shadow-2" data-maehongsonas="{{$As_maehongsoncen}}">{{$As_maehongson}} 
                        </div> 
                      </div>


                  </div>
                </div>
              </div>
            </div>
           
            <div class="col-12 col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Assets Chart</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <canvas id="assets-chart" height="480"></canvas>
                        </div>
                    </div>
                </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12 col-md-3">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">จำนวนอาคารแต่ละจังหวัด</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body pt-0">
                    <p class="pt-1">เชียงใหม่
                      <span class="float-right">
                        <span class="text-bold-600">{{$buil_chaingmai}}</span> /500</span>
                    </p>
                    <div class="progresst_bc" max="500">
                    <div class="progress-bc progress-sm mt-1 mb-0 box-shadow-1" data-bc="{{$buil_chaingmaicen}}">
                      {{$buil_chaingmai}} 
                    </div> 
                    </div>

                   
                    <p class="pt-1">ลำพูน
                        <span class="float-right">
                          <span class="text-bold-600">{{$buil_lamphoon}}</span> /500</span>
                      </p>
                      <div class="progresst_lp" max="500">
                        <div class="progress-lp progress-sm mt-1 mb-0 box-shadow-1" data-lp="{{$buil_lamphooncen}}"> {{$buil_lamphoon}}
                        </div> 
                      </div>
                      <p class="pt-1">ลำปาง
                        <span class="float-right">
                          <span class="text-bold-600">{{$buil_lampang}}</span> /500</span>
                      </p>
                      <div class="progresst_lap" max="500">
                        <div class="progress-lap progress-sm mt-1 mb-0 box-shadow-1" data-lap="{{$buil_lampangcen}}">{{$buil_lampang}}
                        </div> 
                      </div>
                      <p class="pt-1">แพร่
                        <span class="float-right">
                          <span class="text-bold-600">{{$buil_prae}}</span> /500</span>
                      </p>
                      <div class="progresst_laprae" max="500">
                        <div class="progress-laprae progress-sm mt-1 mb-0 box-shadow-1" data-laprae="{{$buil_praegcen}}">{{$buil_prae}}
                        </div> 
                      </div>
                      <p class="pt-1">น่าน
                        <span class="float-right">
                          <span class="text-bold-600">{{$buil_nan}}</span> /500</span>
                      </p>
                      <div class="progresst_nan" max="500">
                        <div class="progress-nan progress-sm mt-1 mb-0 box-shadow-1" data-nan="{{$buil_nangcen}}">{{$buil_nan}}
                        </div> 
                      </div>
                      <p class="pt-1">พะเยา
                        <span class="float-right">
                          <span class="text-bold-600">{{$buil_payoua}}</span> /500</span>
                      </p>
                      <div class="progresst_payoa" max="500">
                        <div class="progress-payoa progress-sm mt-1 mb-0 box-shadow-1" data-payoa="{{$buil_payouacen}}">{{$buil_payoua}}
                        </div> 
                      </div>
                      <p class="pt-1">เชียงราย
                        <span class="float-right">
                          <span class="text-bold-600">{{$buil_chaingray}}</span> /500</span>
                      </p>
                      <div class="progresst_chaingray" max="500">
                        <div class="progress-chaingray progress-sm mt-1 mb-0 box-shadow-1" data-chaingray="{{$buil_chaingraycen}}">{{$buil_chaingray}}
                        </div> 
                      </div>
                      <p class="pt-1">แม่ฮ่องสอน
                        <span class="float-right">
                          <span class="text-bold-600">{{$buil_maehongson}}</span> /500</span>
                      </p>
                      <div class="progresst_maehongson" max="500">
                        <div class="progress-maehongson progress-sm mt-1 mb-0 box-shadow-1" data-maehongson="{{$buil_maehongsoncen}}">{{$buil_maehongson}}
                        </div> 
                      </div>
                  </div>
                </div>
              </div>
            </div>
           
            <div class="col-12 col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Building Chart</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <canvas id="building-chart" height="605"></canvas>
                        </div>
                    </div>
                </div>
            </div>
          </div>


{{-- 
          <div class="row">
            <div class="col-12 col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">dddd</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <div class="progresst"> </div>
                    <div class="progress-done" data-done="{{$buil_chaingmai}}">{{$buil_chaingmai}} คน</div> 
                    <br>  

                    <div class="progresslamphoon"> </div>
                    <div class="progress-lamphoon" data-lamphoon="{{$buil_lamphoon}}">{{$buil_lamphoon}} คน</div>   
                  </div>
                </div>
              </div>
            </div>
          </div> --}}




      </div>
    </div>
  </div>


