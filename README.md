# php-oop-homework

## Demo

[Live Demo !](https://faker-php-test.herokuapp.com/index.php)

## use Faker php

```php
require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();

```

## card numder from usre default 6

```php
if (!empty($_POST)) {

    $arr_num =  $_POST['quantity'];
} else {
    $arr_num = 6;
}

```

## generate random data to array

```php

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

```


```

## put data on the page

```php
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

```

## Get Card Number from Usre

```php
            <form action="./index.php" method="POST">
                <div class="row d-flex justify-content-start align-items-center">
                    <label for="cardNum" class="col-4 col-form-label navbar-brand">Card Number(1-12)</label>
                    <div class="col-1 ms-2 me-5">
                        <input type="number" id="cardNum" name="quantity" min="1" max="12" value="<?php echo "$arr_num"; ?>">
                    </div>
                    <input class="btn btn-primary col-2 ms-4" type="submit" value="Go">

                </div>
            </form>

```
