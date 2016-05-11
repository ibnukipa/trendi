    <script>

    	$(".head_form_20").height($(".head_form_20").width());

        $(".btn-hov a").hover(
            function() {
                $(this).css({"background-image": "-webkit-linear-gradient(top,<?php echo $warna_kedua ?>,<?php echo $warna_keempat ?>)"}); 
            }, function() {
                $(this).css({"background-image": "-webkit-linear-gradient(top,<?php echo $warna_kedua ?>,<?php echo $warna_ketiga ?>)"}); 
            }
        );

        $(document).ready(function(){
            $(".button-collapse").sideNav();
        });
    </script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/smoothscroll.js"></script>
    <script>
    $('.dropdown-button').dropdown({
			inDuration: 300,
			outDuration: 225,
			hover: true
			}
		);
    </script>
</body>
</html>