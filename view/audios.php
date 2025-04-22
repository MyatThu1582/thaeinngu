<?php include '../navbar.php'; ?>

<?php
// Sample audio data array (you can load this from a database instead)
$audio_datas = [
    ['name' => '22 KAYAMIMAM METHOD', 'src' => 'https://ia800608.us.archive.org/9/items/22-kayamimam-method/22%20KAYAMIMAM%20METHOD.mp3'],
    ['name' => '23 RIGHT THOUGHT', 'src' => 'https://ia601806.us.archive.org/10/items/23-right-thought/23%20%20RIGHT%20THOUGHT.mp3'],
    ['name' => 'တစ်ခါတည်းချစ်ချင်လို့ပါ ချမ်းချမ်း Lyrics (256k)', 'src' => 'https://ia801504.us.archive.org/3/items/lyrics-256k/...mp3'],
    ['name' => 'Joe Lay နေရောင်ပျောက်တဲ့နွေ Lyric Video (256k)', 'src' => 'https://ia800704.us.archive.org/23/items/joe-lay-lyric-video-256k/...mp3'],
    ['name' => 'ကံ့ကော်မြို့တော် (256k)', 'src' => 'https://ia600704.us.archive.org/22/items/256k_20250422/...mp3'],
    ['name' => 'ဥပါဒါန္ Theme Song (256k)', 'src' => 'https://ia801404.us.archive.org/33/items/theme-song-256k/...mp3'],
    ['name' => '22 KAYAMIMAM METHOD', 'src' => 'https://ia800608.us.archive.org/9/items/22-kayamimam-method/22%20KAYAMIMAM%20METHOD.mp3'],
    ['name' => '23 RIGHT THOUGHT', 'src' => 'https://ia601806.us.archive.org/10/items/23-right-thought/23%20%20RIGHT%20THOUGHT.mp3'],
    ['name' => 'တစ်ခါတည်းချစ်ချင်လို့ပါ ချမ်းချမ်း Lyrics (256k)', 'src' => 'https://ia801504.us.archive.org/3/items/lyrics-256k/...mp3'],
    ['name' => 'Joe Lay နေရောင်ပျောက်တဲ့နွေ Lyric Video (256k)', 'src' => 'https://ia800704.us.archive.org/23/items/joe-lay-lyric-video-256k/...mp3'],
    ['name' => 'ကံ့ကော်မြို့တော် (256k)', 'src' => 'https://ia600704.us.archive.org/22/items/256k_20250422/...mp3'],
    ['name' => 'ဥပါဒါန္ Theme Song (256k)', 'src' => 'https://ia801404.us.archive.org/33/items/theme-song-256k/...mp3'],
    ['name' => '22 KAYAMIMAM METHOD', 'src' => 'https://ia800608.us.archive.org/9/items/22-kayamimam-method/22%20KAYAMIMAM%20METHOD.mp3'],
    ['name' => '23 RIGHT THOUGHT', 'src' => 'https://ia601806.us.archive.org/10/items/23-right-thought/23%20%20RIGHT%20THOUGHT.mp3'],
    ['name' => 'တစ်ခါတည်းချစ်ချင်လို့ပါ ချမ်းချမ်း Lyrics (256k)', 'src' => 'https://ia801504.us.archive.org/3/items/lyrics-256k/...mp3'],
    ['name' => 'Joe Lay နေရောင်ပျောက်တဲ့နွေ Lyric Video (256k)', 'src' => 'https://ia800704.us.archive.org/23/items/joe-lay-lyric-video-256k/...mp3'],
    ['name' => 'ကံ့ကော်မြို့တော် (256k)', 'src' => 'https://ia600704.us.archive.org/22/items/256k_20250422/...mp3'],
    ['name' => 'ဥပါဒါန္ Theme Song (256k)', 'src' => 'https://ia801404.us.archive.org/33/items/theme-song-256k/...mp3'],
    ['name' => '22 KAYAMIMAM METHOD', 'src' => 'https://ia800608.us.archive.org/9/items/22-kayamimam-method/22%20KAYAMIMAM%20METHOD.mp3'],
    ['name' => '23 RIGHT THOUGHT', 'src' => 'https://ia601806.us.archive.org/10/items/23-right-thought/23%20%20RIGHT%20THOUGHT.mp3'],
    ['name' => 'တစ်ခါတည်းချစ်ချင်လို့ပါ ချမ်းချမ်း Lyrics (256k)', 'src' => 'https://ia801504.us.archive.org/3/items/lyrics-256k/...mp3'],
    ['name' => 'Joe Lay နေရောင်ပျောက်တဲ့နွေ Lyric Video (256k)', 'src' => 'https://ia800704.us.archive.org/23/items/joe-lay-lyric-video-256k/...mp3'],
    ['name' => 'ကံ့ကော်မြို့တော် (256k)', 'src' => 'https://ia600704.us.archive.org/22/items/256k_20250422/...mp3'],
    ['name' => 'ဥပါဒါန္ Theme Song (256k)', 'src' => 'https://ia801404.us.archive.org/33/items/theme-song-256k/...mp3'],
    ['name' => '22 KAYAMIMAM METHOD', 'src' => 'https://ia800608.us.archive.org/9/items/22-kayamimam-method/22%20KAYAMIMAM%20METHOD.mp3'],
    ['name' => '23 RIGHT THOUGHT', 'src' => 'https://ia601806.us.archive.org/10/items/23-right-thought/23%20%20RIGHT%20THOUGHT.mp3'],
    ['name' => 'တစ်ခါတည်းချစ်ချင်လို့ပါ ချမ်းချမ်း Lyrics (256k)', 'src' => 'https://ia801504.us.archive.org/3/items/lyrics-256k/...mp3'],
    ['name' => 'Joe Lay နေရောင်ပျောက်တဲ့နွေ Lyric Video (256k)', 'src' => 'https://ia800704.us.archive.org/23/items/joe-lay-lyric-video-256k/...mp3'],
    ['name' => 'ကံ့ကော်မြို့တော် (256k)', 'src' => 'https://ia600704.us.archive.org/22/items/256k_20250422/...mp3'],
    ['name' => 'ဥပါဒါန္ Theme Song (256k)', 'src' => 'https://ia801404.us.archive.org/33/items/theme-song-256k/...mp3'],
];

// Pagination setup
$per_page = 10;
$total_items = count($audio_datas);
$total_pages = ceil($total_items / $per_page);
$current_page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$current_page = max(1, min($total_pages, $current_page)); // prevent out-of-range
$start = ($current_page - 1) * $per_page;
$audio_page_data = array_slice($audio_datas, $start, $per_page);
?>

<div class="container mt-5 bannar pt-5" style="height:200px;">
  <div class="float-end">
    <h2 class="mt-5 pt-0">တရားတော် အသံဖိုင်များ</h2>
    <a href="../index.php" class="link text-brown">Home</a>
    <svg class="bi bi-arrow-right-short text-brown" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
    </svg>
    <a href="tayardaw.php" class="link text-brown">တရားတော်များ</a>
    <svg class="bi bi-arrow-right-short text-brown" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
    </svg>
    <a href="audios.php" class="link text-brown">တရားတော်များ အသံဖိုင်များ</a>
  </div>
</div>

<div class="container my-5 mt-5">
<h3 class="mb-4 text-brown">🎧 တရားတော် အသံဖိုင်များ</h3>
  <div class="row g-4">
    <?php $id = 1; ?>
    <?php foreach ($audio_page_data as $audio): ?>
      <div class="col-md-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100">
          <div class="mb-2 fw-semibold text-brown d-flex align-items-center">
            <?php echo $id . ". " . $audio['name']; ?>
          </div>
          <audio controls class="w-100">
            <source src="<?= htmlspecialchars($audio['src']) ?>" type="audio/mpeg">
            Your browser does not support the audio element.
          </audio>
        </div>
      </div>
      <?php 
      $id++;
        endforeach; 
    ?>
  </div>

  <!-- Pagination -->
  <nav class="mt-5">
  <ul class="pagination justify-content-center">
    <?php if ($current_page > 1): ?>
      <li class="page-item">
        <a class="page-link" href="?page=<?= $current_page - 1 ?>" aria-label="Previous">
          &#8592;
        </a>
      </li>
    <?php endif; ?>

    <?php for ($i = 1; $i <= $total_pages; $i++): ?>
      <li class="page-item <?= ($i === $current_page) ? 'active' : '' ?>">
        <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
      </li>
    <?php endfor; ?>

    <?php if ($current_page < $total_pages): ?>
      <li class="page-item">
        <a class="page-link" href="?page=<?= $current_page + 1 ?>" aria-label="Next">
          &#8594;
        </a>
      </li>
    <?php endif; ?>
  </ul>

  <div class="text-center text-muted mt-2 small">
    Page <?= $current_page ?> of <?= $total_pages ?>
  </div>
</nav>

</div>

<?php include '../footer.php'; ?>
