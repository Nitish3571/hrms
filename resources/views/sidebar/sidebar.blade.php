
<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <li class="{{set_active(['home','em/dashboard'])}} submenu">
                    <a href="#" class="{{ set_active(['home','em/dashboard']) ? 'noti-dot' : '' }}">
                        <i class="la la-dashboard"></i>
                        <span> Dashboard</span> <span class="menu-arrow"></span>
                    </a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        <li><a class="{{set_active(['home'])}}" href="#">Admin Dashboard</a></li>
                        <li><a class="{{set_active(['em/dashboard'])}}" href="#">Employee Dashboard</a></li>
                    </ul>
                </li>
                <li class="menu-title"> <span>Authentication</span> </li>
                <li class="{{set_active(['search/user/list','userManagement','activity/log','activity/login/logout'])}} submenu">
                    <a href="#" class="{{ set_active(['search/user/list','userManagement','activity/log','activity/login/logout']) ? 'noti-dot' : '' }}">
                        <i class="la la-user-secret"></i> <span> User Controller</span> <span class="menu-arrow"></span>
                    </a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        <li><a class="{{set_active(['search/user/list','userManagement'])}}" href="#">All User</a></li>
                        <li><a class="{{set_active(['activity/log'])}}" href="#">Activity Log</a></li>
                        <li><a class="{{set_active(['activity/login/logout'])}}" href="#">Activity User</a></li>
                    </ul>
                </li>

                <li class="menu-title"> <span>Employees</span> </li>
                <li class="{{set_active(['all/employee/list','all/employee/list','all/employee/card','form/holidays/new','form/leaves/new',
                    'form/leavesemployee/new','form/leavesettings/page','attendance/page',
                    'attendance/employee/page','form/departments/page','form/designations/page',
                    'form/timesheet/page','form/shiftscheduling/page','form/overtime/page'])}} submenu">
                    <a href="#" class="{{ set_active(['all/employee/list','all/employee/card','form/holidays/new','form/leaves/new',
                    'form/leavesemployee/new','form/leavesettings/page','attendance/page',
                    'attendance/employee/page','form/departments/page','form/designations/page',
                    'form/timesheet/page','form/shiftscheduling/page','form/overtime/page']) ? 'noti-dot' : '' }}">
                        <i class="la la-user"></i> <span> Employees</span> <span class="menu-arrow"></span>
                    </a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        <li><a class="{{set_active(['all/employee/list','all/employee/card'])}}" href="#">All Employees</a></li>
                        <li><a class="{{set_active(['form/holidays/new'])}}" href="#">Holidays</a></li>
                        <li><a class="{{set_active(['form/leaves/new'])}}" href="#">Leaves (Admin)
                            <span class="badge badge-pill bg-primary float-right">1</span></a>
                        </li>
                        <li><a class="{{set_active(['form/leavesemployee/new'])}}" href="#">Leaves (Employee)</a></li>
                        <li><a class="{{set_active(['form/leavesettings/page'])}}" href="#">Leave Settings</a></li>
                        <li><a class="{{set_active(['attendance/page'])}}" href="#">Attendance (Admin)</a></li>
                        <li><a class="{{set_active(['attendance/employee/page'])}}" href="#">Attendance (Employee)</a></li>
                        <li><a class="{{set_active(['form/departments/page'])}}" href="#">Departments</a></li>
                        <li><a class="{{set_active(['form/designations/page'])}}" href="#">Designations</a></li>
                        <li><a class="{{set_active(['form/timesheet/page'])}}" href="#">Timesheet</a></li>
                        <li><a class="{{set_active(['form/shiftscheduling/page'])}}" href="#">Shift & Schedule</a></li>
                        <li><a class="{{set_active(['form/overtime/page'])}}" href="#">Overtime</a></li>
                    </ul>
                </li>
                <li class="menu-title"> <span>HR</span> </li>
                <li class="{{set_active(['create/estimate/page','form/estimates/page','payments','expenses/page'])}} submenu">
                    <a href="#" class="{{ set_active(['create/estimate/page','form/estimates/page','payments','expenses/page']) ? 'noti-dot' : '' }}">
                        <i class="la la-files-o"></i>
                        <span> Sales </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        <li><a class="{{set_active(['create/estimate/page','form/estimates/page'])}}" href="#">Estimates</a></li>
                        <li><a class="{{set_active(['payments'])}}" href="#">Payments</a></li>
                        <li><a class="{{set_active(['expenses/page'])}}" href="#">Expenses</a></li>
                    </ul>
                </li>
                <li class="{{set_active(['form/salary/page','form/payroll/items'])}} submenu">
                    <a href="#" class="{{ set_active(['form/salary/page','form/payroll/items']) ? 'noti-dot' : '' }}"><i class="la la-money"></i>
                    <span> Payroll </span> <span class="menu-arrow"></span></a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        <li><a class="{{set_active(['form/salary/page'])}}" href="#"> Employee Salary </a></li>
                        <li><a href="#"> Payslip </a></li>
                        <li><a class="{{set_active(['form/payroll/items'])}}" href="#"> Payroll Items </a></li>
                    </ul>
                </li>
                <li class="{{set_active(['form/expense/reports/page','form/invoice/reports/page','form/leave/reports/page','form/daily/reports/page'])}} submenu">
                    <a href="#" class="{{ set_active(['form/expense/reports/page','form/invoice/reports/page','form/leave/reports/page','form/daily/reports/page']) ? 'noti-dot' : '' }}"><i class="la la-pie-chart"></i>
                    <span> Reports </span> <span class="menu-arrow"></span></a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        <li><a class="{{set_active(['form/expense/reports/page'])}}" href="#"> Expense Report </a></li>
                        <li><a class="{{set_active(['form/invoice/reports/page'])}}" href="#"> Invoice Report </a></li>
                        <li><a class="{{set_active([''])}}" href="payments-reports.html"> Payments Report </a></li>
                        <li><a class="{{set_active([''])}}" href="employee-reports.html"> Employee Report </a></li>
                        <li><a class="{{set_active([''])}}" href="payslip-reports.html"> Payslip Report </a></li>
                        <li><a class="{{set_active([''])}}" href="attendance-reports.html"> Attendance Report </a></li>
                        <li><a class="{{set_active(['form/leave/reports/page'])}}" href="#"> Leave Report </a></li>
                        <li><a class="{{set_active(['form/daily/reports/page'])}}" href="#"> Daily Report </a></li>
                    </ul>
                </li>

                <li class="menu-title"> <span>Administration</span> </li>
                <li> <a href="assets.html"><i class="la la-object-ungroup">
                    </i> <span>Assets</span></a>
                </li>
                <li class="{{set_active(['user/dashboard/index','jobs/dashboard/index','user/dashboard/all','user/dashboard/applied/jobs','user/dashboard/interviewing','user/dashboard/offered/jobs','user/dashboard/visited/jobs','user/dashboard/archived/jobs','user/dashboard/save','jobs','job/applicants','job/details','page/manage/resumes','page/shortlist/candidates','page/interview/questions','page/offer/approvals','page/experience/level','page/candidates','page/schedule/timing','page/aptitude/result'])}} submenu">
                    <a href="#" class="{{ set_active(['user/dashboard/index','jobs/dashboard/index','user/dashboard/all','user/dashboard/save','jobs','job/applicants','job/details']) ? 'noti-dot' : '' }}"><i class="la la-briefcase"></i>
                        <span> Jobs </span> <span class="menu-arrow"></span>
                    </a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }} {{ (request()->is('job/applicants/*')) ? 'display: block;' : 'display: none;' }}">
                        <li><a class="{{set_active(['user/dashboard/index','user/dashboard/all','user/dashboard/applied/jobs','user/dashboard/interviewing','user/dashboard/offered/jobs','user/dashboard/visited/jobs','user/dashboard/archived/jobs','user/dashboard/save'])}}" href="#"> User Dasboard </a></li>
                        <li><a class="{{set_active(['jobs/dashboard/index'])}}" href="#"> Jobs Dasboard </a></li>
                        <li><a class="{{set_active(['jobs','job/applicants','job/details'])}} {{ (request()->is('job/applicants/*')) ? 'active' : '' }}" href="#"> Manage Jobs </a></li>
                        <li><a class="{{set_active(['page/manage/resumes'])}}" href="#"> Manage Resumes </a></li>
                        <li><a class="{{set_active(['page/shortlist/candidates'])}}" href="#"> Shortlist Candidates </a></li>
                        <li><a class="{{set_active(['page/interview/questions'])}}" href="#"> Interview Questions </a></li>
                        <li><a class="{{set_active(['page/offer/approvals'])}}" href="#"> Offer Approvals </a></li>
                        <li><a class="{{set_active(['page/experience/level'])}}" href="#"> Experience Level </a></li>
                        <li><a class="{{set_active(['page/candidates'])}}" href="#"> Candidates List </a></li>
                        <li><a class="{{set_active(['page/schedule/timing'])}}" href="#"> Schedule timing </a></li>
                        <li><a class="{{set_active(['page/aptitude/result'])}}" href="#"> Aptitude Results </a></li>
                    </ul>
                </li>
                <li class="menu-title"> <span>Pages</span> </li>
                <li class="{{set_active(['employee/profile/*'])}} submenu">
                    <a href="#"><i class="la la-user"></i>
                        <span> Profile </span> <span class="menu-arrow"></span>
                    </a>
                    <ul style="display: none;">
                        <li><a class="{{set_active(['employee/profile/*'])}}" href="#"> Employee Profile </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
