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
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">                       
                              @if($per <= 3000)
                                <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 10%" aria-valuenow="2999" aria-valuemin="0" aria-valuemax="30000"></div>
                              @elseif($per <= 6000)
                                <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 20%" aria-valuenow="5999" aria-valuemin="0" aria-valuemax="30000"></div>
                              @elseif($per <= 9000)
                                <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 30%" aria-valuenow="8999" aria-valuemin="0" aria-valuemax="30000"></div>
                              @elseif($per <= 12000)
                                <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 40%" aria-valuenow="11999" aria-valuemin="0" aria-valuemax="30000"></div>
                              @elseif($per <= 15000)
                                <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 50%" aria-valuenow="14999" aria-valuemin="0" aria-valuemax="30000"></div>
                              @elseif($per <= 17000)
                                <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 60%" aria-valuenow="16999" aria-valuemin="0" aria-valuemax="30000"></div>
                              @elseif($per <= 20000)
                                <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 70%" aria-valuenow="19999" aria-valuemin="0" aria-valuemax="30000"></div>
                              @elseif($per <= 23000)
                                <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 80%" aria-valuenow="22999" aria-valuemin="0" aria-valuemax="30000"></div>
                              @elseif($per <= 26000)
                                <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 90%" aria-valuenow="25999" aria-valuemin="0" aria-valuemax="30000"></div>
                              @else
                                <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 100%" aria-valuenow="30000" aria-valuemin="0" aria-valuemax="30000"></div>
                              @endif
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
                              <i class="icon-user-follow warning font-large-2 float-right"></i>
                          </div>
                      </div>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                          {{-- <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div> --}}
                        @if($assets <= 3000)
                          <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 10%" aria-valuenow="2999" aria-valuemin="0" aria-valuemax="30000"></div>
                        @elseif($assets <= 6000)
                          <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 20%" aria-valuenow="5999" aria-valuemin="0" aria-valuemax="30000"></div>
                        @elseif($assets <= 9000)
                          <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 30%" aria-valuenow="8999" aria-valuemin="0" aria-valuemax="30000"></div>
                        @elseif($assets <= 12000)
                          <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 40%" aria-valuenow="11999" aria-valuemin="0" aria-valuemax="30000"></div>
                        @elseif($assets <= 15000)
                          <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 50%" aria-valuenow="14999" aria-valuemin="0" aria-valuemax="30000"></div>
                        @elseif($assets <= 17000)
                          <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 60%" aria-valuenow="16999" aria-valuemin="0" aria-valuemax="30000"></div>
                        @elseif($assets <= 20000)
                          <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 70%" aria-valuenow="19999" aria-valuemin="0" aria-valuemax="30000"></div>
                        @elseif($assets <= 23000)
                          <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 80%" aria-valuenow="22999" aria-valuemin="0" aria-valuemax="30000"></div>
                        @elseif($assets <= 26000)
                          <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 90%" aria-valuenow="25999" aria-valuemin="0" aria-valuemax="30000"></div>
                        @else
                          <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 100%" aria-valuenow="30000" aria-valuemin="0" aria-valuemax="30000"></div>
                        @endif

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
                                  <i class="icon-user-follow info font-large-2 float-right"></i>
                              </div>
                          </div>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">                          
                              {{-- <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div> --}}
                              @if($assetbuildings <= 1000)
                              <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 10%" aria-valuenow="999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($assetbuildings <= 2000)
                              <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 20%" aria-valuenow="1999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($assetbuildings <= 3000)
                              <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 30%" aria-valuenow="2999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($assetbuildings <= 4000)
                              <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 40%" aria-valuenow="3999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($assetbuildings <= 5000)
                              <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 50%" aria-valuenow="4999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($assetbuildings <= 6000)
                              <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 60%" aria-valuenow="5999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($assetbuildings <= 7000)
                              <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 70%" aria-valuenow="6999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($assetbuildings <= 8000)
                              <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 80%" aria-valuenow="7999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($assetbuildings <= 9000)
                              <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 90%" aria-valuenow="8999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @else
                              <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 100%" aria-valuenow="10000" aria-valuemin="0" aria-valuemax="10000"></div>
                            @endif
                         
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
                                  {{-- <h3 class="danger">{{$hos}}</h3> --}}
                                  <h3 class="danger">102</h3>
                                  <h6>Hospital</h6>
                              </div>
                              <div>
                                  <i class="icon-user-follow danger font-large-2 float-right"></i>
                              </div>
                          </div>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                              <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
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
                        <span class="text-bold-600">{{$As_chaingmai}}</span> รายการ</span>
                    </p>
                   
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                      {{-- <div class="progress">
                        <div class="progress-done" data-done="70">
                          70%
                        </div>
                      </div> --}}
                      {{-- <div class="progress-bar bg-gradient-x-warning" role="progressbar" id="progressbar" style="width: %" aria-valuenow="0" aria-valuemin="0" aria-valuemax="10000"></div>                     --}}
                   {{-- <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: %" aria-valuenow="22" aria-valuemin="0" aria-valuemax="10000"></div> --}}
                         {{-- <div id="progressbar_chaingmai"></div>   --}}
                    </div>
                    <p class="pt-1">ลำพูน
                        <span class="float-right">
                          <span class="text-bold-600">{{$As_lamphoon}}</span> รายการ</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                              @if($As_lamphoon = 0)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_lamphoon <= 100)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 1%" aria-valuenow="499" aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_lamphoon <= 200)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 2%" aria-valuenow="999" aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_lamphoon <= 400)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 4%" aria-valuenow="1999" aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_lamphoon <= 600)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 6%" aria-valuenow="2999" aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_lamphoon <= 800)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 8%" aria-valuenow="3999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($As_lamphoon <= 1000)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 10%" aria-valuenow="4999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($As_lamphoon <= 2000)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 20%" aria-valuenow="5999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($As_lamphoon <= 3000)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 30%" aria-valuenow="8999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($As_lamphoon <= 4000)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 40%" aria-valuenow="11999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($As_lamphoon <= 5000)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 50%" aria-valuenow="14999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($As_lamphoon <= 6000)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 60%" aria-valuenow="16999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($As_lamphoon <= 7000)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 70%" aria-valuenow="19999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($As_lamphoon <= 8000)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 80%" aria-valuenow="22999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($As_lamphoon <= 9000)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 90%" aria-valuenow="25999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @else
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 100%" aria-valuenow="10000" aria-valuemin="0" aria-valuemax="10000"></div>
                            @endif
                      </div>
                      <p class="pt-1">ลำปาง
                        <span class="float-right">
                          <span class="text-bold-600">{{$As_lampang}} </span>  รายการ</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                              @if($As_lampang = 0)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_lampang <= 100)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 1%" aria-valuenow="499" aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_lampang <= 200)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 2%" aria-valuenow="999" aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_lampang <= 400)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 4%" aria-valuenow="1999" aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_lampang <= 600)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 6%" aria-valuenow="2999" aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_lampang <= 800)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 8%" aria-valuenow="3999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($As_lampang <= 1000)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 10%" aria-valuenow="4999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($As_lampang <= 2000)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 20%" aria-valuenow="5999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($As_lampang <= 3000)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 30%" aria-valuenow="8999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($As_lampang <= 4000)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 40%" aria-valuenow="11999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($As_lampang <= 5000)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 50%" aria-valuenow="14999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($As_lampang <= 6000)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 60%" aria-valuenow="16999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($As_lampang <= 7000)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 70%" aria-valuenow="19999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($As_lampang <= 8000)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 80%" aria-valuenow="22999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($As_lampang <= 9000)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 90%" aria-valuenow="25999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @else
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 100%" aria-valuenow="10000" aria-valuemin="0" aria-valuemax="10000"></div>
                            @endif
                      </div>
                      <p class="pt-1">แพร่
                        <span class="float-right">
                          <span class="text-bold-600">{{$As_prae}} </span>  รายการ</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                                @if($As_prae = 0)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="10000"></div>
                                @elseif($As_prae <= 100)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 1%" aria-valuenow="499" aria-valuemin="0" aria-valuemax="10000"></div>
                                @elseif($As_prae <= 200)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 2%" aria-valuenow="999" aria-valuemin="0" aria-valuemax="10000"></div>
                                @elseif($As_prae <= 400)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 4%" aria-valuenow="1999" aria-valuemin="0" aria-valuemax="10000"></div>
                                @elseif($As_prae <= 600)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 6%" aria-valuenow="2999" aria-valuemin="0" aria-valuemax="10000"></div>
                                @elseif($As_prae <= 800)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 8%" aria-valuenow="3999" aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_prae <= 1000)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 10%" aria-valuenow="4999" aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_prae <= 2000)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 20%" aria-valuenow="5999" aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_prae <= 3000)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 30%" aria-valuenow="8999" aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_prae <= 4000)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 40%" aria-valuenow="11999" aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_prae <= 5000)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 50%" aria-valuenow="14999" aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_prae <= 6000)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 60%" aria-valuenow="16999" aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_prae <= 7000)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 70%" aria-valuenow="19999" aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_prae <= 8000)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 80%" aria-valuenow="22999" aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_prae <= 9000)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 90%" aria-valuenow="25999" aria-valuemin="0" aria-valuemax="10000"></div>
                              @else
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 100%" aria-valuenow="10000" aria-valuemin="0" aria-valuemax="10000"></div>
                              @endif
                      </div>
                      <p class="pt-1">น่าน
                        <span class="float-right">
                          <span class="text-bold-600">{{$As_nan}} </span>  รายการ</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                              @if($As_nan = 0)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_nan <= 100)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 1%" aria-valuenow="499" aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_nan <= 200)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 2%" aria-valuenow="999" aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_nan <= 400)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 4%" aria-valuenow="1999" aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_nan <= 600)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 6%" aria-valuenow="2999" aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_nan <= 800)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 8%" aria-valuenow="3999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($As_nan <= 1000)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 10%" aria-valuenow="4999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($As_nan <= 2000)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 20%" aria-valuenow="5999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($As_nan <= 3000)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 30%" aria-valuenow="8999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($As_nan <= 4000)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 40%" aria-valuenow="11999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($As_nan <= 5000)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 50%" aria-valuenow="14999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($As_nan <= 6000)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 60%" aria-valuenow="16999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($As_nan <= 7000)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 70%" aria-valuenow="19999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($As_nan <= 8000)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 80%" aria-valuenow="22999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($As_nan <= 9000)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 90%" aria-valuenow="25999" aria-valuemin="0" aria-valuemax="10000"></div>
                            @else
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 100%" aria-valuenow="10000" aria-valuemin="0" aria-valuemax="10000"></div>
                            @endif
                      </div>
                      <p class="pt-1">พะเยา
                        <span class="float-right">
                          <span class="text-bold-600">{{$As_payoua}} </span>  รายการ</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                                @if($As_payoua = 0)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="10000"></div>
                                @elseif($As_payoua <= 100)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 1%" aria-valuenow="499" aria-valuemin="0" aria-valuemax="10000"></div>
                                @elseif($As_payoua <= 200)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 2%" aria-valuenow="999" aria-valuemin="0" aria-valuemax="10000"></div>
                                @elseif($As_payoua <= 400)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 4%" aria-valuenow="1999" aria-valuemin="0" aria-valuemax="10000"></div>
                                @elseif($As_payoua <= 600)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 6%" aria-valuenow="2999" aria-valuemin="0" aria-valuemax="10000"></div>
                                @elseif($As_payoua <= 800)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 8%" aria-valuenow="3999" aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_payoua <= 1000)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 10%" aria-valuenow="4999" aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_payoua <= 2000)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 20%" aria-valuenow="5999" aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_payoua <= 3000)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 30%" aria-valuenow="8999" aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_payoua <= 4000)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 40%" aria-valuenow="11999" aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_payoua <= 5000)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 50%" aria-valuenow="14999" aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_payoua <= 6000)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 60%" aria-valuenow="16999" aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_payoua <= 7000)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 70%" aria-valuenow="19999" aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_payoua <= 8000)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 80%" aria-valuenow="22999" aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_payoua <= 9000)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 90%" aria-valuenow="25999" aria-valuemin="0" aria-valuemax="10000"></div>
                              @else
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 100%" aria-valuenow="10000" aria-valuemin="0" aria-valuemax="10000"></div>
                              @endif
                      </div>
                      <p class="pt-1">เชียงราย
                        <span class="float-right">
                          <span class="text-bold-600">{{$As_chaingray}} </span>  รายการ</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                          {{-- @if($As_chaingray = 0)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 0%" aria-valuenow={{$As_chaingray}} aria-valuemin="0" aria-valuemax="10000"></div>
                                @elseif($As_chaingray <= 100)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 5%" aria-valuenow={{$As_chaingray}} aria-valuemin="0" aria-valuemax="10000"></div>
                                @elseif($As_chaingray <= 200)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 10%" aria-valuenow={{$As_chaingray}} aria-valuemin="0" aria-valuemax="10000"></div>
                                @elseif($As_chaingray <= 400)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 15%" aria-valuenow={{$As_chaingray}} aria-valuemin="0" aria-valuemax="10000"></div>
                                @elseif($As_chaingray <= 600)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 20%" aria-valuenow={{$As_chaingray}} aria-valuemin="0" aria-valuemax="10000"></div>
                                @elseif($As_chaingray <= 800)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 25%" aria-valuenow={{$As_chaingray}} aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_chaingray <= 1000)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 30%" aria-valuenow={{$As_chaingray}} aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_chaingray <= 2000)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 35%" aria-valuenow={{$As_chaingray}} aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_chaingray <= 3000)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 40%" aria-valuenow={{$As_chaingray}} aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_chaingray <= 4000)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 45%" aria-valuenow={{$As_chaingray}} aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_chaingray <= 5000)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 50%" aria-valuenow={{$As_chaingray}} aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_chaingray <= 6000)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 60%" aria-valuenow={{$As_chaingray}} aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_chaingray <= 7000)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 70%" aria-valuenow={{$As_chaingray}} aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_chaingray <= 8000)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 80%" aria-valuenow={{$As_chaingray}} aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_chaingray <= 9000)
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 90%" aria-valuenow={{$As_chaingray}} aria-valuemin="0" aria-valuemax="10000"></div>
                              @else
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 100%" aria-valuenow={{$As_chaingray}} aria-valuemin="0" aria-valuemax="10000"></div>
                          @endif --}}
                      </div>
                      <p class="pt-1">แม่ฮ่องสอน
                        <span class="float-right">
                          <span class="text-bold-600">{{$As_maehongson}} </span>  รายการ</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                              @if($As_maehongson = 0)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 0%" aria-valuenow={{$As_maehongson}} aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_maehongson <= 100)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 5%" aria-valuenow={{$As_maehongson}} aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_maehongson <= 200)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 10%" aria-valuenow={{$As_maehongson}} aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_maehongson <= 400)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 15%" aria-valuenow={{$As_maehongson}} aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_maehongson <= 600)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 20%" aria-valuenow={{$As_maehongson}} aria-valuemin="0" aria-valuemax="10000"></div>
                              @elseif($As_maehongson <= 800)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 25%" aria-valuenow={{$As_maehongson}} aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($As_maehongson <= 1000)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 30%" aria-valuenow={{$As_maehongson}} aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($As_maehongson <= 2000)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 35%" aria-valuenow={{$As_maehongson}} aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($As_maehongson <= 3000)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 40%" aria-valuenow={{$As_maehongson}} aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($As_maehongson <= 4000)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 45%" aria-valuenow={{$As_maehongson}} aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($As_maehongson <= 5000)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 50%" aria-valuenow={{$As_maehongson}} aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($As_maehongson <= 6000)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 60%" aria-valuenow={{$As_maehongson}} aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($As_maehongson <= 7000)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 70%" aria-valuenow={{$As_maehongson}} aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($As_maehongson <= 8000)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 80%" aria-valuenow={{$As_maehongson}} aria-valuemin="0" aria-valuemax="10000"></div>
                            @elseif($As_maehongson <= 9000)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 90%" aria-valuenow={{$As_maehongson}} aria-valuemin="0" aria-valuemax="10000"></div>
                            @else
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 100%" aria-valuenow={{$As_maehongson}} aria-valuemin="0" aria-valuemax="10000"></div>
                            @endif
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
                            <canvas id="assets-chart" height="420"></canvas>
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
                        <span class="text-bold-600">{{$buil_chaingmai}}</span> หลัง</span>
                    </p>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                      <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="pt-1">ลำพูน
                        <span class="float-right">
                          <span class="text-bold-600">{{$buil_lamphoon}}</span> หลัง</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                        <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="pt-1">ลำปาง
                        <span class="float-right">
                          <span class="text-bold-600">{{$buil_lampang}}</span> หลัง</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                        <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="pt-1">แพร่
                        <span class="float-right">
                          <span class="text-bold-600">{{$buil_prae}}</span> หลัง</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                        <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="pt-1">น่าน
                        <span class="float-right">
                          <span class="text-bold-600">{{$buil_nan}}</span> หลัง</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                        <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="pt-1">พะเยา
                        <span class="float-right">
                          <span class="text-bold-600">{{$buil_payoua}}</span> หลัง</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                        <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="pt-1">เชียงราย
                        <span class="float-right">
                          <span class="text-bold-600">{{$buil_chaingray}}</span> หลัง</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                        <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="pt-1">แม่ฮ่องสอน
                        <span class="float-right">
                          <span class="text-bold-600">{{$buil_maehongson}}</span> หลัง</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                        <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
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
                            <canvas id="building-chart" height="420"></canvas>
                        </div>
                    </div>
                </div>
            </div>
          </div>


      </div>
    </div>
  </div>
  <div class="progress-done" data-done="70">
    70%
  </div>
  {{-- <script>
    var ajax = new XMLHttpRequest();
    ajax.responseType = "blob";
    ajax.open("GET","Archive.zip",true);
    ajax.send();

    ajax.onreadystatechange = function(){
      if(this.readyState == 4 && this.status == 200){
        var obj = window.URL.createObjectURL(this.response);
        document.getElementById("aschaingmai").setAttribute("href",obj);

        setTimeout(function(){
          window.URL.revokeObject(obj);
        }, 60 * 1000);
      }
    };

  </script> --}}

  {{-- <script>    
    $(document).ready(function){     
        fect_data();
        function fect_data()
        {
            $.ajax({
                url:"{{route('auth.personcount')}}",
                method:"GET",
                success:function(data)
                {
                    $('#progressbar_chaingmai').html(data);
                    
                }
            })
        }
      
    }
</script> --}}


{{-- //   var progressbar = document.getElementById("progressbar");

// ajax.onprogress = function(e){
//   progress.max = e.total;
//   progress.value = e.loaded; --}}