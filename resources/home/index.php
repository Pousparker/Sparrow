<?php
$content='<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="../lib/css/uikit.css" />
    <link rel="stylesheet" href="../lib/css/meCss/localCss.css">
    <link rel="stylesheet" href="lib/css/uikit.css" />
    <link rel="stylesheet" href="lib/css/meCss/localCss.css">
    <!-- UIkit JS -->
    <script src="../lib/js/uikit.min.js"></script>
    <script src="../lib/js/uikit-icons.min.js"></script>
    <script src="lib/js/uikit.min.js"></script>
    <script src="lib/js/uikit-icons.min.js"></script>
    <title>Document</title>
</head>
<body>

<div class="uk-container-expand">
<!--navbar-->
<nav class="uk-container" uk-navbar>
    <div class="uk-navbar-center">

    <div class="uk-navbar-center-left">
        <div>
        <ul class="uk-navbar-nav">
            <li class="uk-active">
                <a href="index" class="uk-button uk-button-text">Home</a>
            </li>
            <li>
                <a href="#" class="uk-button uk-button-text">Teachers</a>
            </li>
        </ul>
        </div>
    </div>
    <a class=" uk-logo" href="#">
        <img src="../img/vector/bird.svg" width="45" height="auto" alt="">
    </a>
    <div class="uk-navbar-center-right">
        <div>
        <ul class="uk-navbar-nav">
            <li>
                <a href="singup/add" class="uk-button uk-button-text">Student</a>
            </li>
            <li>
                    <a href="#" class="uk-button uk-button-text">About</a>
        </ul>
        
    </div>
</div>
</div>
    
<div class="uk-navbar-right uk-margin-top">
        <button class="uk-button uk-button-default " style="border-radius: 20px; border-color: #00c6ff;">
            <a class="uk-link-muted uk-text-primary" href="register">Sing in</a>
        </button>
</div>
</div>
</nav>
    <!--section-->       
    <div class="uk-section-small uk-margin-bottom">
      <div class="uk-container-expand uk-margin-medium-left uk-margin-medium-right">
          <div class="uk-card uk-card-body uk-width-1-1@m"  style=" border-radius: 30px; background-color:#98f0da ;">
              <div>
                  <p class="uk-height-large  uk-flex uk-flex-center uk-flex-middle ">
                 <div class="uk-position-large uk-position-top-left ">

                 <span class="uk-heading-2xlarge uk-margin-large-left uk" style="color: white;">Sparrow</span>

                 <div class="uk-text-capitalize uk-margin-large-top uk-margin-large-left">
                <h2> <span style="color: white;"> Student and teacher survey system</span></h2>
                <div class="uk-margin-large-left">
                <button class="uk-button uk-margin-large-left " style="border-radius: 20px; border-color: #00c6ff;">
                  <a class="uk-link-muted uk-text-primary" href="register">Sing in</a>
                 </button>
                 </div>
                 </div>
                 </div>
                       
                  <div class="uk-position-small uk-position-center-right me-flex me-smallflex ">
                  <div uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
                        <img src="../img/billy.png"   alt="" uk-img> 
                  </div>
                  </div>
                  </div>
              </div>
          </div>
        
        </div>
        </div>              


<section class="uk-section-medium uk-section-muted ">
        <div class="uk-text-left  uk-margin-large-left">
    <h4>Most view</h4>
    </div>
        
<div class="uk-container uk-margin-bottom">
        
    <div class="uk-child-width-1-4@m" uk-grid uk-grid uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 400; repeat: true">
        <!--part1-->
        
        <div>
          <div class="uk-card uk-card-default me-radus">
              <div class="uk-card-media-top">
                  <img src="../img/1.jpg" alt="" class="me-topradus">
              </div>
              <div class="uk-card-body">
                  <div class="uk-grid-small uk-flex-middle" uk-grid>
                      <div class="uk-width-auto">
                          <img class="uk-border-circle" width="40" height="40" src="../img/vector/arab-woman.svg">
                      </div>
                      <div class="uk-width-expand">
                          <h3 class="uk-card-title uk-margin-remove-bottom">Tara</h3>
                          <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">December 25, 2019</time></p>
                      </div>
                  </div>
              </div>
              <div class="uk-card-footer">
                  <a href="#" class="uk-button uk-button-text">Read more</a>
              </div>
              </div>
              </div>
                        
              <div>
              <div class="uk-card uk-card-default me-radus ">
                  <div class="uk-card-media-top">
                      <img src="../img/2.jpg" alt="" class="me-topradus">
                  </div>
                  <div class="uk-card-body">
                      <div class="uk-grid-small uk-flex-middle" uk-grid>
                          <div class="uk-width-auto">
                              <img class="uk-border-circle" width="40" height="40" src="../img/vector/man (1).svg">
                          </div>
                          <div class="uk-width-expand">
                              <h3 class="uk-card-title uk-margin-remove-bottom">Arash</h3>
                              <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">December 22, 2019</time></p>
                          </div>
                      </div>
                  </div>
                  <div class="uk-card-footer">
                      <a href="#" class="uk-button uk-button-text">Read more</a>
                  </div>
              </div>
              </div>

              <div>
                    <div class="uk-card uk-card-default me-radus ">
                        <div class="uk-card-media-top">
                            <img src="../img/3.jpg" alt="" class="me-topradus">
                        </div>
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-border-circle" width="40" height="40" src="../img/vector/man.svg">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">Aira</h3>
                                    <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">December 27, 2019</time></p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-footer">
                            <a href="#" class="uk-button uk-button-text">Read more</a>
                        </div>
                    </div>
              </div>

              <div>
                    <div class="uk-card uk-card-default me-radus ">
                        <div class="uk-card-media-top">
                            <img src="../img/4.jpg" alt="" class="me-topradus">
                        </div>
                        <div class="uk-card-body">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-border-circle" width="40" height="40" src="../img/vector/doctor.svg">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">Shahab</h3>
                                    <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">december 24, 2019</time></p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-footer">
                            <a href="#" class="uk-button uk-button-text">Read more</a>
                        </div>
                    </div>
              </div>

</div>
</div>
</section>

<!-- <hr class="uk-divider-icon"> -->
<footer class="uk-margin-top">
    
    
    <div class=" me-blue-gradient">       
        <div>
                <div class="uk-height-small  uk-flex uk-flex-center uk-flex-middle">Footer
                          </div>
                        </div>
                </div>
            </div>       
        </div>
         
    
</footer>




        
</div>

</body>
</html>';
$this->home($content);
