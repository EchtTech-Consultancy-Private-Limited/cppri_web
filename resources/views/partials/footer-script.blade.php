<script src="{{ asset('assets-cppri/js/jquery.min.js') }}"></script>
<script>
$(document).ready(function() {
    // Check if the modal should be shown today
    if (!getCookie("modalShownToday")) {
        // If it hasn't been shown today, show the modal
        $(".modal").each(function(l) {
            $(this).on("show.bs.modal", function(l) {
                var o = $(this).attr("data-easein");
                "shake" == o ? $(".modal-dialog").velocity("callout." + o) : "pulse" == o ?
                    $(".modal-dialog").velocity("callout." + o) : "tada" == o ? $(
                        ".modal-dialog").velocity("callout." + o) : "flash" == o ? $(
                        ".modal-dialog").velocity("callout." + o) : "bounce" == o ? $(
                        ".modal-dialog").velocity("callout." + o) : "swing" == o ? $(
                        ".modal-dialog").velocity("callout." + o) : $(".modal-dialog")
                    .velocity("transition." + o)
            })
        });

        setTimeout(function() {
            $('#costumModal8').modal('show');
        }, 1000);
        // Set a cookie with an expiration date one day from now
        setCookie("modalShownToday", "true", 1);
    }
});
</script>

<script src="{{ asset('assets-cppri/js/jquery.marquee.js')}}"></script>
<script src="{{ asset('assets-cppri/js/jquery.marquee.min.js')}}"></script>
<script src="{{ asset('assets-cppri/js/jquery.marquee-horizantal.js')}}"></script>
<!-- <script src="{{ asset('assets-cppri/js/jquery.marqueedirection.js')}}"></script> -->


<script>
// $(document).ready(function() {
//     $('#example').DataTable({
//         dom: 'Bfrtip',
//         order: [
//             [0, 'desc']
//         ],
//         buttons: [
//             'print'
//         ]
//     });
// });


</script>
<script>
$(function() {

    /* Example options:
    
    	let options = {
    		autostart: true,
    		property: 'value',
    		onComplete: null,
    		duration: 20000,
    		padding: 10,
    		marquee_class: '.marquee',
    		container_class: '.latest_news_marquee_container',
    		sibling_class: 0,
    		hover: true,
    		velocity: 0.1
    		direction: 'right'
    	}

    	$('.latest_news_marquee_container').SimpleMarquee(options);
    	
    */

  

});
</script>
<script>
const changeToAfterbefore = () => {
    var color = $(event.currentTarget).attr('data-id');
    const root = document.querySelector(":root");
    root.style.setProperty("--pseudo-bordercolor", color);
}
</script>

<!-- Modal popup End -->
<script src="{{ asset('assets-cppri/js/jquery-migrate-3.4.0.min.js') }}"></script>

<script src="{{ asset('assets-cppri/js/jquery-accessibleMegaMenu.js') }}"></script>
<script src="{{ asset('assets-cppri/js/framework.js') }}"></script>
<script src="{{ asset('assets-cppri/js/jquery.flexslider.js') }}"></script>
<script src="{{ asset('assets-cppri/js/font-size.js') }}"></script>
<script src="{{ asset('assets-cppri/js/swithcer.js') }}"></script>
<script src="{{ asset('assets-cppri/theme/js/ma5gallery.js') }}"></script>
<script src="{{ asset('assets-cppri/js/megamenu.js') }}"></script>
<script src="{{ asset('assets-cppri/theme/js/easyResponsiveTabs.js') }}"></script>
<script src="{{ asset('assets-cppri/theme/js/custom.js') }}"></script>
<script src="{{ asset('assets-cppri/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets-cppri/js/velocity.min.js') }}"></script>
<script src="{{ asset('assets-cppri/js/velocity.ui.min.js') }}"></script>
<script src="{{ asset('assets-cppri/custom.js') }}"></script>

<script src="{{ asset('assets-cppri/js/datatablemin.js') }}"></script>
<script src="{{ asset('assets-cppri/js/datatablebutton.js') }}"></script>
<script src="{{ asset('assets-cppri/js/datatablebuttonprint.js') }}"></script>
<script src="{{ asset('assets-cppri/js/masterpagejs.js') }}"></script>
<script src="{{ asset('assets-cppri/js/magnificpopup.js') }}"></script>
<!-- <script src="{{ asset('assets-cppri/js/dropdownbootstrapminjs.js') }}"></script> -->

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v18.0"
    nonce="abqP2Btw"></script>