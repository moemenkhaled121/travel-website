
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="css/payment.css">
<body>





<div class="mainscreen">
<a href="home.php">return home</a>

      <div class="card">
        <div class="leftside">
          <img
            src="images/img-9.jpg"
            class="product"
            alt="Shoes"
          />
        </div>
        <div class="rightside">
          <form action="home.php">
            <h1>CheckOut
            <html>
    <head>
        <script src="https://randojs.com/1.0.0.js"></script>
        <script>
            function showRandomNumber(){
                document.getElementById("myNumber").innerHTML = rando(1000, 1590);
            }
        </script>
        <style>
          .inline:{
            display: inline;
          }
          
        </style>
    </head>
    <body onload="showRandomNumber();">
       <div class="inline"> <span id="myNumber"></span><span>$</span></div>
    </body>

            </h1>
            <h2>Payment Information</h2>
            <p>Cardholder Name</p>
            <input type="text" class="inputbox" name="name" required />
            <p>Card Number</p>
            <input type="number" class="inputbox" name="card_number" id="card_number" required />

          
<div class="expcvv">

            <p class="expcvv_text">Expiry</p>
            <input type="date" class="inputbox" name="exp_date" id="exp_date" required />

            <p class="expcvv_text2">CVV</p>
            <input type="password" class="inputbox" name="cvv" id="cvv" required />
        </div>
            <p></p>
            <button type="submit" class="button">CheckOut</button>
          </form>
        </div>
      </div>
    </div>
  


</form>

</form>
</body>
</html>
<script src="js/payment.js"></script>


