var imagesSelected = new Array(false,false,false);
var noOfImages = 3;
var totalImagesSelected = 0;
function advert_onload()
{
setInterval("switchImage()",4000);
}
function switchImage()
{
var imageIndex;
if (totalImagesSelected == noOfImages)
{
for (imageIndex = 0; imageIndex < noOfImages; imageIndex++)
{
imagesSelected[imageIndex] = false;
}
totalImagesSelected = 0;
}
var selectedImage = Math.floor(Math.random() * noOfImages) + 1;
while (imagesSelected[selectedImage - 1] == true)
{
selectedImage = Math.floor(Math.random() * noOfImages) + 1;
}
totalImagesSelected++;
imagesSelected[selectedImage - 1] = true;
document.imgAdvert1.src = "img/adverts/position1_" + selectedImage + ".jpg";
document.imgAdvert2.src = "img/adverts/position2_" + selectedImage + ".jpg";
document.imgAdvert3.src = "img/adverts/position3_" + selectedImage + ".jpg";

}

var picsSelected=new Array(false,false,false);
var noOfPics=2;
var locationIndex=0;
function pics_onload(){
	setInterval("switchPics()",6000);
}

function switchPics(){
	var location=document.getElementsByClassName("pics item");
	var wall=document.getElementsByClassName("piclist");
	for(var i=0;i<3;i++){
		location[i].className="pics item";
        wall[i].style.left="-980px";
    }
    locationIndex++;
    if(locationIndex>2){locationIndex=0;}
	location[locationIndex].className += " current";
	wall[locationIndex].style.left="0px";
}