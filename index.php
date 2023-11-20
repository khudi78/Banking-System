<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- external css bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"> 
    <link rel="stylesheet" href="index.css">
    <!-- <link href="./css/style.css" rel="text/stylesheet"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Money Bank</title>
</head>
<body>

  <!-- header with connection and sql code -->
  <?php require_once './include/header.php' ?>


     <div class="bg-image"></div>
     <div class="bg-text">
      <a href="customer.php">
      <div class="box first">
           <img src="save-money.png" alt="" class="img">
           <div class="in-box">
           <span class="head">View All Customers</span>
           <p class="para">Lists are added ,Customers are the trust.</p>
           </div>
           
        </div>
      </a>
        
        <a href="transaction.php">
        <div class="box second">
           <img src="audit.png" alt="" class="img">
           <div class="in-box">
           <span class="head">View All Transactions</span>
           <p class="para">Transferring Smiles, One Transaction at a Time.</p>
           </div>
           </div>
        </a>
      
          
       

     </div>

        <!-- middle container start-->
       

            <section id="about" class="about">
      <div class="container">

        <div class="section-title " >
          <h1 class="text-center my-5">About Us</h1>
        </div>

        <div class="row content">
          <div class="col-lg-6 " >
            <img class="rounded img-fluid float-left" src="https://img.freepik.com/premium-vector/business-people-having-meeting-sharing-idea_218660-941.jpg?w=2000" />
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 " >
            <p>
             
             Your Trust Bank is a cutting-edge financial institution that has established itself as a beacon of reliability and excellence in the 
             banking sector. As a customer-centric platform, Your Trust Bank is dedicated to fostering trust and delivering unparalleled financial
              services to its clients.
              </p><p>
             At Your Trust Bank, we prioritize security, transparency, and innovation. Our website provides a seamless and user-friendly interface,
              allowing customers to effortlessly manage their finances, conduct transactions, and explore a wide range of banking products. From
               personal and business accounts to loans and investments, Your Trust Bank offers a comprehensive suite of services tailored to meet
                the diverse needs of our valued customers.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section>
             
            </div>
          </div>
        <!-- middle container end -->

         <!-- footer  -->
        <?php require_once './include/footer.php' ?>  
</body>

      <!-- bootstrap js script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</html>