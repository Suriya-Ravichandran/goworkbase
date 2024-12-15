<?php 

$template = new template()
?>

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="<?php echo $template->changePageToActive();?>">
                    <a href="index.html"><i class="bi bi-house-door-fill"></i> Dashboard </a>
                </li>
                <li class="menu-title">Manage Employee</li><!-- Manage Employee -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="bi bi-person-fill"></i> Employee</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="bi bi-person-fill-add"></i><a href="ui-buttons.html">Add Employee</a></li>
                        <li><i class="bi bi-person-lines-fill"></i><a href="ui-badges.html">View Employee</a></li>
                    </ul>
                </li>
                <li class="menu-title">Manage Attendance</li><!--Mark Attendance -->

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="bi bi-journal-check"></i> Mark Attendance</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="bi bi-journal-plus"></i><a href="font-fontawesome.html">Take Attendance</a></li>
                        <li><i class="bi bi-journal-arrow-down"></i><a href="font-themify.html">Attendance Report</a></li>
                    </ul>
                </li>
                <li class="menu-title">Manage Payroll</li><!-- manage payroll -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="bi bi-wallet2"></i> Manage Salary</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="bi bi-envelope-paper-fill"></i><a href="page-login.html">Settlement</a></li>
                        <li><i class="bi bi-printer"></i><a href="page-register.html">Salary Report</a></li>
                    </ul>
                </li>

                <li class="menu-title">Manage Task</li><!-- Manage Task -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-glass"></i> Manage Task</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="bi bi-calendar2-plus-fill"></i><a href="page-login.html">Create Task</a></li>
                        <li><i class="bi bi-calendar3-event-fill"></i><a href="page-register.html">View All Task</a></li>
                    </ul>
                </li>

                <li class="menu-title">Manage Admins</li><!-- Manage Admin -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="bi bi-people-fill"></i> Manage Admin</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="bi bi-person-fill-add"></i><a href="page-login.html">Add Admin</a></li>
                        <li><i class="bi bi-person-fill-check"></i><a href="page-register.html">View All Admin</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>