
<div class="left" :style="leftSideStyle">
    <ul>
        <li class="<?php if($data['page'] == 'dashboard/index') { echo 'active'; } ?>">
            <a href="index.php?action=dashboard">
                <i class="fa fa-tachometer"></i> 
                <span :style="leftSideStyleText">Dashboard</span>
            </a>
        </li>
        <li class="<?php if($data['page'] == 'carList/index') { echo 'active'; } ?>">
            <a href="index.php?action=carList">
                <i class="fa fa-car"></i> 
                <span :style="leftSideStyleText">Car List</span>
            </a>
        </li>
        <li class="<?php if($data['page'] == 'customerList/index') { echo 'active'; } ?>">
            <a href="index.php?action=customerList">
                <i class="fa fa-address-card"></i> 
                <span :style="leftSideStyleText">Customer List</span>
            </a>
        </li>
        <li class="<?php if($data['page'] == 'bookingList/index') { echo 'active'; } ?>">
            <a href="index.php?action=bookingList">
                <i class="fa fa-book"></i> 
                <span :style="leftSideStyleText">Booking List</span>
            </a>
        </li>
    </ul>
</div>

<div class="logout" :style='leftSideStyle'>
    <a href="index.php?action=logout"><i class="fa fa-sign-out"></i> <span :style="leftSideStyleText">Logout</span></a>
</div>