
function select_this(caller){
	unselect_all();
	$(caller).addClass("selected");
}

function unselect_all() {
	$("ul li div").removeClass("selected");
}

function get_view(urlTarget, targetElem) {
	$.ajax({
		url			: urlTarget,
		success		: function(data) {
			$(targetElem).html(data);
			$(".progress").css({"visibility": "hidden", "display": "none"});
			$(targetElem).slideDown( 200 );
		},
		beforeSend 	: function(jqXHR, options) {
			$(".progress").css({"visibility": "visible", "display": "block"});
			$(targetElem).css({"display": "none"});
			setTimeout(function() {
				$.ajax($.extend(options, {beforeSend: $.noop}));
			}, 1000);
			return false;
		}
	});
}

function get_view_top(urlTarget, targetElem) {
	$.ajax({
		url			: urlTarget,
		success		: function(data) {
			$(targetElem).html(data);
		}
	});
}

function submit_form(base_url, id_form) {
	$.ajax({
		type: "POST",
		url: base_url + 'dashboard/submit_proposal',
		data: $("#" + id_form).serialize(),
		dataType: 'json',
		success: function(data){
			if(data)
				console.log("berhasil");
			else
				console.log("gagal");
		},
		beforeSend: function(xhr, opts) {
			console.log("Loading");
		}
	})
}

