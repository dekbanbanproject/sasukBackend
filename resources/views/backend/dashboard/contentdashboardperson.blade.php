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
                    <p class="pt-1" >เชียงใหม่<a href="{{ url('backend/dashboardperson_only/'.$hos_per_chiangmais->chwpart)}}"> <b style="color:red;font-size:20px;font-weight:bold ml-3"> &nbsp;&nbsp;Click  !! </b></a>   
                      <span class="float-right">
                        <span class="text-bold-600">{{$chaingmai}}</span> /10000</span>
                    </p>
                    <div class="progresst_perchaungmait" max="10000">
                      <div class="progress-perchaungmait progress-sm mt-1 mb-0 box-shadow-2" data-perchaungmait="{{$perchaingmaicen}}">{{$chaingmai}} 
                      </div> 
                    </div>
                    <p class="pt-1">ลำพูน<a href="{{ url('backend/dashboardperson_only/'.$hos_per_lamphoons->chwpart)}}"> <b style="color:red;font-size:20px;font-weight:bold ml-3"> &nbsp;&nbsp;Click  !! </b></a> 
                        <span class="float-right">
                          <span class="text-bold-600">{{$lamphoon}}</span> /10000</span>
                      </p>
                      <div class="progresst_perlamphoont" max="10000">
                        <div class="progress-perlamphoont progress-sm mt-1 mb-0 box-shadow-2" data-perlamphoont="{{$perlamphooncen}}">{{$lamphoon}} 
                        </div> 
                      </div>
                      <p class="pt-1">ลำปาง<a href="{{ url('backend/dashboardperson_only/'.$hos_per_lampangs->chwpart)}}"> <b style="color:red;font-size:20px;font-weight:bold ml-3"> &nbsp;&nbsp;Click  !! </b></a> 
                        <span class="float-right">
                          <span class="text-bold-600">{{$lampang}}</span> /10000</span>
                      </p>
                      <div class="progresst_perlampangt" max="10000">
                        <div class="progress-perlampangt progress-sm mt-1 mb-0 box-shadow-2" data-perlampangt="{{$perlampangcen}}">{{$lampang}} 
                        </div> 
                      </div>
                      <p class="pt-1">แพร่<a href="{{ url('backend/dashboardperson_only/'.$hos_per_praes->chwpart)}}"><b style="color:red;font-size:20px;font-weight:bold ml-3"> &nbsp;&nbsp;Click  !! </b></a> 
                        <span class="float-right">
                          <span class="text-bold-600">{{$prae}}</span> /10000</span>
                      </p>
                      <div class="progresst_perpraet" max="10000">
                        <div class="progress-perpraet progress-sm mt-1 mb-0 box-shadow-2" data-perpraet="{{$perpraecen}}">{{$prae}} 
                        </div> 
                      </div>
                      <p class="pt-1">น่าน<a href="{{ url('backend/dashboardperson_only/'.$hos_per_nans->chwpart)}}"> <b style="color:red;font-size:20px;font-weight:bold ml-3"> &nbsp;&nbsp;Click  !! </b></a> 
                        <span class="float-right">
                          <span class="text-bold-600">{{$nan}}</span> /10000</span>
                      </p>
                      <div class="progresst_pernant" max="10000">
                        <div class="progress-pernant progress-sm mt-1 mb-0 box-shadow-2" data-pernant="{{$pernancen}}">{{$nan}} 
                        </div> 
                      </div>
                      <p class="pt-1">พะเยา<a href="{{ url('backend/dashboardperson_only/'.$hos_per_payouas->chwpart)}}"> <b style="color:red;font-size:20px;font-weight:bold ml-3"> &nbsp;&nbsp;Click  !! </b></a> 
                        <span class="float-right">
                          <span class="text-bold-600">{{$payoua}}</span> /10000</span>
                      </p>
                      <div class="progresst_perpayouat" max="10000">
                        <div class="progress-perpayouat progress-sm mt-1 mb-0 box-shadow-2" data-perpayouat="{{$perpayouacen}}">{{$payoua}} 
                        </div> 
                      </div>
                      <p class="pt-1">เชียงราย<a href="{{ url('backend/dashboardperson_only/'.$hos_per_chaingrays->chwpart)}}"> <b style="color:red;font-size:20px;font-weight:bold ml-3"> &nbsp;&nbsp;Click  !! </b></a> 
                        <span class="float-right">
                          <span class="text-bold-600">{{$chaingray}}</span> /10000</span>
                      </p>
                      <div class="progresst_perchaingrayt" max="10000">
                        <div class="progress-perchaingrayt progress-sm mt-1 mb-0 box-shadow-2" data-perchaingrayt="{{$perchaingraycen}}">{{$chaingray}} 
                        </div> 
                      </div>
                      <p class="pt-1">แม่ฮ่องสอน<a href="{{ url('backend/dashboardperson_only/'.$hos_per_maehongsons->chwpart)}}"> <b style="color:red;font-size:20px;font-weight:bold ml-3"> &nbsp;&nbsp;Click  !! </b></a> 
                        <span class="float-right">
                          <span class="text-bold-600">{{$maehongson}}</span> /10000</span>
                      </p>
                      <div class="progresst_permaehongsont" max="10000">
                        <div class="progress-permaehongsont progress-sm mt-1 mb-0 box-shadow-2" data-permaehongsont="{{$permaehongsoncen}}">{{$maehongson}} 
                        </div> 
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
                            <canvas id="persons-chart" height="480"></canvas>
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
                          <canvas id="personkindss-chart" height="600"></canvas>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      
      </div>
    </div>
  </div>
