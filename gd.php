<?php 
	// Create an image with the specified dimensions
   $image = imageCreate(300,200);
 
   // Create a color (this first call to imageColorAllocate
   //  also automatically sets the image background color)
   $colorRed = imageColorAllocate($image, 255,0,0);
   // Create another color
   $colorYellow = imageColorAllocate($image, 255,255,0);
 
   // Draw a rectangle
   imageFilledRectangle($image, 50, 50, 250, 150, $colorYellow);
 
   // Set type of image and send the output
   header("Content-type: image/jpeg");
   imageJpeg($image);
 
   // Release memory
   imageDestroy($image);


	// // Create an image with the specified dimensions
 //   $image = imagecreatefrompng("africa_coin.png");

 //    // Create a color
 //   $colorYellow = imageColorAllocate($image, 255,255,0);
 
 // 	// Rotate
 //   $image=imagerotate($image, 60, $colorYellow);
 
 //   // Set type of image and send the output
 //   header("Content-type: image/png");
 //   imagePng($image);
 
 //   // Release memory
 //   imageDestroy($image);

// session_start(); 

// if($HTTP_SESSION_VARS["allow_thumbs"] == "yes"){ 

// header ("Content-type: image/jpeg"); 

// $palette_image = 'GD_library_practice/12.jpg'; 

 
// if(!isset($HTTP_GET_VARS['create']))  

// {$HTTP_GET_VARS['create'] = 'no';} 

// if(!isset($HTTP_GET_VARS['basepath']))  

// {$HTTP_GET_VARS['basepath'] = '';} 

// if(!isset($HTTP_GET_VARS['compress']))  

// {$HTTP_GET_VARS['compress'] = 100;} 

 

// // establish where on the thumbnail we can draw to  

// $thumbsize = getImageSize($palette_image); 

// $maxdim = $thumbsize[0]; 

// $draw_from = $HTTP_GET_VARS['basepath'].$HTTP_GET_VARS['img_ref']; 

// $dim = GetImageSize($draw_from); 

// if($dim[0]>$dim[1]) 

// { 

// $to_w = $maxdim; 

// $to_h = round($dim[1]*($maxdim/$dim[0])); 

// $to_x = 0; 

// $to_y = round($maxdim-$to_h)/2; 

// } 

// else 

// { 

// $to_h = $maxdim; 

// $to_w = round($dim[0]*($maxdim/$dim[1])); 

// $to_y = 0; 

// $to_x = round($maxdim-$to_w)/2; 

// } 

 

// // create some base images to start designing from  

// // and make initial basic thumbnail 

 

// if($dim[2]==1) {$from = ImageCreateFromGIF($draw_from);} 

// elseif($dim[2]==2) {$from = ImageCreateFromJPEG($draw_from);} 

// elseif($dim[2]==3) {$from = ImageCreateFromPNG($draw_from);} 

// $thumb = ImageCreateFromJPEG($palette_image); 

// // $set_bg_colour = ImageColorAllocate($thumb,255,0,0); 

// // $fill_bg_colour = ImageFill($thumb,0,0,$set_bg_colour); 

// ImageCopyResized($thumb, $from, $to_x, $to_y, 0,  

// 0, $to_w, $to_h, $dim[0], $dim[1]); 

 

// /******* Image Manipulation Scripting *******/ 

 

// // extra image manipulation can go here 

 

// /***** End Image Manipulation Scripting *****/ 

 

// // output the created thumnbnail onto the calling page  

// // and, if $create has been set to 'yes', also create  

// // a copy of the thumbnail on the server 

 

// ImageJPEG($thumb,'',$HTTP_GET_VARS['compress']); 

// if($HTTP_GET_VARS['create'] == "yes") 

// { 

// ImageJPEG($thumb,$HTTP_GET_VARS['basepath'].substr 

// ($HTTP_GET_VARS['img_ref'],0, 

// strpos($HTTP_GET_VARS['img_ref'],'.')).'_thumb.jpg',  

// $HTTP_GET_VARS['compress']); 

// } 

 

// // destroy all the temporary images used by the  

// //server while executing this  

// scriptlet (tidying up) 

 

// ImageDestroy($from); 

// ImageDestroy($thumb); 

// }
?>
<!-- Add GD image inside another GD image -->
<?php

// header('Content-type: image/png');
// $image1 = imagecreatefrompng('image/PHP-Logo.png');
// $image2 = createImage2();

// //add some texts to image1
// imagecopy($image1, $image2, $x, $y, $src_x, $src_y, $src_w, $src_h);

// imagepng($image1);

// imagedestroy($image1);
// imagedestroy($image2);



// function createimage2() {
//     $image2 = imagecreatefrompng('images/africa_coin.png');

//     //add some texts to image 2
//     return $image2;
// }    
?>