<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    @include('backend/headerB')
</head>
<body class="vertical-layout vertical-compact-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-compact-menu" data-col="2-columns">
  
  
    @include('backend/navbar')  

    @include('backend/sidebar')
 

    <div class="app-content content">
        <div class="content-wrapper">
          <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
              <h3 class="content-header-title mb-0">Dashboard</h3>
              <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-12">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Table Dashboard
                    </li>
                  </ol>
                </div>
              </div>
            </div>
            <div class="content-header-right text-md-right col-md-6 col-12">
              <div class="btn-group">
                {{-- <button class="btn btn-round btn-info" type="button"><i class="icon-cog3"></i> Add +</button> --}}
                <a href="" class=" btn btn-round btn-info shadow-lg" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-file-excel text-white-90" style="font-size:15px "></i>&nbsp;&nbsp; Add +</a>&nbsp;&nbsp;
              </div>
            </div>
          </div>
          <div class="content-body">
          
            <!-- Border color end-->
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Dashboard</h4>
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
                  <div class="card-content">
                    
                    <div class="table-responsive">
                      <table class="table mb-0">
                        <thead>
                          <tr class="border-bottom-active border-custom-color">
                            <th>ลำดับ</th>
                            <th>รหัสหมวดหมู่</th>
                            <th>ชื่อหมวดหมู่</th>
                            <th>จัดการ</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php $number = 0; ?>
                            {{-- @foreach ($cat as $cat)          --}}
                                <?php $number++;  ?>
                          <tr class="border-bottom-pink border-bottom-darken-2 border-custom-color">
                            {{-- <td>{{ $number}}</td>
                            <td>{{ $cat->cat_code}}</td>
                            <td>{{ $cat->cat_name}}</td> --}}
                            <td></td>
                          </tr>
                          {{-- @endforeach --}}
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Border color end -->
          </div>
        </div>
      </div>
 
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
        <form action="" method="POST" enctype="multipart/form-data">           
            @csrf
    
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
              
                    <div class="card">
                     
                      <div class="card-body">

                        <div class="card-block">
                          <fieldset>
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="รหัสหมวดหมู่" aria-describedby="button-addon2">
                              <div class="input-group-append">
                                <button class="btn btn-primary" type="button"></button>
                              </div>
                            </div>
                          </fieldset>
                          <br>
                          <fieldset>
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="ชื่อหมวดหมู่" aria-describedby="button-addon2">
                              <div class="input-group-append">
                                <button class="btn btn-primary" type="button"></button>
                              </div>
                            </div>
                          </fieldset>
                        </div>
                      </div>
                    </div>
              
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-power-off fa-sm text-white-80" style="font-size:15px "></i>&nbsp;&nbsp;Close&nbsp;&nbsp;</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-upload fa-sm text-white-80" style="font-size:15px "></i>&nbsp;&nbsp;Save&nbsp;&nbsp;</button>
                </div>
            </div>
        </form>
        </div>
    </div>

    @include('backend/footerB')    
 
</body>
</html>