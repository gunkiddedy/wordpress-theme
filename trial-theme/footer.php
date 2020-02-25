        <div class="uk-section uk-section-secondary uk-light"><!--end section 6-->              
            <div class="uk-container">
                <div class="uk-card uk-card-body">
                    <div uk-grid>
                        <div class="uk-width-expand@m">
                            <h4 class="uk-text-justify">
                                We can provide you with hassle-free and high-quality content for your online marketing funnles, all in the one place. And, you’ll be smiling even more with flexible pricing to match your needs. Chat with us today. 
                            </h4>
                        </div>
                        <div class="uk-width-1-3">
                            <h4 class="uk-text-justify">Contact Us </h4>
                            <p>Email: service@mckinnongroup.com.au</p>
                        </div>
                    </div>
                </div>
        
            </div>
            <hr>
            <h6 class="uk-container uk-card">
                &copy; 2020 McKinnon Group Pty Ltd. | All Rights Registered
            </h6>
        </div><!--end section 6-->

    </div><!--end Main container-->
    
    <!-- scroll to top -->
    <a href="#" uk-scroll id="myscroll" class="scroll-top uk-align-right" style="float: right;">
        <button class="uk-button uk-button-small">
            <i uk-icon="chevron-up"></i>
        </button>
    </a>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 900) {
                    $('.scroll-top').fadeIn();
                } else {
                    $('.scroll-top').fadeOut();
                }
            });

            $('.scroll-top').click(function () {
                $("html, body").animate({
                scrollTop: 0
                }, 900);
                return false;
            });
        });
    </script>
    
<?php wp_footer(); ?>

</body>
</html>
