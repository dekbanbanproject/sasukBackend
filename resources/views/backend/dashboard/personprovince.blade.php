<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">        
        <div class="row">
            <div class="col-12 col-md-4">
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
                    <p class="pt-1" ><a href="{{ url('backend/person_province_only/'.$hos_per_chiangmais->chwpart)}}">เชียงใหม่</a>  
                   
                      <span class="float-right">
                        <span class="text-bold-600">{{$chaingmai}}</span> คน</span>
                    </p>                   
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                      <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                   
                    <p class="pt-1"><a href="{{ url('backend/person_province_only/'.$hos_per_lamphoons->chwpart)}}">ลำพูน</a> 
                        <span class="float-right">
                          <span class="text-bold-600">{{$lamphoon}}</span> คน</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                        <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="pt-1"><a href="{{ url('backend/person_province_only/'.$hos_per_lampangs->chwpart)}}">ลำปาง</a> 
                        <span class="float-right">
                          <span class="text-bold-600">{{$lampang}}</span> คน</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                        <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="pt-1"><a href="{{ url('backend/person_province_only/'.$hos_per_praes->chwpart)}}">แพร่</a> 
                        <span class="float-right">
                          <span class="text-bold-600">{{$prae}}</span> คน</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                        <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="pt-1"><a href="{{ url('backend/person_province_only/'.$hos_per_nans->chwpart)}}">น่าน</a> 
                        <span class="float-right">
                          <span class="text-bold-600">{{$nan}}</span> คน</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                        <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="pt-1"><a href="{{ url('backend/person_province_only/'.$hos_per_payouas->chwpart)}}">พะเยา</a> 
                        <span class="float-right">
                          <span class="text-bold-600">{{$payoua}}</span> คน</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                        <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="pt-1"><a href="{{ url('backend/person_province_only/'.$hos_per_chaingrays->chwpart)}}">เชียงราย</a> 
                        <span class="float-right">
                          <span class="text-bold-600">{{$chaingray}}</span> คน</span>
                      </p>
                      <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                        <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="pt-1"><a href="{{ url('backend/person_province_only/'.$hos_per_maehongsons->chwpart)}}">แม่ฮ่องสอน</a> 
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
           
            <div class="col-12 col-md-8">
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
                            <canvas id="person-chart" height="400"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">  
          <div class="col-12 col-md-12">
              <div class="card">
                  <div class="card-header">
                      <h4 class="card-title">Person Type Chart</h4>
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
                          <canvas id="personkind-chart" height="600"></canvas>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      
      </div>
    </div>
  </div>
