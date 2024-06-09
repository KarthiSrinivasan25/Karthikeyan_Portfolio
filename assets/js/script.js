document.addEventListener("DOMContentLoaded", function() {
  // Define loading sound
  var loadingSound = new Audio('path/to/loading-sound.mp3');

  // Simulate loading delay (remove this in production)
  setTimeout(function() {
      // Hide loading screen
      document.getElementById('loading-screen').style.display = 'none';
      // Show content
      document.getElementById('content').style.display = 'block';
      // Pause loading sound
      loadingSound.pause();
  }, 2000); // Adjust the delay time as needed (in milliseconds)
});



function showModal(modalId) {
    document.getElementById(modalId).style.display = 'flex';
}

function hideModal(modalId) {
    document.getElementById(modalId).style.display = 'none';
}


// Function to toggle display of box-content
/*function toggleContent(element) {
  var content = element.querySelector('.box-content');
  var allContents = document.querySelectorAll('.box-content');
  
  // Close all open box-content elements
  allContents.forEach(function(item) {
      if (item !== content && item.style.display === 'block') {
          item.style.display = 'none';
      }
  });
  
  // Toggle the display of the clicked box-content
  if (content.style.display === 'block') {
      content.style.display = 'none';
  } else {
      content.style.display = 'block';
  }
}

*/