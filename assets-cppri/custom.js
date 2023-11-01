var baseurl = window.location;

  //alert(baseurl + "set-language");

function setlang(value) {
	// alert(value)
	$.ajax({
		url: baseurl + "set-language",
		data: { data: value },
		success: function (result) {
			//alert(result.data);
			location.reload();
		}
	});
}