var i = 0; 			// Start Point
var images = [];	// Images Array
var captions = []; // Captions Array
var time = 3400;	// Time Between Switch
	 
// Image List
images[0] = 'assets/images/img2.jpg';
images[1] = 'assets/images/img3.jpg';
images[2] = 'assets/images/img4.jpg';
images[3] = 'assets/images/img1.jpg';
// Caption List
captions[0] = 'Monday - Celebrate with Mrizi';
captions[1] = 'Tuesday - Great company ';
captions[2] = 'Wednesday - Let the good times roll! ';
captions[3] = 'Friday - Indulge in a Memorable Evening';

// Change Image
function changeImg(){
    document.slide.src = images[i];
    document.querySelector('.caption').textContent = captions[i];

	// Check If Index Is Under Max
	if(i < images.length - 1){
	  // Add 1 to Index
	  i++; 
	} else { 
		// Reset Back To O
		i = 0;
	}

	// Run function every x seconds
	setTimeout("changeImg()", time);
}

// Run function when page loads
window.onload=changeImg;