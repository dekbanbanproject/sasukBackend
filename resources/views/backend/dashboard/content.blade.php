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
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
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
                          <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
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
                            @if ($assetbuildings <= 200)
                              <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            @elseif ($assetbuildings <= 400)
                              <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div> 
                              @elseif ($assetbuildings >= 600 )
                              <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>  
                            @endif
                              {{-- <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div> --}}
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
                                  <h3 class="danger">{{$chaingmai}}</h3>
                                  <h6>Customer</h6>
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
                      <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="pt-1">ลำพูน
                        <span class="float-right">
                          <span class="text-bold-600">{{$lamphoon}}</span> คน</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                        <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="pt-1">ลำปาง
                        <span class="float-right">
                          <span class="text-bold-600">{{$lampang}}</span> คน</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                        <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="pt-1">แพร่
                        <span class="float-right">
                          <span class="text-bold-600">{{$prae}}</span> คน</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                        <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="pt-1">น่าน
                        <span class="float-right">
                          <span class="text-bold-600">{{$nan}}</span> คน</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                        <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="pt-1">พะเยา
                        <span class="float-right">
                          <span class="text-bold-600">{{$payoua}}</span> คน</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                        <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="pt-1">เชียงราย
                        <span class="float-right">
                          <span class="text-bold-600">{{$chaingray}}</span> คน</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                        <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="pt-1">แม่ฮ่องสอน
                        <span class="float-right">
                          <span class="text-bold-600">{{$maehongson}}</span> คน</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                        <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
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
                      <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="pt-1">ลำพูน
                        <span class="float-right">
                          <span class="text-bold-600">{{$As_lamphoon}}</span> รายการ</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                        <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="pt-1">ลำปาง
                        <span class="float-right">
                          <span class="text-bold-600">{{$As_lampang}} </span>  รายการ</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                        <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="pt-1">แพร่
                        <span class="float-right">
                          <span class="text-bold-600">{{$As_prae}} </span>  รายการ</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                        <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="pt-1">น่าน
                        <span class="float-right">
                          <span class="text-bold-600">{{$As_nan}} </span>  รายการ</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                        <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="pt-1">พะเยา
                        <span class="float-right">
                          <span class="text-bold-600">{{$As_payoua}} </span>  รายการ</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                        <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="pt-1">เชียงราย
                        <span class="float-right">
                          <span class="text-bold-600">{{$As_chaingray}} </span>  รายการ</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                        <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="pt-1">แม่ฮ่องสอน
                        <span class="float-right">
                          <span class="text-bold-600">{{$As_maehongson}} </span>  รายการ</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                        <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
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
