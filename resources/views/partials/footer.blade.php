<footer class="footer">
    <div class="container">
        <div class="row">

            <div class="col-md-4 mb-4">
                <h5>About Jeeycookie</h5>
                <p>Handcrafted bakery shop bringing you fresh breads & sweet treats daily.</p>
            </div>

            <div class="col-md-4 mb-4">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about') }}">About</a></li>
                    <li><a href="{{ url('/program') }}">Program</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </div>

            <div class="col-md-4 mb-4">
                <h5>Contact Us</h5>
                <p>Email: Jeeycookie@12.com</p>
                <p>Phone: +62 812-3456-7890</p>
                <p>Address: Bandung, Indonesia</p>
            </div>

        </div>
        <div class="text-center mt-3">
            &copy; {{ date('Y') }} Jeeycookie. All rights reserved.
        </div>
    </div>
</footer>