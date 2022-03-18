<?php
require_once 'vendor/autoload.php';


$faker = Faker\Factory::create();
$f_arr = [];
$arr_num = 6;

for ($i = 0; $i < $arr_num; $i++) {
    $arr =
        [
            "id" => $i,
            "first_name" => $faker->firstName(),
            "last_name" => $faker->lastName(),
            "age" => $faker->numberBetween(17, 80),
            "address" => $faker->address(),
            "phone_number" => $faker->phoneNumber(),

        ];
    array_push($f_arr, $arr);
};

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faker Test</title>

    <!-- icon link -->
    <link rel="icon" href="https://avatars.githubusercontent.com/u/73137436?s=200&v=4">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font awesome css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- nav bar start -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand ms-auto me-auto" href="#">
                <img src="https://avatars.githubusercontent.com/u/73137436?s=200&v=4" alt="Faker Php" width="30" height="24" class="d-inline-block align-text-top">
                Faker Php Test
            </a>
        </div>
    </nav>
    <!-- nav bar end -->
    <!-- main section start  -->
    <section class=" container ">
        <div class="row d-flex justify-content-center">
            <?php
            foreach ($f_arr as $arr) {
                echo "  <div class=\"card col-5 p-3 m-3\" >
                    <div class=\"card-body\">
                      <h3 class=\"card-title mb-3\"> <i class=\"fa-solid fa-id-card\"></i> {$arr["first_name"]} {$arr["last_name"]}</h3>
                        <p class=\"card-text\"><i class=\"fa-solid fa-id-badge me-1\"></i><b> First Name :</b> {$arr["first_name"]}</p>
                        <p class=\"card-text\"><i class=\"fa-solid fa-id-badge me-1\"></i><b> Last Name :</b> {$arr["last_name"]}</p>
                        <p class=\"card-text\"><i class=\"fa-solid fa-baby-carriage me-1\"></i><b> Age :</b> {$arr["age"]}</p>
                        <p class=\"card-text\"><i class=\"fa-solid fa-location-dot me-1\"></i><b> Address :</b> {$arr["address"]}</p>
                        <p class=\"card-text\"><i class=\"fa-solid fa-mobile-retro me-1\"></i><b>Phone Number :</b> {$arr["phone_number"]}</p>
                        <form action=\"show.php\" method=\"POST\">
                        <input type=\"hidden\" name=\"first_name\" value=\"{$arr["first_name"]}\">
                        <input type=\"hidden\" name=\"last_name\" value=\"{$arr["last_name"]}\">
                        <input type=\"hidden\" name=\"age\" value=\"{$arr["age"]}\">
                        <input type=\"hidden\" name=\"address\" value=\"{$arr["address"]}\">
                        <input type=\"hidden\" name=\"phone_number\" value=\"{$arr["phone_number"]}\">
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"Show More\">
                    </form>
                       
                        
                    </div>
                </div>";
            };

            ?>
        </div>
    </section>
    <!-- main section end  -->
    <!-- footer start -->
    <footer class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand ms-auto me-auto" href="#">
                Made by : Elsayed Hussein
            </a>
        </div>
    </footer>
    <!-- footer end -->

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- font awesome js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/js/all.min.js" integrity="sha512-Cvxz1E4gCrYKQfz6Ne+VoDiiLrbFBvc6BPh4iyKo2/ICdIodfgc5Q9cBjRivfQNUXBCEnQWcEInSXsvlNHY/ZQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>