function convert_image(blobData) {
  // Suppose you have a Blob with image data
  var myBlob = new Blob([blobData], { type: "image/jpeg;base64" });

  // Create a URL for the Blob
  var imageUrl = URL.createObjectURL(myBlob);

  // Set the src attribute of an img tag to the URL
  var img = document.createElement("img");
  img.src = imageUrl;

  // Add the img tag to a div or any other container element
  var container = document.getElementById("image-container");
  container.appendChild(img);
}


$(document).ready(() => {
  
});
