var index=1;
function plusIndex(n){
	index=index+1;
	showImage(index);
}

showImage(1);

function showImage(n){
	var i;
	var x = document.getElementsByClassName("slider");
	if (n>x.length) {index=1;}
	if (n< 1) {index=x.length;}
	for(i=0;i<x.length;i++)
	{
		x[i].style.display ="none";
	}
	x[index-1].style.display ="block";
}
