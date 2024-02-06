
<?php
#$name = "Jonas";
#$nName ='Jonas';
// echo 'Vartotojo vardas yra ' .$name;//output string
#$output = "<div>";
#$output .= "<p>$name</p>";
#$output .= "</div>";

#echo $output;

#echo "filmo pavadinimas : \"marco\"";

#$eilute = "adadad ddda dadsdas ";
#$count = 12;
#$price = 125.56;
#echo strlen($eilute);
#echo trim($eilute);
#echo strtoupper($eilute);
#echo strtolower($eilute);
#echo ucfirst($eilute);
#echo str_replace("adadad","ungabunga", $eilute);
#echo substr($eilute, 1,6);
#echo trim($eilute);

#$count *= $price;
#echo $count;
#var_dump($price);


#cho $count++;
#echo "<br>$count";

#$users = [
#    100=>'Tadas',
#    333=>'ieva',
#    1223=>'Karolis'
#];
#echo($users[333]);



#for($i=0;$i<count($products);$i++){
 #  echo "$products=>[$i] <br>";
#}

#foreach($products as $categories=>$productData){
   
 #   echo "<strong>$categories</strong> : <br>";
  #  foreach($productData as $product){
   #     echo ucfirst($product)."<br>";
    #}
    
#}

require_once "data/products.php";
require_once "data/destinations.php";
require_once "view/index.view.php";


$users = [
    'Developers' => [
        12345 => [
            'id' => 12345,
            'firstName' => 'Jonas',
            'lastName' => 'Jonaitis',
            'status' => true
        ],
        54321 => [
            'id' => 54321,
            'firstName' => 'Laura',
            'lastName' => 'Smith',
            'status' => true
        ],
        67890 => [
            'id' => 67890,
            'firstName' => 'Michael',
            'lastName' => 'Johnson',
            'status' => true
        ],
        12346 => [
            'id' => 12346,
            'firstName' => 'John',
            'lastName' => 'Doe',
            'status' => true
        ],
        54322 => [
            'id' => 54322,
            'firstName' => 'Emily',
            'lastName' => 'Brown',
            'status' => true
        ]
    ],
    'Accountants' => [
        11111 => [
            'id' => 11111,
            'firstName' => 'David',
            'lastName' => 'Miller',
            'status' => true
        ],
        22222 => [
            'id' => 22222,
            'firstName' => 'Maria',
            'lastName' => 'Gonzalez',
            'status' => true
        ],
        33333 => [
            'id' => 33333,
            'firstName' => 'Ahmed',
            'lastName' => 'Khan',
            'status' => true
        ],
        44444 => [
            'id' => 44444,
            'firstName' => 'Anna',
            'lastName' => 'Wong',
            'status' => true
        ],
        55555 => [
            'id' => 55555,
            'firstName' => 'Sara',
            'lastName' => 'Lee',
            'status' => true
        ]
    ],
    'Workers' => [
        66666 => [
            'id' => 66666,
            'firstName' => 'James',
            'lastName' => 'Taylor',
            'status' => true
        ],
        77777 => [
            'id' => 77777,
            'firstName' => 'Luis',
            'lastName' => 'Martinez',
            'status' => true
        ],
        88888 => [
            'id' => 88888,
            'firstName' => 'Sophie',
            'lastName' => 'Lambert',
            'status' => true
        ],
        99999 => [
            'id' => 99999,
            'firstName' => 'Mohammed',
            'lastName' => 'Ali',
            'status' => true
        ],
        101010 => [
            'id' => 101010,
            'firstName' => 'Emma',
            'lastName' => 'Wilson',
            'status' => true
        ]
    ]
];
 
// Accessing individual user:
##echo $users['Developers'][12345]['firstName']; // Outputs: Jonas
#echo $users['Workers'][66666]['firstName']; 
#echo $users['Accountants'][11111]['firstName']; 

#foreach($users as $categories=>$userData){
 #  echo "<strong>$categories</strong> : <br>";
  # foreach($userData as $user){
   # if(strlen($user['firstName']>=6));
    #   echo ($user['firstName']) .' '. ($user['lastName'])."<br>";
       
    #}
#}