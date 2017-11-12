<ul class="nav navbar-nav">
    <li class="active">
      <a href='<?php echo site_url('/dashboard/index')?>'>Dashboard</a> 
    </li>
   
        <li class="dropdown" id='data-management-menu'>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">School<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href='<?php echo site_url('/data/schools')?>'>Add School</a></li>
            <li><a href='<?php echo site_url('/data/classes')?>'>Add Class</a></li>
            <li><a href='<?php echo site_url('/data/students')?>'>Add Student</a></li>
            <li><a href='<?php echo site_url('/data/machines')?>'>Add Machine</a></li>
            <li><a href='<?php echo site_url('/data/cards')?>'>Add Cards</a></li>
          </ul>
        </li>
      
    <li class="dropdown" id='data-management-menu'>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Student<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?=site_url('data/alot_card')?>">Card Allotment </a></li>
            <li><a href="<?=site_url('data/machine_allotment')?>">Machine Allotment </a></li>
 </ul>
        </li>
<?php /*

        <li class="dropdown" id='data-management-menu'>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bookings<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href='<?php echo site_url('/billing/create')?>'>Create Pre Booking</a></li>
            <li><a href='<?php echo site_url('/data/pre_bookings')?>'>See Previous Bookings</a></li>
          </ul>
        </li>
        */?>
    </ul>