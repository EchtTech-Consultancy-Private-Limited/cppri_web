var baseurl = window.location;

  //alert(baseurl + "set-language");
  function setlang(value) {
	//alert(value)
	$.ajax({
	  url: "set-language",
	  data: { data: value },
	  success: function (result) {
		location.reload();
	  }
	});
}