<?php
  include "human.php"; 
  $nguyen = new human();
  $nguyen->set_name('Nguyễn Văn Nguyên');
  $nguyen->set_address('tòa nhà detech số 107 nguyễn phong sắc');
  $experience = [
      [
        "time"=>"2016-2019", 
        "name"=>"CÔNG TY TOYODENSO", 
        "conten"=>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, It is a long established fact that a reader will be distracted by the readable content of a page"
      ],
      [
        "time"=>"2016-2019", 
        "name"=>"CÔNG TY TOYODENSO", 
        "conten"=>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, It is a long established fact that a reader will be distracted by the readable content of a page"
      ],
      [
        "time"=>"2016-2019", 
        "name"=>"CÔNG TY TOYODENSO", 
        "conten"=>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, It is a long established fact that a reader will be distracted by the readable content of a page"
      ]
    ];
  $nguyen->set_experience($experience);
  $education = [
    [
      "time" => "2014-2018",
      "school" => "CĐ xây dựng công trình đô thị",
      "conten" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of lettersabc It is a long established fact that a reader will be distracted by the readable content of a page It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that"
    ],
    [
      "time" => "2014-2018",
      "school" => "CĐ xây dựng công trình đô thị",
      "conten" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of lettersabc It is a long established fact that a reader will be distracted by the readable content of a page It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that"
    ],
    [
      "time"=>"2014-2018",
      "school"=>"CĐ xây dựng công trình đô thị",
      "conten"=>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of lettersabc It is a long established fact that a reader will be distracted by the readable content of a page It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that"
    ]
  ];
  $nguyen->set_education($education);
  $contace_nguyen = array(
    'phone1'=>'0388743862',
    'phone2'=>'0388743862',
    'email1'=>'n.v.nguyen@wbs-v.biz',
    'addess'=>'nguyễn phong sắc,tòa nhà detech'
  );
  $nguyen->set_contace($contace_nguyen);
  $awards = array(
    'employee' => 'Employee of The Month',
    'award1' =>  'Some detail of Award and more',
    'award2' =>  'Some detail of Award and more',
    'coder' => 'Best Coder'
  );
  $nguyen->set_awards($awards);
  $references = [
   [ 
     'name' => 'Name of Refrance',
     'phone' => 'Phone: +123456789',
     'email' => 'Email: ref@mail.com'
   ],
   [ 
     'name' => 'Name of Refrance',
     'phone' => 'Phone: +123456789',
     'email' => 'Email: ref@mail.com'
    ]
  ];
  $nguyen->set_references($references);
  $nguyen->set_profile('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, It is a long established fact that a reader will be distracted by the readable content of a page');
  $skill = [
    [
      "title" => "PHP",
      "width" => "50%"
    ],
    [
      "title" => "HTML/CSS",
      "width" => "40%"
    ],
    [
      "title" => ".NET",
      "width" => "30%"
    ],
    [
      "title" => "MYSQL",
      "width" => "25%"
    ],
    [
      "title" => "PHP",
      "width" => "50%"
    ],
    [
      "title" => "HTML/CSS",
      "width" => "40%"
    ],
    [
      "title" => ".NET",
      "width" => "30%"
    ],
    [
      "title" => "MYSQL",
      "width" => "25%"
    ]
  ];
  $nguyen->set_skill($skill);
?>
<html>
  <head>
    <title>CV công việc</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    </head>
  <body> 
   <div class="q-100">   
    <div class="header">
      <div class="framer-1">
          <img src="anh.jpg" class="rounded-circle float-left border-img " alt="Cinque Terre" width="200" height="150" >
          <div class="word">

           <h2>
              <?php
             echo "" . $nguyen->get_name();
             ?>
           </h2>

            <div class="container">
            <h4 class="font-weight-light">PHP & .NET DEVELOPER</h4>
            </div>
          </div>
      </div>
      <div class="framer-2">
            <p><div class="icon-bar"> <i class="fas fa-phone"></i></div>
              <?php echo $nguyen->get_contace()['phone1'];?></p>
              <?php echo $nguyen->get_contace()['phone2'];?>
              <p><div class="icon-bar"> <i class="far fa-envelope" ></i></div>
              <?php echo $nguyen->get_contace()['email1'];?></p>
              <p><div class="icon-bar"><i class="fas fa-map-marker-alt"></i></div>
              <?php echo $nguyen->get_contace()['addess'];?></p>
      </div>
    </div>
      <div class="content">

          <div class="right">
              <div class="right-0">
              <div class="right-1">
                 <div class="border-1"> <h2>EXPERIENCE</h2></div></div>
                 <div class="right-2">

                  <?php
                    foreach ( $experience as $key => $value ){
                    ?>
                      <div class="right-22">                
                          <div class="word-1"> <P>
                          <?php
                          echo '' . $value['time'];
                          ?>
                          </P>
                          </div>
                      </div>
                      <div class="right-222">
                          <h4><?php
                          echo ''.$value['name'];
                          ?>
                          </h4>
                        <h5>Developer</h5>
                        <p><?php
                        echo ''.$value['conten'];
                        ?>
                        </p>
                      </div>    
                  <?php  } ?>
              </div>  
              <div class="right-3"> </div></div>           
           <div class="right-00">
             <div class="right-5">
                <div class="border-1"><h2>EDUCATION</h2></div></div>
                 <div class="right-6">
                   <?php
                    foreach ( $education as $key => $value ){
                   ?>
                    <div class="right-66">
                        <div class="word-1"> <P>
                        <?php
                        echo ''.$value['time'];
                        ?>
                        </P></div>
                    </div>
                    <div class="right-666">
                      <h4>
                      <?php
                      echo ''.$value['school'];
                      ?>
                      </h4>
                      <h5>Developer</h5>
                      <p>
                      <?php
                      echo ''.$value['conten'];
                      ?>
                      </p>
                  </div>
                    <?php  } ?>
              </div>
            <div class="right-7"> </div>                      
            </div>
          </div>
            <div class="left">
              <div class="left-1">
                    <div class="border-3"> <h2>PROFILE</h2></div>
                    <p>
                    <?php
                    echo "" . $nguyen->get_profile();
                    ?>
                    </p></div>
              <div class="left-2">
                 <div class="border-2"><h2>SKILLS</h2></div>
                    <div class="container">
                      <?php
                        foreach ( $skill as $key => $value ) {
                        ?>
                         <P>
                          <?php
                           echo $value['title'];
                           ?> </P>                         
                           <div class="progress">
                            <div class="progress-bar bg-warning " style =width:<?php
                            echo $value['width'];
                            ?>></div>                                             
                           </div><br>                          
                      <?php } ?>
                    </div>                       
              </div>               
                </div>
              </div>
              </div>
          <div class="footer">
            <div class="footer-1">
              <div class="footer-11">
                <div class="border-1"> <h2>AWARDS </h2></div>
              </div>
              <div class="footer-12">
              
                  <div class="word-1"><h4>
                    <?php
                      echo $nguyen->get_awards()['employee'];
                    ?>
                      </h4>
                        <p>
                        <?php
                        echo $nguyen->get_awards()['award1'];
                        ?>
                        </p>
                        <p>
                        <?php
                        echo $nguyen->get_awards()['award2'];
                        ?>
                  </p></div>
              </div>
              <div class="footer-13">
                  <div class="word-1"> <h4>
                    <?php
                    echo $nguyen->get_awards()['coder'];
                    ?>
                    </h4>
                      <p><?php
                      echo $nguyen->get_awards()['award1'];                   
                      ?></p>
                      <p>
                      <?php
                      echo $nguyen->get_awards()['award1'];
                      ?>
                  </p></div>                 
              </div>
            </div>
            <div class="footer-2">
              <div class="footer-21">            
                  <div class="border-1"> <h2>REFERENCES</h2></div></div>
              
                <div class="footer-22">  
                <?php foreach ( $references as $key => $value ){
                ?>
                      <div class="word-1"><h4>
                        <?php
                        echo ''.$value['name'];
                        ?>
                        </h4>
                          <p>
                          <?php
                          echo ''.$value['phone'];
                          ?>
                          </p>
                          <p>
                          <?php
                          echo ''.$value['email'];
                        ?>
                        </p></div>  
                    </div>
                    <div class="footer-23">                                    
                <?php  } ?>                  
              </div>             
            </div>
          
            <div class="footer-3">
                  <div class="footer-31">
                      <div class="border-2"> <h2>INTEREST </h2></div>
                  </div>
                <div class="footer-32">
                <img src="5.jpg"  class="rounded-circle" alt="Cinque Terre" width="150" height="150">  
                </div>
          </div>  
        </div>
    </div>
  </body>
</html>
