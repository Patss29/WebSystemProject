    <?php 
        include 'index_navigation/index_header.php'; 
    ?>

    <!--Landing Page Content-->
    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-md-6 order-md-2 order-1">
                <img src="img/QRcode.jpg" alt="Attendance System" class="img-fluid">
            </div>
            <div class="col-md-6 order-md-1 order-2">
                <h5 class="colored-last-word display-4 title" style="font-weight:bold;">
                    Welcome to <span class="last-word">Codify</span> <!-- Title here -->
                </h5>
                <p class="lead justified-paragraph subHeading">
                    Say Goodbye to Attendance Sheets! Simplify event check-ins and classroom roll calls with our QR code solution 
                    - fast, efficient, and hassle-free!
                </p>
            </div>
        </div>
    </div>

    <!--About Section-->
    <div class="container-fluid mt-5" style="background-color: #ddd;" id="aboutIndex">
        <div class="row">
            <div class="col">
                <div class="about-section p-5">
                    <h2 class="text-center aboutTitle">About</h2>
                    <p class="description">
                        Our QR-based attendance system is designed to streamline the attendance 
                        process for students, teachers, and event organizers. Whether it's a classroom, seminar, or school event, this system allows users to generate a unique QR code that can be scanned by participants to instantly log their presence.
                        This eliminates the need for paper-based records or manual roll calls, 
                        saving time and reducing errors. The data is securely stored and can be 
                        accessed in real-time, giving admins a clear view of who attended the session.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!--Role Section-->
    <div class="container text-center mt-5 mb-5" id="rolesIndex">
        <h2 class="mb-5">Select Role</h2>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 mb-4">
                <a href="student_login.php" class="text-decoration-none"> 
                    <div class="portal-card">
                        <i class="portal-icon bi bi-laptop"></i>
                        <h3 class="portal-title">Student</h3>
                    </div>
                </a>
            </div>
        
            <div class="col-lg-4 col-md-6 mb-4">
                <a href="prof_login.php" class="text-decoration-none"> 
                    <div class="portal-card">
                        <i class="portal-icon bi bi-pencil"></i>
                        <h3 class="portal-title">Teacher</h3>
                    </div>
                </a>
            </div>
        
            <div class="col-lg-4 col-md-6 mb-4">
                <a href="admin_login.php" class="text-decoration-none"> 
                    <div class="portal-card">
                        <i class="portal-icon bi bi-gear"></i>
                        <h3 class="portal-title">Admin</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <?php 
        include 'index_navigation/index_footer.php'; 
    ?>