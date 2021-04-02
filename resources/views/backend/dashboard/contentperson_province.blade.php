<?php 
use App\Http\Controllers\DashController;
?>

<div class="app-content content">
  <div class="content-overlay"></div>
    <div class="content-wrapper">    
        <div class="content-body"> 
            <section id="scrolling">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">รายการโรงพยาบาลในจังหวัด {{ $hos_per_province->province_name}}</h2>
                      <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                      <div class="heading-elements">
                        <ul class="list-inline mb-0">
                          <li><a data-action="reload">ทั้งหมด&nbsp;&nbsp; {{ $hoscode_count }} &nbsp;&nbsp; คน  </a></li>
                          <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                          <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                          <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="card-content collapse show">
                      <div class="card-body card-dashboard">   
                        <h4 class="card-title" style="color:red;font-size:20px;font-weight:bold mr-3">แยกตามประเภท</h4>                     
                          <table class="myTable table-striped table-bordered responsive dataex-res-visibility" width="100%">
                          <thead>
                            <tr height="40">
                              <th align="center">&nbsp;ลำดับ</th>
                              <th align="center">&nbsp;&nbsp;&nbsp;รหัส</th>
                              <th align="center">&nbsp;ชื่อโรงพยาบาล</th>
                              <th align="center">&nbsp;ข้าราชการ</th>
                              <th align="center">&nbsp;พนักงานราชการ </th>
                              <th align="center">&nbsp;ลูกจ้างประจำ</th>
                              <th align="center">&nbsp;พนักงานกระทรวงสาธารณสุข </th>
                              <th align="center">&nbsp;ลูกจ้างชั่วคราว</th>
                              <th align="center">&nbsp;ลูกจ้างรายวัน</th>
                              <th align="center">&nbsp;&nbsp; อื่น ฯ</th>
                              <th align="center">&nbsp; ข้อมูลว่าง</th>
                              <th align="center">&nbsp;รวม (คน)</th>
                              {{-- <th>จัดการ</th> --}}
                              
                            </tr>
                          </thead>
                          <tbody>
                            <?php $number = 0; ?>
                            @foreach ($hos_province as $item)
                            <?php $number++; ?>
                            <tr height="40">
                              <td align="center">{{ $number}}</td>
                              <td align="center">{{$item->HOSPCODE}}</td>
                              <td>{{$item->HOS_NAME}}</td>
                              <td align="center">{{ DashController::pertypeA($item->HOSPCODE) }} </td>
                              <td align="center">{{ DashController::pertypeC($item->HOSPCODE) }}</td>
                              <td align="center">{{ DashController::pertypeB($item->HOSPCODE) }}</td>
                              <td align="center">{{ DashController::pertypeD($item->HOSPCODE) }}</td>
                              <td align="center">{{ DashController::pertypeE($item->HOSPCODE) }}</td>
                              <td align="center">{{ DashController::pertypeF($item->HOSPCODE) }}</td>
                              <td align="center">{{ DashController::pertypeH($item->HOSPCODE) }}</td>
                              <td align="center" style="color:red;font-size:15px;font-weight:bold mr-3">{{ DashController::pertypeG($item->HOSPCODE) }}</td>
                              <td align="center">{{ DashController::checkhoscode($item->HOSPCODE) }}</td>
                            </tr>
                            @endforeach 
                            
                        </table>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </section>  
            <section id="scrolling">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    {{-- <div class="card-header">
                      <h4 class="card-title">รายการโรงพยาบาลในจังหวัด {{ $hos_per_province->province_name}}</h4>
                      <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                      <div class="heading-elements">
                        <ul class="list-inline mb-0">
                          <li><a data-action="reload">ทั้งหมด&nbsp;&nbsp; {{ $hoscode_count }} &nbsp;&nbsp; คน  </a></li>
                          <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                          <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                          <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                      </div>
                    </div> --}}
                    <div class="card-content collapse show">
                      <div class="card-body card-dashboard"> 
                        <h4 class="card-title" style="color:red;font-size:20px;font-weight:bold mr-3">แยกตามตำแหน่ง</h4>                       
                          <table class="myTable table-striped table-bordered responsive dataex-res-visibility" width="100%">
                          <thead>
                            <tr height="40">
                              <th align="center">&nbsp;ลำดับ</th>
                              <th align="center">&nbsp;&nbsp;&nbsp;รหัส</th>
                              <th align="center">&nbsp;ชื่อโรงพยาบาล</th>
                              <th align="center">&nbsp;นายแพทย์</th>
                              <th align="center">&nbsp;ทันตแพทย์</th>
                              <th align="center">&nbsp;พยาบาลวิชาชีพ </th>
                              <th align="center">&nbsp;นักวิชาการคอมพิวเตอร์</th>
                              <th align="center">&nbsp;นักวิชาการสาธารณสุข </th>
                              <th align="center">&nbsp;นักจัดการงานทั่วไป</th>
                              <th align="center">&nbsp;เภสัชกร</th>
                              {{-- <th align="center">&nbsp;&nbsp; อื่น ฯ</th> --}}
                              <th align="center">&nbsp; ข้อมูลว่าง</th>
                              {{-- <th align="center">&nbsp;รวม (คน)</th> --}}
                              {{-- <th>จัดการ</th> --}}
                              
                            </tr>
                          </thead>
                          <tbody>
                            <?php $number = 0; ?>
                            @foreach ($hos_province as $item)
                            <?php $number++; ?>
                            <tr height="40">
                              <td align="center">{{ $number}}</td>
                              <td align="center">{{$item->HOSPCODE}}</td>
                              <td>{{$item->HOS_NAME}}</td>
                              <td align="center">{{ DashController::positionA($item->HOSPCODE) }} </td>
                              <td align="center">{{ DashController::positionB($item->HOSPCODE) }}</td>
                              <td align="center">{{ DashController::positionC($item->HOSPCODE) }}</td>
                              <td align="center">{{ DashController::positionD($item->HOSPCODE) }}</td>
                              <td align="center">{{ DashController::positionE($item->HOSPCODE) }}</td>
                              <td align="center">{{ DashController::positionF($item->HOSPCODE) }}</td>

                              
                              {{-- @if ( {{ DashController::positionG($item->HOSPCODE)}} ) == 0 ) --}}
                                <td align="center" > {{ DashController::positionG($item->HOSPCODE) }} </td>
                              {{-- @else --}}
                                {{-- <td align="center">{{ DashController::positionG($item->HOSPCODE) }}</td> --}}
                              {{-- @endif --}}
                            
                              <td align="center" style="color:red;font-size:15px;font-weight:bold mr-3">{{ DashController::positionH($item->HOSPCODE) }}</td>
                              {{-- <td align="center">{{ DashController::positionI($item->HOSPCODE) }}</td> --}}
                              {{-- <td align="center">{{ DashController::positionJ($item->HOSPCODE) }}</td> --}}
                            </tr>
                            @endforeach 
                            
                        </table>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </section>         
        </div>
    </div>
  </div>
</div>
