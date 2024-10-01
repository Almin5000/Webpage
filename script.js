            // // Get all the images in the folder
            // var images = document.querySelectorAll('img');
            //     for (var i = 0; i < images.length; i++) {
            //     images[i].src = 'images/img' + images[i].src.split('/').pop();
            //     }
          
            // // Get the current image
            // var currentImage = 0;
          
            // // Change the image every 5 seconds
            // setInterval(function() {
            //   currentImage = (currentImage + 1) % images.length;
            //   images[currentImage].style.display = 'block';
            //   images[currentImage].style.opacity = '1';
            //   setTimeout(function() {
            //     images[currentImage].style.opacity = '0';
            //   }, 5000);
            // }, 5000);




            
            // var i = 0; //start point
            // var images = [];
            // var time = 5000;
            
            // //image list
            // images[0] = "forest.jpg";
            // images[1] = "forest2.jpg";
            // images[2] = "forest3.jpg";
            
            // //change image
            // function changeImg(){
            //     document.getElementById("myImage").src = images[i];
            
            //     if(i < images.length - 1){
            //         i++;
            //     } else {
            //         i = 0;
            //     }
            
            //     setTimeout("changeImg()", time);
            // }
            
            // window.onload = changeImg;

// Initialize map
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 55.380130, lng: 10.410691 },
    zoom: 12
  });
  new google.maps.Marker({
    position: { lat: 55.380130, lng: 10.410691 },
    map: map,
    title: "Syddansk Erhvervsskolen"
  });
}