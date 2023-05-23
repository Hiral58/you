<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .popup-container {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.8);
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 9999;
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.3s ease, visibility 0.3s ease;
}

.popup-content {
  display: flex;
  align-items: center;
  max-width: 600px;
  background: #fff;
  padding: 20px;
  border-radius: 5px;
}

.image-container {
  flex: 1;
  margin-right: 20px;
}

.image-container img {
  max-width: 100%;
  height: auto;
  display: block;
  border-radius: 5px;
}

.text-container {
  flex: 1;
}

h2 {
  margin-top: 0;
}

p {
  margin-bottom: 20px;
}

#close-btn {
  background: #008cba;
  color: #fff;
  padding: 8px 15px;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}

        </style>
</head>
<body>
<div id="popup-container" class="popup-container">
  <div class="popup-content">
    <div class="image-container">
      <img src="capsule/anita.jpg" alt="Popup Image">
    </div>
    <div class="text-container">
      <h2>Popup Title</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fringilla rhoncus mauris ut viverra.</p>
      <button id="close-btn">Close</button>
    </div>
  </div>
</div>

</body>
<script>
    window.addEventListener('DOMContentLoaded', function() {
  var popupContainer = document.getElementById('popup-container');
  var closeBtn = document.getElementById('close-btn');

  popupContainer.classList.add('show');

  closeBtn.addEventListener('click', function() {
    popupContainer.classList.remove('show');
  });
});
</script>
</html>