<?php include '../navbar.php'; ?>
<div class="container mt-5 bannar pt-5" style="height:200px;">
  <div class="float-end">
    <h2 class="mt-5 pt-0">တရားတော်များ</h2>
    <a href="../index.php" class="link text-brown">Home</a>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short text-brown" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
    </svg>
    <a href="tayardaw.php" class="link text-brown">တရားတော်များ</a>
  </div>
</div>
<div class="container my-5">
  <div class="row g-4">
    
    <!-- Video Section -->
    <div class="col-lg-6">
      <div class="p-4 bg-white rounded-4 shadow-sm h-100">
        <h3 class="mb-4 text-brown">📺 တရားတော် ဗီဒီယိုများ</h3>
        <?php 
          $video_datas = [
            [
              'name' => 'Facebook 269560251844372 (720p)',
              'src' => 'https://ia801304.us.archive.org/35/items/facebook-269560251844372-720p/Facebook%20269560251844372%28720p%29.mp4',
            ],
            [
              'name' => 'Part ( 1)ရဲတွေ ပလိပ်တွေ အစစ်ဆေးများတယ့်မဟာချိုင်မြို့ကိုသွားလည်ကြည့်မယ် အပိုင်း(၁)( 720 P HD)',
              'src' => 'https://ia801403.us.archive.org/18/items/part-1-720-p-hd/Part%20%281%29%E1%80%9B%E1%80%B2%E1%80%90%E1%80%BD%E1%80%B1%20%E1%80%95%E1%80%9C%E1%80%AD%E1%80%95%E1%80%BA%E1%80%90%E1%80%BD%E1%80%B1%20%E1%80%A1%E1%80%85%E1%80%85%E1%80%BA%E1%80%86%E1%80%B1%E1%80%B8%E1%80%99%E1%80%BB%E1%80%AC%E1%80%B8%E1%80%90%E1%80%9A%E1%80%B7%E1%80%BA%E1%80%99%E1%80%9F%E1%80%AC%E1%80%81%E1%80%BB%E1%80%AD%E1%80%AF%E1%80%84%E1%80%BA%E1%80%99%E1%80%BC%E1%80%AD%E1%80%AF%E1%80%B7%E1%80%80%E1%80%AD%E1%80%AF%E1%80%9E%E1%80%BD%E1%80%AC%E1%80%B8%E1%80%9C%E1%80%8A%E1%80%BA%E1%80%80%E1%80%BC%E1%80%8A%E1%80%B7%E1%80%BA%E1%80%99%E1%80%9A%E1%80%BA%20%E1%80%A1%E1%80%95%E1%80%AD%E1%80%AF%E1%80%84%E1%80%BA%E1%80%B8%28%E1%81%81%29%28720P_HD%29.mp4',
            ],
          ];
          $id = 1;
          foreach($video_datas as $video){
        ?>
        <div class="mb-4 p-3 bg-light">
          <div class="mb-2 fw-semibold text-brown d-flex align-items-center">
            <?php echo $id . ". " . $video['name']; ?>
          </div>
          <video src="<?php echo $video['src']; ?>" class="custom-video mt-2" controls></video>
        </div>
        <?php $id++; } ?>
        <a href="/" class="btn btn-default mt-3 bg-brown viewmorebtn float-end mt-5" type="button">
          View All >>
        </a>
      </div>
    </div>


    <!-- Audio Section -->
    <div class="col-lg-6">
      <div class="p-4 bg-white rounded-4 shadow-sm h-100">
        <h3 class="mb-4 text-brown">🎧 တရားတော် အသံဖိုင်များ</h3>
        <?php 
          $audio_datas = [
            [
              'name' => '22 KAYAMIMAM METHOD',
              'src' => 'https://ia800608.us.archive.org/9/items/22-kayamimam-method/22%20KAYAMIMAM%20METHOD.mp3',
            ],
            [
              'name' => '23 RIGHT THOUGHT',
              'src' => 'https://ia601806.us.archive.org/10/items/23-right-thought/23%20%20RIGHT%20THOUGHT.mp3',
            ],
            [
              'name' => 'တစ်ခါတည်းချစ်ချင်လို့ပါ ချမ်းချမ်း Lyrics (256k)',
              'src' => 'https://ia801504.us.archive.org/3/items/lyrics-256k/%E1%80%90%E1%80%85%E1%80%BA%E1%80%81%E1%80%AB%E1%80%90%E1%80%8A%E1%80%BA%E1%80%B8%E1%80%81%E1%80%BB%E1%80%85%E1%80%BA%E1%80%81%E1%80%BB%E1%80%84%E1%80%BA%E1%80%9C%E1%80%AD%E1%80%AF%E1%80%B7%E1%80%95%E1%80%AB_-_%E1%80%81%E1%80%BB%E1%80%99%E1%80%BA%E1%80%B8%E1%80%81%E1%80%BB%E1%80%99%E1%80%BA%E1%80%B8__Lyrics_%28256k%29.mp3',
            ],
            [
              'name' => 'Joe Lay နေရောင်ပျောက်တဲ့နွေ Lyric Video ( 256k)',
              'src' => 'https://ia800704.us.archive.org/23/items/joe-lay-lyric-video-256k/Joe_Lay_-_%E1%80%94%E1%80%B1%E1%80%9B%E1%80%B1%E1%80%AC%E1%80%84%E1%80%BA%E1%80%95%E1%80%BB%E1%80%B1%E1%80%AC%E1%80%80%E1%80%BA%E1%80%90%E1%80%B2%E1%80%B7%E1%80%94%E1%80%BD%E1%80%B1__Lyric_Video_%28256k%29.mp3',
            ],
            [
              'name' => 'ကံ့ကော်မြို့တော် (256k)',
              'src' => 'https://ia600704.us.archive.org/22/items/256k_20250422/%E1%80%80%E1%80%B6%E1%82%95%E1%80%B1%E1%80%80%E1%80%AC%E1%80%B9%E1%80%BB%E1%80%99%E1%80%AD%E1%80%B3%E1%82%95%E1%80%B1%E1%80%90%E1%80%AC%E1%80%B9%28256k%29.mp3',
            ],
            [
              'name' => 'ဥပါဒါန္ Theme Song( 256k)',
              'src' => 'https://ia801404.us.archive.org/33/items/theme-song-256k/%E1%80%A5%E1%80%95%E1%80%AB%E1%80%92%E1%80%AB%E1%80%94%E1%80%B9___Theme_Song%28256k%29.mp3',
            ]
          ];
          $id = 1;
          foreach($audio_datas as $audio){
        ?>
        <div class="mb-4 p-3 border rounded-3 bg-light">
          <div class="mb-2 fw-semibold text-brown d-flex align-items-center">
            <?php echo $id . ". " . $audio['name']; ?>
          </div>
          <audio src="<?php echo $audio['src']; ?>" class="custom-audio" controls></audio>
        </div>
        <?php $id++; } ?>
        <a href="audios.php" class="btn btn-default mt-3 bg-brown viewmorebtn float-end" type="button">
          View All >>
        </a>
      </div>
    </div>


  </div>
</div>
<br>
<script>
  let currentAudio = null;

  document.addEventListener('play', function(e){
  const mediaElements = document.querySelectorAll('audio, video');

  mediaElements.forEach((el) => {
    if (el !== e.target) {
      el.pause();
    }
  });
}, true); // useCapture: true


  document.querySelectorAll('audio').forEach((audio) => {
    audio.addEventListener('play', () => {
      // Pause any other playing audio
      if (currentAudio && currentAudio !== audio) {
        currentAudio.pause();
      }
      currentAudio = audio;
    });

    // Reset currentAudio when one ends or is paused manually
    audio.addEventListener('pause', () => {
      if (currentAudio === audio) {
        currentAudio = null;
      }
    });

    audio.addEventListener('ended', () => {
      if (currentAudio === audio) {
        currentAudio = null;
      }
    });
  });
</script>
<?php include '../footer.php'; ?>
