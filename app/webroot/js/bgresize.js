
function backgroundScale(){
	var imageRatio       = 1.75;
	var windowHeight     = document.body.clientHeight;
	var windowWidth      = document.body.clientWidth;
	var windowScale      = windowWidth / windowHeight;
	var targetWidth      = windowHeight * imageRatio;
	var targetWidthFull  = windowWidth;
	var leftPos          = - (targetWidth - windowWidth) / 2;
	var leftPosFull      = 0;

	if (windowScale <= imageRatio)
	{
		$('.background img').attr("width", targetWidth);
		$('.background').css("left", leftPos);
	} 
	else
	{
		$('.background img').attr("width", targetWidthFull);
		$('.background').css("left", leftPosFull);
	}
}

$(window).resize(function(){
	var imageRatio       = 1.75;
	var windowHeight     = document.body.clientHeight;
	var windowWidth      = document.body.clientWidth;
	var windowScale      = windowWidth / windowHeight;
	var targetWidth      = windowHeight * imageRatio;
	var targetWidthFull  = windowWidth;
	var leftPos          = - (targetWidth - windowWidth) / 2;
	var leftPosFull      = 0;

	if (windowScale <= imageRatio)
	{
		$('.background img').attr("width", targetWidth);
		$('.background').css("left", leftPos);
	} 
	else 
	{
		$('.background img').attr("width", targetWidthFull);
		$('.background').css("left", leftPosFull);
	}
	
	mainBaseResize();
});


function mainBaseResize()
{
	if(($('body').height() >= 800) && ($('#mainBase').height() <= 500)){
		$('#mainBase').height($('body').height() - 445 + "px");
	}
}


backgroundScale(); 
mainBaseResize();