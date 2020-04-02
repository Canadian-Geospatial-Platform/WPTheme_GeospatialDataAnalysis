
<!-- page-wrapper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.6.0/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
crossorigin=""></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory')?>/js/CustomChars.js" type="text/javascript"></script>
<script src="//d3js.org/d3.v3.min.js"></script>
<script src="//labratrevenge.com/d3-tip/javascripts/d3.tip.v0.6.3.js"></script>
<script src="//d3js.org/d3.v4.min.js"></script>

<script type="text/javascript">
var $val_=$("#myChart");
console.log($val_);
CustomDataAnalisys.initialization($("#myChart"));
jQuery(function ($) {
$(".sidebar-dropdown > a").click(function() {
$(".sidebar-submenu").slideUp(200);
if (
$(this)
.parent()
.hasClass("active")
) {
$(".sidebar-dropdown").removeClass("active");
$(this)
.parent()
.removeClass("active");
} else {
$(".sidebar-dropdown").removeClass("active");
$(this)
.next(".sidebar-submenu")
.slideDown(200);
$(this)
.parent()
.addClass("active");
}
});

$("#close-sidebar").click(function() {
$(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
$(".page-wrapper").addClass("toggled");
});

$(".checkme").click(function(e) {
if ($(this).is(":checked")) {
var radioValue = $("input[name='is_chart']:checked"). val();
CustomDataAnalisys.showChart(radioValue);
}
});

$("#chartConfig").click(function(){
alert("Appplication Configuration");
})
});//end jQuery

</script>
</body>
</html>
