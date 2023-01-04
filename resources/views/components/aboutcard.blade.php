<div class="cart">
    <div class="cart-header">
        <img src="{{$imag}}">
          <div class="cart-header-bar">
            <a href="#" class="btn-message"><span class="sr-only">Message</span></a>
            <a href="#" class="btn-menu"><span class="sr-only">Menu</span></a>
          </div>

          <div class="cart-header-slanted-edge">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 200"><path class="polygon" d="M-20,200,1000,0V200Z" /></svg>
              <a href="#" class="btn-follow"><span class="sr-only">Follow</span></a>
          </div>
    </div>

    <div class="cart-body">
        <h2 class="name">{{$name}}</h2>
        <h4 class="job-title">{{$tit}}</h4>
        <div class="bio">{{$bio}}
        </div>
       
    </div>

    <div class="cart-footer">
        <div class="stats">
            <div class="stat">
              <span class="label">Facebook</span>
              <a href="#"> <i class="fab fa-facebook"></i> </a>
            </div>
            <div class="stat">
              <span class="label">Instagram</span>
              <a href="#"><i class="fab fa-instagram"></i> </a>
            </div>
            <div class="stat">
              <span class="label">Github</span>
              <a href="#"><i class="fab fa-github"></i> </a>
            </div>
        </div>
    </div>
</div>
