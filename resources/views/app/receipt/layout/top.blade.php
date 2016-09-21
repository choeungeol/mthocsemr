<nav class="top-menu">
    <div class="menu-icon-container hidden-md-up">
        <div class="animate-menu-button left-menu-toggle">
            <div><!-- --></div>
        </div>
    </div>
    <div class="menu">
        <div class="menu-user-block">
            <div class="dropdown dropdown-avatar">
                <a href="javascript: void(0);" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <span class="avatar" href="javascript:void(0);">
                        <img src="vendor/assets/common/img/temp/avatars/1.jpg" alt="Alternative text to the image">
                    </span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="" role="menu">
                    <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-user"></i> Profile</a>
                    <div class="dropdown-divider"></div>
                    <div class="dropdown-header">Home</div>
                    <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-circle-right"></i> System Dashboard</a>
                    <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-circle-right"></i> User Boards</a>
                    <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-circle-right"></i> Issue Navigator (35 New)</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-exit"></i> Logout</a>
                </ul>
            </div>
        </div>
        <div class="menu-info-block">
            <div class="left">
                <div class="header-buttons font-size-20">
                    <a href="/receipt" class="label label-primary" aria-expanded="false">
                        <i class="dropdown-inline-button-icon icmn-folder-open"></i>
                        <span class="hidden-lg-down">접수</span>
                    </a>
                    <a href="/basicbiopsy" class="label label-primary" aria-expanded="false">
                        <i class="dropdown-inline-button-icon icmn-database"></i>
                        <span class="hidden-lg-down">기초검사</span>
                    </a>
                    <a href="/disease" class="label label-primary" aria-expanded="false">
                        <i class="dropdown-inline-button-icon icmn-price-tags"></i>
                        <span class="hidden-lg-down">상병관리</span>
                    </a>
                    <a href="/healthcare" class="label label-primary" aria-expanded="false">
                        <i class="dropdown-inline-button-icon icmn-price-tags"></i>
                        <span class="hidden-lg-down">진료실</span>
                    </a>
                    <a href="/nurseroom" class="label label-primary" aria-expanded="false">
                        <i class="dropdown-inline-button-icon icmn-price-tags"></i>
                        <span class="hidden-lg-down">간호실</span>
                    </a>
                    <a href="/pharmacy" class="label label-primary" aria-expanded="false">
                        <i class="dropdown-inline-button-icon icmn-price-tags"></i>
                        <span class="hidden-lg-down">약제실</span>
                    </a>
                    <a href="/disease" class="label label-primary" aria-expanded="false">
                        <i class="dropdown-inline-button-icon icmn-price-tags"></i>
                        <span class="hidden-lg-down">상병관리</span>
                    </a>
                </div>
            </div>
            <div class="left hidden-md-down">
                <div class="example-top-menu-chart">
                    <span class="title">Income:</span>
                    <span class="chart" id="topMenuChart">1,3,2,0,3,1,2,3,5,2</span>
                    <span class="count">425.00 USD</span>

                    <!-- Top Menu Chart Script -->
                    <script>
                        $(function () {

                            var topMenuChart = $("#topMenuChart").peity("bar", {
                                fill: ['#01a8fe'],
                                height: 22,
                                width: 44
                            });

                            setInterval(function() {
                                var random = Math.round(Math.random() * 10);
                                var values = topMenuChart.text().split(",");
                                values.shift();
                                values.push(random);
                                topMenuChart.text(values.join(",")).change()
                            }, 1000);

                        });
                    </script>
                    <!-- Top Menu Chart Script -->
                </div>
            </div>
            <div class="right hidden-md-down margin-left-20">
                <div class="search-block">
                    <div class="form-input-icon form-input-icon-right">
                        <i class="icmn-search"></i>
                        <input type="text" class="form-control form-control-sm form-control-rounded" placeholder="Search...">
                        <button type="submit" class="search-block-submit "></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>