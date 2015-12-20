<div class="burger-trigger hidden">


 <div class="menu-overlay">  


      <div class="row p-t-90">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">


        @yield('form')


          <form action="" method="post" data-form="search">
            <div class="form-group">
                <label>Search</label>          
                <input id="search_str" name="search_str" class="form-control input-lg" type="text">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </div>
          </form>

          <div id="barcodeError" class="alert alert-warning hidden"><strong>Could not Find!</strong> That barcode does not exist in the database </div>

          <form action="{!!url('auth/login')!!}" method="post" data-form="user">
            <div class="form-group">
                <label>Employee Number</label>
                <div class="input-group input-group-lg input-large">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input name="username" class="form-control input-large" type="text" value="{{ Auth::check() ? Auth::user()->username : '' }}">
                  <input name="password" class="hidden" type="password" value="{{ Auth::check() ? Auth::user()->username : '' }}">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  @if (Auth::check())
                  <span class="input-group-btn"><a href="{!!url('auth/logout')!!}" class="btn red" type="button">Logout</a></span>
                  @endif
                </div>
            </div>
          </form>

          <form action="{!!url('resource/change')!!}" method="post" data-form="resource">
            <div class="form-group">
              <label for="select2-single-append" class="control-label">Select Resource</label>
              <div class="input-group input-group-lg input-large select2-bootstrap-prepend">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
              </div>
            </div>
          </form>

        </div>
        <div class="col-md-4">
        </div>
      </div>
    
<div class="row p-t-30 m-l-30 m-r-30">
  <div class="col-md-12">
  <form class="hidden" action="" method="post" data-form="barcode">
    <table class="table table-condensed">
      <tbody>
        <tr>

          <td class="padding-20" style="background-color: #2B3643; border-top:none" width="300px">
            <div class="p-l-10 p-r-10" style="line-height:8em;background-color: #fff;height:100%; width:100%">
              <img src="" alt="" width="280px" style="vertical-align:middle;">
            </div>
          </td>

          <td class="table-title padding-20" style="background-color: #2B3643; border-top:none;">
            <h4 id="title">
              
            </h4>
            <p id="location">
             
            </p>
          </td>

          <td id="info" class="table-title padding-20" style="background-color: #2B3643; border-top:none;">
            
          </td>

          <td class="table-desc" style="background-color: #2B3643; border-top:none"> 
            <div class="form-group p-t-40">
                <div class="input-group input-group-lg input-xsmall">
                    <input name="amount" type="text" class="form-control input-lg input-xsmall" />
                    <span class="input-group-addon">Stk</span>
                </div>
              </div>      
          </td>

          <td style="background-color: #2B3643; border-top:none">
            <div class="form-group p-t-40" >
              <a href="javascript:;" class="btn btn-lg green"> <i class="fa fa-hand-paper-o"></i> Take </a>
              <a href="javascript:;" class="btn btn-lg blue"> <i class="icon-magic-wand"></i> Request </a>
            </div>
          </td>

        </tr>
      </tbody>
    </table>
    </form>
  </div>   
</div>              

<div id="puc"></div>


</div>
<div class="menu-bg-overlay"></div>
</div>