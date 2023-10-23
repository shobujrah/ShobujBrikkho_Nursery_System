<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
                           
            <div class="sb-sidenav-menu-heading">

                    <div class="d-flex align-items-center ms-4 mb-4">
                            <div class="position-relative">
                                 <!-- <img class="rounded-circle" src="img/ShobujBrikkho.png" alt="" style="width: 60px; height: 60px;"> -->
                                 <!-- <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div> -->
                            </div>
                            <div class="ms-3">
                             <h6 class="mb-0"> Admin</h6>
                            </div>
                    </div>
            </div>

            <a class="nav-link" href="{{route('dashboard')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                 Dashboard
            </a>

            <a class="nav-link" href="{{route('category.list')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Category
            </a>

            <a class="nav-link" href="{{route('product.list')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Product
            </a>

            <!-- <a class="nav-link" href="">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Slider
            </a> -->

            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseUser" aria-expanded="false" aria-controls="collapseUser">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                 User
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseUser" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="{{route('customer.list')}}">User Details</a>
                </nav>
            </div>

            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseOrder" aria-expanded="false" aria-controls="collapseOrder">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                 Order
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseOrder" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="{{route('order.list')}}">Order Details</a>
                </nav>
            </div>

            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePayment" aria-expanded="false" aria-controls="collapsePayment">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                 Payment
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapsePayment" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="{{route('payment.details')}}">Payment Details</a>
                </nav>
            </div>

            <a class="nav-link" href="{{route('employee.list')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Delivery Man
            </a>
            <!-- <a class="nav-link" href="">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Delivery Order
            </a> -->
            <a class="nav-link" href="{{route('contact.us.info')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Contact Us Info
            </a>

            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseReport" aria-expanded="false" aria-controls="collapseReport">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Report
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseReport" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="{{route('product.report')}}"> Product Report</a>
                </nav>
            </div>
            <div class="collapse" id="collapseReport" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="{{route('order.report')}}">Order Report</a>
                </nav>
            </div>

        </div>
    </div>
</nav>
