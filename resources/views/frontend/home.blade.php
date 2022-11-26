<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bus ticket System</title>
    <link rel="stylesheet" href="{{url('frontend/assets/css/app.css')}}" />
    <link rel="stylesheet" href="{{url('frontend/plagins/fontawesome-free-6.2.0-web/css/all.min.css')}}" />
  </head>
  <body>
    <section class="homepage">
      <header class="primary-header">
        <div class="container">
          <div class="nav-wraper">
            <a href="index.html" class="brand-logo"><h1>BUS BD</h1></a>
            <nav class="primary-navigation">
              <ul role="list">
                <li><a href="#">Home</a></li>
                <li><a href="#">Bus List</a></li>
                <li><a href="#">Terms and condition</a></li>
                <li><a href="#">Cancel Booking</a></li>
              </ul>
            </nav>
            <div class="option">
              <div class="sign-up-option">
                <button class="btn">Login</button>
                <button class="btn">Sign up</button>
              </div>
              <div class="toggle-btn">
                <i class="toggle-icon fa-solid fa-bars" name="bar"></i>
                <i class="toggle-icon fa-solid fa-close" name="close"></i>
              </div>
            </div>
          </div>
        </div>
      </header>
      <div class="home-content">
        <div class="container">
          <div class="home-content-wraper">
            <div class="home-left">
              <div class="home-left-wraper">
                <h1 class="fs-home-heading fw-bold text-white">BD Ticket Zone for safe Jurney</h1>
                <div class="destination-info">
                  <select name="" id="" class="select-bus">
                    <option value="">Select Bus Name</option>
                    <option value="">Nabil</option>
                    <option value="">Hanif</option>
                    <option value="">Risha</option>
                    <option value="">Symoli</option>
                  </select>
                  <div class="destination-from-to">
                    <select name="" id="" class="destination-from">
                      <option value="">From</option>
                      <option value="">Nilphamari</option>
                      <option value="">Dinajpur</option>
                      <option value="">Thakurgaon</option>
                      <option value="">Jaldhaka</option>
                      <option value="">Rangpur</option>
                      <option value="">Sylhet</option>
                    </select>
                    <select name="" id="destination-to">
                      <option value="">To</option>
                      <option value="">Dhaka</option>
                      <option value="">Sylhet</option>
                      <option value="">Chitagong</option>
                      <option value="">Cox-Bazar</option>
                    </select>
                  </div>
                  <div class="destination-date-type">
                    <input type="date" name="" id="" />
                    <select name="" id="destination-type">
                      <option value="">None</option>
                      <option value="">Ac</option>
                      <option value="">Non-Ac</option>
                    </select>
                  </div>
                  <input type="submit" value="Search" data-type="normal" />
                </div>
              </div>
            </div>
            <div class="home-right">
              <button class="btn" data-type="reverse">Contact Us</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="payment-suport">
      <div class="container">
        <div class="payment-suport-wraper | section-padding-block">
          <div class="section-heading">
            <h1 class="fs-primary-heading fw-semi-bold text-deep-skyblue">Suported Payment Mathode</h1>
          </div>
          <div class="payment-suport-content | section-padding-top">
            <img src="{{url('frontend/assets/images/bkash.png')}}" alt="Payment Suported" />
            <img src="{{url('frontend/assets/images/bkash.png')}}" alt="Payment Suported" />
            <img src="{{url('frontend/assets/images/nagad.png')}}" alt="Payment Suported" />
            <img src="{{url('frontend/assets/images/rocket.png')}}" alt="Payment Suported" />
            <img src="{{url('frontend/assets/images/mastercard.png')}}" alt="Payment Suported" />
            <img src="{{url('frontend/assets/images/dbblnex.png')}}" alt="Payment Suported" />
          </div>
        </div>
      </div>
    </section>
    <script src="{{url('frontend/plagins/fontawesome-free-6.2.0-web/js/all.min.js')}}"></script>
  </body>
</html>