$(document).ready(function()
{
	$("#send").click(function(e){
		e.preventDefault();
		var url = "send.php";
		$.ajax({
			type: "POST",
			url: url,
			data: $("#frm").serialize(),
			success: function(data)
			{
				alert("message sent!");
			}
	})
}
)
});
$(window).on('load resize', function(){
	$s=$(document).height() - $("header").height() - $("footer").height();
	
	$("content").css({minHeight: $s + 'px'});
});