<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal CV</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="CSS/styles.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

</head>
<body>
        <div class="container">
        <!-- Profile Section -->
        <div class="card mb-2 mt-5 " id="profile-body">
            <div class="row " id="profile-container">
                <div class="col-md-3" id="profile-img-container">
                    <img id = "profile-picture" src="Image/gsuite-profile.png" class="img-fluid rounded-circle" alt="Profile Picture" >
                </div>
                <div class="col-md-5 pt-3">
                    <div class="card-body">
                        <h3 class="card-title" id="myName">JERWIN LOUISE G. PERIA</h3>
                        <p class="card-text" id="myMajor">Aspiring Web Developer | IT Major</p>
                    </div>
                </div>
            </div>
        </div>
        </div>

    
            <div class="container p-5 mb-5" id="main-container-content">
                <!-- Contact Section -->
                <h4>CONTACT</h4>
                <div class="row">
                    <?php 
                    $contacts = [
                        ['icon' => 'fas fa-envelope', 'info' => "jerwinperiaIT@gmail.com"],
                        ['icon' => 'fas fa-phone', 'info' => "+63 962 825 1152"],
                        ['icon' => 'fab fa-facebook', 'info' => "Jerwin Louise G. Peria"]
                    ];

                    foreach($contacts as $contact){
                        echo "<div class='col-md-4'>
                                <div class='card mb-3'>
                                    <div class='card-body'>
                                        <p class='card-text'>
                                            <i class='{$contact['icon']}'></i> {$contact['info']}
                                        </p>
                                    </div>
                                </div>
                            </div>";
                    }
                    ?>
                </div>

                <!-- Objective Section -->
                <h4 class="row d-flex justify-content-center align-items-center mt-4">OBJECTIVE</h4>
                <div class="row d-flex justify-content-center align-items-center">
                    <div class='col-12 mb-4 '>
                        <div class='card mb-3'>
                            <div class='card-body' id =''>
                                <p class='card-text' id="obj-description">As a second-year college student deeply interested in Information
                                    Technology, I am enthusiastic about the opportunity to apply my
                                    skills and knowledge in a practical setting. I am eager to contribute my expertise in coding languages, web
                                    development, database management, and technical support to
                                    enhance the IT operations within the branch. Through this role, I aim
                                    to gain hands-on experience in IT service management and business
                                    processes while collaborating with a dynamic team. I am committed
                                    to leveraging this opportunity to grow both personally and
                                    professionally, making meaningful contributions to Starbucks'
                                    technology solutions and the overall customer experience.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                        <!-- Tech Stack Section -->
                        <h4>TECH STACK</h4>
                        <div class="row">
                            <?php
                            $skills = [
                                "HTML" => "fab fa-html5",
                                "CSS" => "fab fa-css3-alt",
                                "PHP" => "fab fa-php",
                                "JavaScript" => "fab fa-js",
                                "Teamwork" => "fas fa-users",
                                "Problem Solving" => "fas fa-brain",
                                "NodeJS" => "fab fa-node-js",
                                "React" => "fab fa-react",
                                "SQL" => "fas fa-database"
                            ];

            
                            foreach ($skills as $skill => $icon) {
                                echo "
                                <div class='col-md-4 '>
                                    <div class='card mb-3 d-flex justify-content-center align-items-center'>
                                        <div class='card-body d-flex align-items-center'>
                                            <i class='$icon fa-2x'></i>
                                            <p class='card-text mb-0 ml-4'>$skill</p>
                                        </div>
                                    </div>
                                </div>";
                            }
                            ?>
                        </div>


                <!-- Experience Section -->
                <h4>Experience</h4>
                <div class="row">
                    <?php
                    $experiences = [
                        ["Batangas State University - TNEU: Database Development and Management", "Second Year College", "Jun 2022 - Dec 2022"],
                        ["Batangas State University - TNEU: Web Application Development", "Second Year College", "Jun 2022 - Dec 2022"],
                        ["Lipa Silvercrest: Computer Hardware and Software Setup", "Junior High School", "Jun 2022 - Dec 2022"],
                    ];
                    foreach ($experiences as $exp) {
                        echo "
                        <div class='col-md-4 d-flex'>
                            <div class='card mb-3 '>
                                <div class='card-body '>
                                    <h5 class='card-title'>{$exp[0]}</h5>
                                    <p class='card-text'>{$exp[1]}</p>
                                    <p class='card-text'><small class='text-muted'>{$exp[2]}</small></p>
                                </div>
                            </div>
                        </div>";
                    }
                    ?>
                </div>

                <!-- Education Section -->
                <h4>Education</h4>
                <div class="row">
                    <?php
                    $education = [
                        ["BATANGAS STATE UNIVERSITY", "BS in Information Technology", "2022 - Present"],
                        ["LCC SILVERCREST", "Science, Technology, Engineering, and Mathematics (STEM)", "2020 - 2022"],
                        ["LCC SILVERCREST", "Junior High School", "2016 - 2020"],
                        ["EAST REMBO ELEMENTARY SCHOOL", "Elementary School", "2010 - 2016"],
                    ];
                    foreach ($education as $edu) {
                        echo "
                        <div class='col-md-6'>
                            <div class='card mb-3'>
                                <div class='card-body'>
                                    <h5 class='card-title'>{$edu[0]}</h5>
                                    <p class='card-text'>{$edu[1]}</p>
                                    <p class='card-text'><small class='text-muted'>{$edu[2]}</small></p>
                                </div>
                            </div>
                        </div>";
                    }
                    ?>
                </div>
            </div>
   

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
