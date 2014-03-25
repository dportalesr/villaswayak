// JavaScript Document
$(document).ready(function(){
	$("#idestado").change(function (){
		$("#idestado option:selected").each(function (){
			//alert($(this).val());
			elegido=$(this).val();
			$.post("datos_combo.php", { elegido: elegido }, function(data){
			$("#ciudad").html(data);
			//alert (data);
		});
		});
	})
});		



