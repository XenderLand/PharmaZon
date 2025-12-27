
<div class="footer">
    <div class="box-container">
        <div class="box">
            <h3>Locations</h3>
            <a href="RestaurantHome/rhudan.php">Takoradi</a>
            <a href="#">Cape Coast</a>
            <a href="#">Accra</a>
            <a href="#">Kumasi</a>
            <a href="#">Volta </a>
        </div>
        <div class="box">
            <h3>Quick Links</h3>
            <a href="#home">Home</a>
            <a href="#OnlineShop">Online Shop </a>
            <a href="#about">About</a>
            <a href="#product">Product</a>
            <a href="#health">Health Tips </a>
        
        </div>
        <div class="box">
            <h3>Follow Us</h3>
            <a href="www.facebook.com">Facebook</a>
            <a href="www.twitter.com">Twitter</a>
            <a href="www.instagram.com">Instagram</a>
        </div>
<div class="credit">copyright @ 2023 by <span>PharmaZon</span> </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: var(--white);
}

:root{
  --green: #27ae60;
  --orange: rgb(255, 139, 7);
  --black:#000000;
  --red:rgb(255, 7, 7);
  --yellow:rgb(255, 139, 7);
  --light-color:#666;
  --box-shadow:0 .5rem 1.5rem rgba(0,0,0,.1);
  --white: #ffffff;
  
}


*{
  font-family: Georgia, 'Times New Roman', Times, serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  text-decoration: none;
  outline: none; border: none;
  text-transform: capitalize;
  transition: all .2s linear;
}
  
    .footer .box-container{
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(10rem, 1fr));
      gap: 1rem;
      background: #f5a53de7;;

  
    }


  .footer .box-container .box h3{
    padding: .5rem;
    font-size: 1.3rem;
    color: var(--black);
    align-items: center;
    display: flex;
    justify-content: center;
  
  }
  
  
  .footer .box-container .box a{
    display: block;
    padding: .5rem 0;
    font-size: 1rem;
    color: var(--black);
    align-items: center;
    display: flex;
    justify-content: center;
  
  }
  .footer .box-container .box a:hover{
    color: var(--yellow);
    background: var(--black); 
    border-radius: .7rem; 
  }
  
  .footer .credit{
    text-align: center;
    border-top: .5rem solid rgba(0,0,0,.1);
    font-size: 1rem;
    color: var(--black);
    padding: 5rem;
    padding-top: 1rem;
    margin-top: 1rem;
  
  
  }
  .footer .credit span{
    color: var(--white);
    background: var(--black);
  }
</style>
<script>
    
  var swiper = new Swiper(".home-slider", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 7500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    loop:true,
    },
  );
  
var swiper = new Swiper(".review-slider", {
  spaceBetween: 20,
  centeredSlides: true,
  autoplay: {
    delay: 7500,
    disableOnInteraction: false,
  },
  loop:true,
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    640: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
  });
</script>