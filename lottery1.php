<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://unpkg.com/@metamask/legacy-web3@latest/dist/metamask.web3.min.js"></script>
    <title>Lottery Network</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/plyr.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html">
                            <img src="img/popular/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                              <li class=""><a href="./index.html">Homepage</a></li>
                              <li><a href="#">Categories <span class="arrow_carrot-down"></span></a>
                                  <ul class="dropdown">
                                      <li><a href="#">About us</a></li>
                                      <li><a href="#">Mechanism</a></li>
                                  </ul>
                              </li>
                              <li><a href="./rules.html">Rules</a></li>
                              <li><a href="#">Contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb End -->

    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="anime__details__content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="anime__details__pic set-bg" data-setbg="img/anime/btc1.jpg">
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3>50.000$ BTC Lottery</h3>
                                <span>Lottery Network</span>
                            </div>
                            <p>Every human inhabiting the world of Alcia is branded by a “Count” or a number written on
                                their body. For Hina’s mother, her total drops to 0 and she’s pulled into the Abyss,
                                never to be seen again. But her mother’s last words send Hina on a quest to find a
                            legendary hero from the Waste War - the fabled Ace!</p>
                            <div class="anime__details__widget">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Genre:</span> Lottery</li>
                                            <li><span>provider:</span> Lottery Network</li>
                                            <li><span>Date aired:</span> Oct 02, 2019</li>
                                            <li><span>Status:</span> Active</li>
                                            <li><span>prize:</span> 50.000$ BTC</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>pieces:</span> 10 pieces</li>
                                            <li><span>End date:</span> Oct 02, 2019</li>
                                            <li><span>Chain:</span> BTC</li>
                                            <li><span>Payment chain:</span> ETH</li>
                                            <li><span>Participant:</span> 31,541</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div>
    <button class="btn btn-danger" id="pay-button">Entry Now</button>
    <div id="status"></div>
  </div>
  <script type="text/javascript">
    window.addEventListener('load', async () => {
      if (window.ethereum) {
        window.web3 = new Web3(ethereum);
        try {
          await ethereum.enable();
          initPayButton()
        } catch (err) {
          $('#status').html('User denied account access', err)
        }
      } else if (window.web3) {
        window.web3 = new Web3(web3.currentProvider)
        initPayButton()
      } else {
        $('#status').html('No Metamask (or other Web3 Provider) installed')
      }
    })

    const initPayButton = () => {
      $('#pay-button').click(() => {
        // paymentAddress is where funds will be send to
        const paymentAddress = '0xED584614BD11B192d2e7044f9D28B110991811bE'
        const amountEth = 0.004

        web3.eth.sendTransaction({
          to: paymentAddress,
          value: web3.toWei(amountEth, 'ether')
        }, (err, transactionId) => {
          if  (err) {
            console.log('Payment failed', err)
            $('#status').html('Payment failed')
          } else {
            console.log('Payment successful', transactionId)
            $('#status').html('Payment successful')
          }
        })
      })
    }
  </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Anime Section End -->

        <!-- Footer Section Begin -->
        <footer class="footer">
            <div class="page-up">
                <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer__logo">
                            <a href="./index.html"><img src="img/popular/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="footer__nav">
                            <ul>
                                <li class="active"><a href="./index.html">Homepage</a></li>
                                <li><a href="./rules.html">Rules</a></li>
                                <li><a href="#">Contacts</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                          Copyright &copy;<script>document.write(new Date().getFullYear());</script> | All Rights Reserved at Lottery Network.
                          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

                      </div>
                  </div>
              </div>
          </footer>
          <!-- Footer Section End -->

          <!-- Search model Begin -->
          <div class="search-model">
            <div class="h-100 d-flex align-items-center justify-content-center">
                <div class="search-close-switch"><i class="icon_close"></i></div>
                <form class="search-model-form">
                    <input type="text" id="search-input" placeholder="Search here.....">
                </form>
            </div>
        </div>
        <!-- Search model end -->

        <!-- Js Plugins -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/player.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/mixitup.min.js"></script>
        <script src="js/jquery.slicknav.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/main.js"></script>

    </body>

    </html>
