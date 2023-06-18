<!DOCTYPE html>
<html>
<head>
  <title>Galería</title>
  <style>
    .gallery-container {
      display: flex;
      justify-content: center;
    }

    .gallery {
      display: flex;
      flex-direction: column;
      align-items: center;
      position: relative;
    }

    .selected-image {
      margin-bottom: 20px;
      position: relative;
    }

    .selected-image img {
      max-width: 100%;
      height: 420px;
    }

    .arrow {
      font-size: 57px;
      background-color: transparent;
      border: none;
      color: #000;
      cursor: pointer;
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
    }

    .arrow.prev {
      left: -10px;
    }

    .arrow.next {
      right: 10px;
    }

    .thumbnails {
      display: flex;
      align-items: center;
    }

    ul {
      display: flex;
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .thumbnail {
      margin-right: 10px;
    }

    .thumbnail:last-child {
      margin-right: 0;
    }

    .thumbnail button {
      background-color: transparent;
      border: none;
      padding: 0;
    }

    .thumbnail img {
      width: 80px;
      height: auto;
      opacity: 0.6;
      transition: opacity 0.3s ease-in-out;
    }

    .thumbnail.active img {
      opacity: 1;
    }

    .thumbnail img:hover {
      opacity: 1;
    }
  </style>
</head>
<body>
  <div class="gallery-container" style='padding-top:135px'>
    <div class="gallery">
      <div class="selected-image">
        <img id="selectedImage" src="" alt="Selected Image">
      </div>
      <div class="thumbnails">
        <button class="arrow prev" onclick="changeImage(-1)">&lt;</button>
        <ul id="thumbnailList"></ul>
        <button class="arrow next" onclick="changeImage(1)">&gt;</button>
      </div>
    </div>
  </div>

  <script>
    var images = [
      'https://vivirenelpoblado.com/wp-content/uploads/2022/04/La-alcaldia-de-Medellin-instala-un-Centro-Integral-de-Familia-en-la-UdeA-03-1200x800.jpg',
      'https://www.unidadfamiliamedellin.com.co/unidadfamiliamedellin/resources/img/medsol1.jpg',
      'https://www.unidadfamiliamedellin.com.co/unidadfamiliamedellin/resources/img/medsol8.jpg',
      
      // Agrega aquí más URLs de imágenes
    ];

    var currentIndex = 0;

    function changeImage(direction) {
      currentIndex += direction;
      if (currentIndex < 0) {
        currentIndex = images.length - 1;
      } else if (currentIndex >= images.length) {
        currentIndex = 0;
      }
      document.getElementById('selectedImage').src = images[currentIndex];
    }

    function populateThumbnails() {
      var thumbnailList = document.getElementById('thumbnailList');
      thumbnailList.innerHTML = '';

      images.forEach(function (imageUrl, index) {
        var li = document.createElement('li');
        li.className = 'thumbnail';
        if (index === currentIndex) {
          li.className += ' active';
        }

        var button = document.createElement('button');
        button.onclick = function () {
          changeImage(index - currentIndex);
        };

        var img = document.createElement('img');
        img.src = imageUrl;
        img.alt = 'Image ' + index;
        img.width = 100;
        img.height = 'auto';

        button.appendChild(img);
        li.appendChild(button);
        thumbnailList.appendChild(li);
      });
    }

    // Inicializar la galería con la primera imagen
    document.getElementById('selectedImage').src = images[currentIndex];
    populateThumbnails();
  </script>
</body>
</html>
