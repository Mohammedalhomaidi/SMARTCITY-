
  <?php include ("include/Connection.php"); include ("include/header.php"); ?>
 <style>
        .arrow-line-container {
             position: relative;
        }
        .align-items-stretch .content {
            background:none ; 
        }
    .text-center .more-btn {
               background: var(--bs-info) ! important;
                  width: 250px;
                 height: 50px;
                 font-weight: 600;
        }
    
        .arrow-line-container::before {
               content: '';
               position: absolute;
               top: -41%;
              bottom: -40%;
              left: 39%;
            border-left: 4px solid #fff;
            transform: translateX(-50%)

        }

        .arrow-line-container::after {
               content: '';
                position: absolute;
                bottom: -49%;
                left: 39%;
                border-left: 10px solid transparent;
                border-right: 10px solid transparent;
                border-top: 15px solid #fff;
               transform: translateX(-50%)
        } 
        #main{
            background: url(./assets/img/addinfo.jpg) top center;
             background-size: cover;
             height: 546px;
        }
    </style>
  <main id="main">

<section id="add_infor" class="why-us" style="margin-top: 48px;">

     
    <div class="row">
      <div class="col-lg-12">
              <div class="text-center">
              <h1 style="color: var(--bs-gray-200);font-weight: 600;padding:10px;">additional information</h1>
              </div><br><br>
       
           <div class="row">
             <div class="col-lg-4 d-flex align-items-stretch arrow-line-container"> <div class="content"></div></div>
             <div class="col-lg-4 d-flex align-items-stretch arrow-line-container"> <div class="content"></div></div>
             <div class="col-lg-4 d-flex align-items-stretch arrow-line-container"> <div class="content"></div></div>
          </div>
       </div>
       <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-4 d-flex align-items-stretch">
                  <div class="content">
                        <div class="text-center">
                           <a href="#" class="text-center more-btn">CLICK ON A VIDEO </a>
                        </div>
                  </div>
               </div>
              <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="content">
                        <div class="text-center">
                            <a href="#" class="more-btn">CLICK ON IMAGES</a>
                      </div>
                    </div>
              </div>
              <div class="col-lg-4 d-flex align-items-stretch ">
                     <div class="content"> 
                          <div class="text-center">
                             <a href="#" class="more-btn" style="">CLICK ON THE LINKS</a>
                          </div>    
                      </div>
               </div>
        </div>
    </div>
    
 </section>
 
  

<br><br>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<?php include ("include/footer.php");?>

