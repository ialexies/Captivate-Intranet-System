<!--Navbar-->
<nav class="navbar navbar-fixed-top">

  <div class="">
          
      <div class="navbar-header">
        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn" style="float: left; margin-right: 10px; margin-left:20px;">
              <i class="glyphicon glyphicon-align-left"></i>
          </button>

        <a class="navbar-brand" style="float: left;">myCaptivate</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="{{Request::is('/') ? 'active' : ''}}" ><a href="/">Home</a></li>
          <li class="dropdown {{Request::is('about') ? 'active' : ''}}">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">myOffice</a>
          <ul class="dropdown-menu">
            <li><a href="/people-calendar">People Calendar</a></li>
            <li><a href="/meeting-room">Meeting Room Booking</a></li>
            <li><a href="/official-business-authorization">Official Business Authorization</a></li>
            <li><a href="/time-keeping">Time Keeping</a></li>
            <li><a href="/olm">Offsets, Leave Application & Monitoring</a></li>
          </ul>
          </li>
          <li class="dropdown {{Request::is('about') ? 'active' : ''}}">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">myFinance</a>
            <ul class="dropdown-menu">
              <li><a href="/material-requisition-form">Material Requisition Form</a></li>
              <li><a href="/rpf">Requests for Payment Form</a></li>
              <li><a href="/e-payslip">E-Payslip</a></li>
            </ul>
          </li>
          <li class="dropdown {{Request::is('about') ? 'active' : ''}}">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">myHR</a>
          <ul class="dropdown-menu">
            <li><a href="/people-calendar">Personal Requisition Form</a></li>
            <li><a href="/meeting-room">Clearance Checklist</a></li>
            <li><a href="/official-business-authorization">New Employee Center</a></li>
            <li><a href="/time-keeping">Performance Appraisals</a></li>
          </ul>
          </li>
          <li><a href="/logout">Logout</a></li>
        </ul>
      </div><!--/.nav-collapse -->
  </div>
  <nav id="sidebar">
                <ul class="list-unstyled components">
                    <li>
                        <h3>Compliance Division</h3>
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Government Compliance</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="/new-project">New Project</a></li>
                            <li><a href="/lgu">LGU Requirements Checklist</a></li>
                            <li><a href="#">NFS Upload</a></li>
                            <li><a href="#">Communications/Letters Log</a></li>
                            <li><a href="#">Daily Status Report</a></li>
                        </ul>
                        <a href="#home1Submenu" data-toggle="collapse" aria-expanded="false">Trademark Processing</a>
                        <ul class="collapse list-unstyled" id="home1Submenu">
                            <li><a href="new-project-trademark">New Project</a></li>
                            <li><a  style="cursor: not-allowed" href="#">Communications Letter from IPO</a></li>
                            <li><a href="/status">Trademark Status</a></li>
                        </ul>
                    </li>
                    
                    <li>
                      <h4>Government Division</h4>
                        <a href="/sss">SSS Forms</a>
                    </li>
                    <li>
                        <a href="/bir">BIR Forms</a>
                    </li>
                    <li>
                        <a href="/philhealth">PhilHealth Forms</a>
                    </li>
                    <li>
                        <a href="/pagIBIG">Pag-IBIG Forms</a>
                    </li>
                </ul>
            </nav>
</nav>
<!--Sidebar-->

            <div class="overlay"></div>
        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
         <script type="text/javascript">
             $(document).ready(function () {
                $('#dismiss, .overlay').on('click', function () {
                    $('#sidebar').removeClass('active');
                    $('.overlay').fadeOut();
                });

                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                     $('.overlay').fadeIn();
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                 });
             });
         </script>
