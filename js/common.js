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