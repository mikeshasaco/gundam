@extends('layouts.master')
@section('content')


<style>
    .header{
  background-image: url('headshot.png');
  /* animation: holoCard 15s ease infinite; */
  background-repeat: no-repeat;
  background-position: center;
      height: auto;
      width: auto;
      /* animation: holoCard 15s ease infinite; */
    }

    .header:after{
        opacity: 1;
  background-image: url("https://media.giphy.com/media/3o7TKoWXm3okO1kgHC/giphy.gif");
  background-position: center;
  background-size: 160%;
  z-index: 2;
  animation: holoSparkle 15s ease infinite both;
  filter: brightness(1);
  transition: filter 0.5s ease;
    }


    /* FAQ box */
.question-title h3{
    font-size: 24px;
    background-color: rgba(0, 0, 0, 0.6);
    color: #fff;
    padding: 15px;
    margin: 0;
    cursor: pointer;
    font-family: 'Oswald', sans-serif;
    letter-spacing: 2px;
    position: relative;
}

.question-title h3:after{
    content: '+';
    position: absolute;
    right: 20px;
    font-size: 20px;
    top: 50%;
    transform: translateY(-50%);
}

.question-title.active h3:after{
    content: '-';
}

.content-main{
    background-color: #fff;
    display: none;
}
.content-inner{
    padding: 5%;
}
.content-inner p {
    font-size: 24px;
}
.content-main *{
    margin-top: 0;
    line-height: 1.5;
}
.question-title{
    border-bottom: 1px solid #fff;
}


    
/* .card {
  
  --color1: rgb(0, 231, 255);
  --color2: rgb(255, 0, 231);
  width: 295px;
  height: 276px;
  border-radius: 98px !important;
  background-color: black;
  background-size: 100%;
  background-repeat: no-repeat;
  background-position: center;
  border-radius: 5% / 3.5%;
  box-shadow: -13px -13px 13px -15px var(--color1), 
    13px 13px 13px -15px var(--color2), 
    0 0 4px 2px rgba(255,255,255,0.5),
    0 35px 25px -15px rgba(0, 0, 0, 0.3);
  position: relative;
  overflow: hidden;
  display: block;
  vertical-align: middle;
  margin: 20px 10px;
  transform-origin: center;
  z-index: 10;
  overflow: hidden;
  transform: translate3d(0,0,-1px); 
} */



.card.active:before {
  opacity: 1;
  animation: none;
  transition: none;
  background-image: linear-gradient(
    115deg,
    transparent 30%,
    var(--color1) 48%,
    var(--color2) 53%,
    transparent 70%
  );
  filter: opacity(0.66);
  mix-blend-mode: screen;
}

.card.active:before,
.card.active:after {
  animation: none;  
}
.card.active:after {
  filter: brightness(2.5);
  mix-blend-mode: screen;
}

.demo .card:nth-of-type(1),
.demo .card:nth-of-type(2),
.demo .card:nth-of-type(3) {
  width: 124px;
  height: 170px;
  box-shadow: 0 0 1px 1px rgba(white,0.4), 0 25px 15px -10px rgba(0, 0, 0, 0.5);
  animation: none;
}

.demo .card:nth-of-type(1),
.demo .card:nth-of-type(2),
.demo .card:nth-of-type(3) {
  &:before, &:after {
    animation: none;
    opacity: 1;
  } 
}
.demo .card:nth-of-type(1) {
  &:before, &:after { display: none; }
}
.demo .card:nth-of-type(2) {
  background: none;
  &:before { display: none; }
}
.demo .card:nth-of-type(3) {
  background: none;
  &:before { background-position: center; }
  &:after { display: none; }
}

.operator {
  display: inline-block;
  vertical-align: middle;
  font-size: 45px;
}

@keyframes holoSparkle {
  0%, 5%, 100% { opacity: 0.2; background-position: 50% 50%; }
  33% { opacity: 1; background-position: 40% 40%; filter: brightness(2); }
  45% { opacity: 0.4; }
  66% { opacity: 1; background-position: 60% 60%; filter: brightness(2); }
}

@keyframes holoGradient {
  0%, 100% {
    opacity: 0.05;
    background-position: 50% 50%;
  }
  33% {
    background-position: 100% 100%;
    opacity: .66;
  }
  66% {
    background-position: 0% 0%;
    opacity: .66;
  }
}

@keyframes holoCard {
  0%, 100% {
    transform: rotateZ(0deg) rotateX(0deg) rotateY(0deg);
  }
  33% {
    transform: rotateZ(-10deg) rotateX(20deg) rotateY(-12deg);
  }
  66% {
    transform: rotateZ(10deg) rotateX(-20deg) rotateY(12deg);
  }
}



.demo,
.cards { 
  display: flex;
  align-items: center;
  justify-content: center;
  perspective: 2000px;
  position: relative;
  z-index: 1;
  transform: translate3d(0.1px, 0.1px, 0.1px )
}

.cards .card {
  &:nth-child(2) {
    &, &:before, &:after {
      animation-delay: 0.2s;
    }
  }
  &:nth-child(3) {
    &, &:before, &:after {
      animation-delay: 0.4s;
    }
  }
}

    
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #000000;
  padding: 8px;
    background-color: #000000;
    color:white;

}

#customers tr:nth-child(even){background-color: #000000;}


#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #000000;
  color: white;
}

.telegramimage{
    height: 45px !important;
    width:  40px !important;
}

.twitterimage{
    height: 45px !important;
    width:  40px !important;
}




    /* FAQ box */
    .question-title h3{
    font-size: 24px;
    background-color: rgba(0, 0, 0, 0.6);
    color: #fff;
    padding: 15px;
    margin: 0;
    cursor: pointer;
    font-family: 'Oswald', sans-serif;
    letter-spacing: 2px;
    position: relative;
}

.question-title h3:after{
    content: '+';
    position: absolute;
    right: 20px;
    font-size: 20px;
    top: 50%;
    transform: translateY(-50%);
}

.question-title.active h3:after{
    content: '-';
}

.content-main{
    background-color: #fff;
    display: none;
}
.content-inner{
    padding: 5%;
}
.content-inner p {
    font-size: 24px;
}
.content-main *{
    margin-top: 0;
    line-height: 1.5;
}
.question-title{
    border-bottom: 1px solid #fff;
}



</style>


    <!-- Header -->
    <header id="header" class="header" style="background-color:white;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h1 class="h1-large" style="color:black;font-family: 'Permanent Marker', cursive;">Gundam (ATH) Token</h1>
                        <p class="p-large" style="color:black; font-family: 'Permanent Marker', cursive">Gundam ATH ($GUNDATH) is a fully decentralized, peer-to-peer digital currency, owned in whole by its community with instant rewards for holders. </p>
                        <a href="https://t.me/GundamATH" target="_blank"><img  class="telegramimage"  src="images/telegram.png"  alt=""></a>
                        <a href="https://twitter.com/FinanceGundam" target="_blank"><img  class="twitterimage"  src="images/twitter.png"  alt=""></a>
                        <br>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="gundam1.png" style="animation: holoCard 15s ease infinite;" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->

     
    <!-- Pricing -->
    <div id="pricing" class="cards-2" style="background-color:white; margin-top: -100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">RoadMap</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card-->
                    <div class="card" style="background-color:white;">
                        <div class="card-body">
                        <div class="card-image">
                            <img class="img-fluid" style="height:30px;" src="images/ethereum.png" alt="alternative">
                        </div>
                            <ul class="list-unstyled li-space-lg">
                           
                                <li class="media">
                                    <i class="fas fa-chevron-right"></i><div class="media-body" style="color:black;font-family: 'Permanent Marker', cursive;;">Rewards are distributed to holders automatically and in real-time. With every transaction (buy or sell), 10% of the transaction value is distributed to holders. </div>
                                </li>
                             
                            </ul>
                         
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                    <!-- Card-->
                    <div class="card" style="background:white;">
                        <div class="card-body">
                        <div class="card-image">
                            <img class="img-fluid" style="height:30px;" src="images/gundamflaticon.png" alt="alternative">
                        </div>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body" style="color:black;font-family: 'Permanent Marker', cursive;">We will be making our own decentralized exchange where our holders can buy or swap their tokens.</div>
                                </li>
                              
                            </ul>
                           
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                    <!-- Card-->
                    <div class="card" style="background:white;">
                        <div class="card-body">
                        <div class="card-image">
                            <img class="img-fluid" src="images/nft.png" style="height:30px;"  alt="alternative">
                        </div>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body" style="color:black;font-family: 'Permanent Marker', cursive;">We are releasing 30 Unique Gundam Wings NFT's that we will be auctioning for our holders.</div>
                                </li>
                           
                            </ul>
                           
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of pricing -->

    <!-- Details 1 -->
    <div id="details" class="basic-2" style="background-color:white;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <h2 style="color:black; font-family: 'Permanent Marker', cursive;">Presale NFT!</h2>
                        <ul>
                            <li style="color:black; font-family: 'Permanent Marker', cursive;">Particpate in The Presale Earn Free NFT!</li>
                            <li style="color:black; font-family: 'Permanent Marker', cursive;">Once you purchase your tokens receive NFT: Tron </li>
                            <li style="color:black; font-family: 'Permanent Marker', cursive;">First NFT in the set only presale buyers can recieve Tron</li>

                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <div class="image-container">
                    <img class="img-fluid" src="gundamwingsO.gif" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 1 -->



   

    <!-- Details 2 -->
    <div class="basic-3" style="background-color:white;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="image-container">
                    <img class="img-fluid" src="gundamhead.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-5">
                    <div class="text-container">
                        <h2 style="color:black;font-family: 'Permanent Marker', cursive; ">Tokenomics</h2>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-chevron-right"></i>
                                <div class="media-body" style="color:black; font-family: 'Permanent Marker', cursive;" >1,000,000,000,000,000 Total Supply</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-chevron-right"></i>
                                <div class="media-body" style="color:black; font-family: 'Permanent Marker', cursive;" >10% Redistribution Ethereum To Community Holders. <br>  Ethereum will be distrbuted every 60 min to holders</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-chevron-right"></i>
                                <div class="media-body" style="color:black; font-family: 'Permanent Marker', cursive;" >NO DEV Team Wallet </div>
                            </li>
                            <li class="media">
                                <i class="fas fa-chevron-right"></i>
                                <div class="media-body" style="color:black; font-family: 'Permanent Marker', cursive;" >2% To Liqudity pool </div>
                            </li>

                            <li>
                            <div class="media-body" style="color:black; font-family: 'Permanent Marker', cursive; " >50% of the total supply will be burned before launch </div>

                            </li>
                        </ul>
  
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-3 -->
    <!-- end of details 2 -->


    
    <!-- Pricing -->
    <div id="pricing" class="cards-2" style="background-color:white;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">RoadMap</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card-->
                    <div class="card" style="background-color:white;">
                        <div class="card-body">
                            <div class="card-title" style="color:black;font-family: 'Permanent Marker', cursive;">Phase 1</div>
                            <ul class="list-unstyled li-space-lg">
                           
                                <li class="media">
                                    <i class="fas fa-chevron-right"></i><div class="media-body" style="color:black;font-family: 'Permanent Marker', cursive;;">Release 1st Edition  NFT's </div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-chevron-right"></i><div class="media-body" style="color:black;font-family: 'Permanent Marker', cursive;;">1000 Holders</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-chevron-right"></i><div class="media-body" style="color:black;font-family: 'Permanent Marker', cursive;;">2,000 Telegram Members</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-chevron-right"></i><div class="media-body" style="color:black;font-family: 'Permanent Marker', cursive;;">1 Million MarketCap</div>
                                </li>

                                <li class="media">
                                    <i class="fas fa-chevron-right"></i><div class="media-body" style="color:black;font-family: 'Permanent Marker', cursive;;">Marketing Campaign</div>
                                </li>
                            </ul>
                         
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                    <!-- Card-->
                    <div class="card" style="background:white;">
                        <div class="card-body">
                            <div class="card-title" style="color:black;font-family: 'Permanent Marker', cursive;">Phase 2</div>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body" style="color:black;font-family: 'Permanent Marker', cursive;">Release 2nd Edition  NFT's</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-chevron-right"></i><div class="media-body" style="color:black;font-family: 'Permanent Marker', cursive;">5,000 Holders</div>
                                </li>
                                <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body" style="color:black;font-family: 'Permanent Marker', cursive;">10,000 Telegram Members</div>
                                </li>
                                <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body" style="color:black;font-family: 'Permanent Marker', cursive;">5 Million MarketCap</div>
                                </li>

                                <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body" style="color:black;font-family: 'Permanent Marker', cursive;">Coingecko and CoinMarketcap</div>
                                </li>
                            </ul>
                           
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                    <!-- Card-->
                    <div class="card" style="background:white;">
                        <div class="card-body">
                            <div class="card-title" style="color:black;font-family: 'Permanent Marker', cursive;">Phase 3</div>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body" style="color:black;font-family: 'Permanent Marker', cursive;">Release NFT's Battles</div>
                                </li>
                                <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body" style="color:black;font-family: 'Permanent Marker', cursive;">10,000 Holders</div>
                                </li>
                                <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body" style="color:black;font-family: 'Permanent Marker', cursive;">15,000 Telegram Members</div>
                                </li>
                                <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body" style="color:black;font-family: 'Permanent Marker', cursive;"> 8 Million MarketCap</div>
                                </li>
                                <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body" style="color:black;font-family: 'Permanent Marker', cursive;"> Cex and Dex </div>
                                </li>
                            </ul>
                           
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of pricing -->






<section id="Merchant-help"  style="padding-top: 100px; padding-bottom:100px; background:white; " >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="vouch-merchant-customerh2" style="text-align: center; padding-bottom:80px; font-size: 60px; color:black; font-family: 'Permanent Marker', cursive;">FAQ</h2>

                    <div class="question-title">
                        <h3 style="color:white;font-family: 'Permanent Marker', cursive;">  What is GUNDAM ATH ($GUNDATH) Token? </h3>
                        <div class="content-main">
                            <div class="content-inner">
                                <p style="color:black;font-family: 'Permanent Marker', cursive;"> Gundam (ATH), is a fully decentralized, peer-to-peer digital currency, owned in whole by its community with instant rewards for holders.</p>
                            </div>

                        </div>

                    </div>

                   

                    <!-- <div class="question-title">
                        <h3 style="font-family: 'Creepster', cursive; color:red; font-size:22px;">          Do you have marketing planned? </h3>
                        <div class="content-main">
                            <div class="content-inner">
                                <p>
                                     Yes please see our Marketing Roadmap above!
                                </p>
                            </div>

                        </div>

                    </div> -->

                    <div class="question-title">
                        <h3 style="color:white;font-family: 'Permanent Marker', cursive;"> How can i join the Telegram?</h3>
                        <div class="content-main">
                            <div class="content-inner">
                                <p>
                                        <a href="https://t.me/GundamATH" target="_blank">Click Here For Telegram</a>                                    
                                </p>
                            </div>

                        </div>

                    </div>

                        <div class="question-title">
                        <h3 style="color:white;font-family: 'Permanent Marker', cursive;"> How can i follow us on Twitter?</h3>
                        <div class="content-main">
                            <div class="content-inner">
                                <p>
                                        <a href="https://twitter.com/FinanceGundam" target="_blank">Click Here For Twitter</a>                                    
                                </p>
                            </div>

                        </div>

                    </div>

                

                    <!-- <div class="question-title">
                        <h3 style="font-family: 'Creepster', cursive; color:red;font-size:22px;"> Contract Code</h3>
                        <div class="content-main">
                            <div class="content-inner">
                                <h2>0xc4f976161e0ac8a98445374927a496f03faa3deb</h2>
                            </div>

                        </div>

                    </div> -->

                    

                    

                    <!-- <div class="question-title">
                        <h3 style="font-family: 'Creepster', cursive; color:red;font-size:22px;"> Presale Information</h3>
                        <div class="content-main">
                            <div class="content-inner">
                                <p>
                                Read Instructions above if you have anymore questions join <a href="https://t.me/joinchat/uPVuU0aEFUpjMjNh" style="color:red;" target="_blank">Telegram</a>   and we will be happy to help.
                              </p>
                            </div>

                        </div>

                    </div>

                    <div class="question-title">
                        <h3 style="font-family: 'Creepster', cursive; color:red;font-size:22px;"> Presale Price</h3>
                        <div class="content-main">
                            <div class="content-inner">
                                <p>
                                Presale is determined by how much Liquidity that we add on launch which is determine by how much token supply 
                                has been given to our holders times the amount of Ethereum that is added to Liquidity.As we get closer to launch and have a 
                                more definitive and precise answer so stay tuned!
                              </p>
                            </div>

                        </div>

                    </div> -->





            </div>

        </div>
    </div>

</section>



@endsection

@section('javascripts')
<script  type="text/javascript">
$(document).ready(function(){
	$('.question-title h3').click(function(){
		$(this).next('.content-main').slideToggle();
		$(this).parent().toggleClass('active');
		$(this).parent().siblings().children('.content-main').slideUp();
		$(this).parent().siblings().removeClass('active');
	});
});
</script>

@endsection