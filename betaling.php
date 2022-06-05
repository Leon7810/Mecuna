<?php 
session_start();

header('Refresh: 5; URL=confirmation.php');

$number = random_int(0, 1000);

$_SESSION['name'] = $_GET['name'];
$_SESSION['number'] = $_GET['number'];
$_SESSION['email'] = $_GET['email'];
$_SESSION['tickets'] = $_GET['tickets'];
$_SESSION['methode'] = $_GET['methode'];
$_SESSION['uur'] = $_GET['uur'];


?>

<style>
  * {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

html {
  background-color: #fff;
  font-family: "Poppins", sans-serif;
  font-weight: 300;
  font-size: 10px;
}

h3 {
  font-size: 4rem;
  font-weight: 600;
  text-align: center;
}

.payment__container {
  width: 1000px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background: white;
  padding: 5rem 7rem;
  border-radius: 1.25rem;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-evenly;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.25);
}
@media screen and (max-width: 769px) {
  .payment__container {
    width: 650px;
    padding: 3rem 7rem;
  }
}
@media screen and (max-width: 480px) {
  .payment__container {
    width: 350px;
    padding: 2rem 2rem;
  }
}
.payment__container-image {
  width: 100px;
  margin-bottom: 20px;
}
@media screen and (max-width: 480px) {
  .payment__container-image {
    width: 70px;
    margin-bottom: 20px;
  }
}
.payment__container-heading {
  margin-bottom: 20px;
}
@media screen and (max-width: 769px) {
  .payment__container-heading {
    font-size: 3rem;
  }
}
@media screen and (max-width: 480px) {
  .payment__container-heading {
    font-size: 2.3rem;
    margin-bottom: 10px;
  }
}
.payment__container-welcome {
  font-size: 3rem;
  margin-bottom: 10px;
}
@media screen and (max-width: 769px) {
  .payment__container-welcome {
    font-size: 2.5rem;
  }
}
@media screen and (max-width: 480px) {
  .payment__container-welcome {
    font-size: 1.6rem;
    margin-bottom: 5px;
  }
}
.payment__container-cube {
  font-size: 3rem;
  margin-bottom: 20px;
}
@media screen and (max-width: 769px) {
  .payment__container-cube {
    font-size: 2.5rem;
  }
}
@media screen and (max-width: 480px) {
  .payment__container-cube {
    font-size: 1.6rem;
    margin-bottom: 20px;
  }
}
.payment__container-text {
  text-align: center;
  font-size: 2rem;
  font-weight: 400;
  margin-bottom: 20px;
}
@media screen and (max-width: 769px) {
  .payment__container-text {
    font-size: 1.5rem;
  }
}
@media screen and (max-width: 480px) {
  .payment__container-text {
    font-size: 1.2rem;
    margin-bottom: 10px;
  }
}
.payment__container-btn {
  text-decoration: none;
  padding: 1rem 2.5rem;
  background: #ff4568;
  color: #fff;
  font-size: 2.2rem;
  display: inline-block;
  border-radius: 4.5rem;
  font-weight: 400;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.25);
  transition: all 0.15s ease;
}
.payment__container-btn:hover {
  opacity: 0.8;
}
@media screen and (max-width: 769px) {
  .payment__container-btn {
    font-size: 1.6rem;
  }
}
@media screen and (max-width: 480px) {
  .payment__container-btn {
    font-size: 1.4rem;
  }
}

a.disabled {
  pointer-events: none;
  cursor: default;
}
</style>

<div class="payment__container">
  <h3 class="payment__container-heading">Betaling was succesvol!</h3>
  <img class="payment__container-image" src="https://res.cloudinary.com/dmnazxdav/image/upload/v1599736321/tick_hhudfj.svg" alt="Payment SuccesFul"/>
  <h3 class="payment__container-welcome">Mecuna dankt u! &#128522;</h3>
  <p class="payment__container-text">Uw betaling was succesvol en u wordt zometeen doorgestuurd naar een andere pagina.</p>
  <h3 class="payment__container-cube">Uw betalings nummer is <?php echo $number ?></h3>
  <a class="payment__container-btn disabled">U wordt doorgestuurd... <span id="countdown"></span></a>
  
</div>

<script>
var timeleft = 5;
var downloadTimer = setInterval(function(){
  if(timeleft <= 0){
    clearInterval(downloadTimer);
  } else {
    document.getElementById("countdown").innerHTML = timeleft;
  }
  timeleft -= 1;
}, 1000);
</script>