// gets the id of the image
var imgslide = document.getElementById("imgslide");

// creating array to store all the images
var pictures= new Array(
    "./assest/images/placeImages/himalayas-3989411_1920.jpg",
    "./assest/images/placeImages/lake-2610577_1920.jpg",
    "./assest/images/placeImages/nature-wallpaper-4048058_1920.jpg",
    "./assest/images/placeImages/nepal-1208045_1920.jpg",
    "./assest/images/placeImages/nepal-1797440_1920.jpg",
    "./assest/images/placeImages/nepal-836309_1920.jpg"
);
// length of the project
var length =pictures.length;
console.log(length);

var index = 0;
// creating function which checks the length of the array and change the index value
function imageSlider(){
    if (index >= length){
        index = 0;
    }
    // pass the array value ie. image in the img field with the id imgslide
    imgslide.src = pictures[index];
    index++;
    //change the image after 5 second
    setTimeout('imageSlider()',5000);
}