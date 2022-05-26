<div>
    <div class="driver-footer-buttons-div">
        <div class="driver-mobile-footer-container">
            <a href="{{ url('home') }}" class="{{ (request()->is('home')) ? 'driver-mobile-footer-items driver-footer-active' : 'driver-mobile-footer-items' }}">
                <div>
                    <div class="footer-img footer-img-1"></div>
                </div>
                <div class="footer-hover-gray"></div>
            </a>
            <a href="{{ url('driver/account') }}" class="{{ (request()->is('driver/account*')) ? 'driver-mobile-footer-items driver-footer-active' : 'driver-mobile-footer-items' }}">
                <div>
                    <div class="footer-img footer-img-4"></div>
                </div>
                <div class="footer-hover-gray"></div>
            </a>
        </div>
    </div>
</div>