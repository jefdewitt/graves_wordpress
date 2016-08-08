/**
* Slider code
*/
$arrow = $('#arrows div');
$image = $('#thumbnails .image');
$firstImage = $('#thumbnails > .image:first-child img').attr('src');
$feature = $('#thumbnails > .image:first-child');
$feature.addClass('feature');
$("#image--main").append(" <img src=' "+ $firstImage +" '> ")

$arrow.on('click', function() {

  $mainImage = $('#image--main');
  $activeImage = $image.filter('.feature');
  $nextImage = $activeImage.next();
  $nextImageSrc = $nextImage.find('img').attr('src');
  $prevImage = $activeImage.prev();
  $prevImageSrc = $prevImage.find('img').attr('src');

  if( $(this).hasClass('left') ) {
    if($activeImage.prev().length > 0) {
      $activeImage.removeClass('feature');
      $prevImage.addClass('feature');
      $('#image--main img').attr('src', $prevImageSrc).hide().fadeIn(500);
    }
  } else if ( $activeImage.next().length > 0) {
    $activeImage.removeClass('feature');
    $nextImage.addClass('feature');
    $('#image--main img').attr('src', $nextImageSrc).hide().fadeIn(500);
  }
});

$image.on('click', function() {
  $activeImage = $image.filter('.feature');
  $activeImage.removeClass('feature');
  $(this).addClass('feature');
  $source = $(this).find('img').attr('src');
  $('#image--main img').attr('src', $source).hide().fadeIn(500);
});
