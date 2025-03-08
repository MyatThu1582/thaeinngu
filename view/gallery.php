<?php include '../navbar.php'; ?>
<div class="container mt-5 bannar pt-5" style="height:200px;">
  <h2 class="mt-5 pt-0">Gallery</h2>
  <a href="../index.php" class="link text-brown">Home</a>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short text-brown" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
  </svg>
  <a href="gallery.php" class="link text-brown">Gallery</a>
</div>

<div class="container mt-5 pt-5">
  <div class="d-flex">
    <div class="col-10 me-3">
      <h3>သဲအင်းဂူကျောင်းတိုက်</h3>
      <p class="title-underline"></p>
    </div>
  </div>
  <div class="d-flex">
    <div class="col-3 me-2 gallerydiv" data-bs-toggle="modal" data-bs-target="#exampleModal">
      <img class="rounded_gallery" class="rounded_gallery" class="rounded_gallery" src="../ThaeInnGu/Introduction.jpg" alt="" width="100%">
      <div class="image-text">အရိယာ ဓမ္မဗိမာန်တော်ကြီး</div>
    </div>
    <div class="modal fade modal-lg h-70" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close" style="margin-right:-80px;"></button>
            <img class="rounded_gallery" class="rounded_gallery" class="rounded_gallery" class="rounded_gallery" src="../ThaeInnGu/Introduction.jpg" alt="" width="100%">
          </div>
        </div>
      </div>
    </div>

    <div class="col-3 me-2 gallerydiv" data-bs-toggle="modal" data-bs-target="#exampleModal2">
      <img class="rounded_gallery" class="rounded_gallery" class="rounded_gallery" src="../ThaeInnGu/activity5.jpg" alt="" width="100%">
      <div class="image-text">စံကျောင်းတော်ကြီး</div>
    </div>

    <div class="modal fade modal-lg" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close" style="margin-right:-80px;"></button>
            <img class="rounded_gallery" class="rounded_gallery" class="rounded_gallery" class="rounded_gallery" src="../ThaeInnGu/activity5.jpg" alt="" width="100%">
          </div>
        </div>
      </div>
    </div>

    <div class="col-3 me-2 gallerydiv">
      <img class="rounded_gallery" class="rounded_gallery" class="rounded_gallery" class="rounded_gallery" src="../ThaeInnGu/gallery.jpg" alt="" width="95%">
      <div class="image-text">ဆွမ်းစားဆောင်</div>
    </div>
    <div class="col-3 me-2 gallerydiv">
      <img class="rounded_gallery" class="rounded_gallery" class="rounded_gallery" class="rounded_gallery" src="../ThaeInnGu/gallery2.jpg" alt="" width="95%">
      <div class="image-text">မူလသဲအင်း စံကျောင်းတော်</div>
    </div>
  </div>
  <div class="d-flex mt-4">
    <div class="col-3 me-2 gallerydiv">
      <img class="rounded_gallery" class="rounded_gallery" class="rounded_gallery" src="../ThaeInnGu/activity.jpg" alt="" width="100%">
      <div class="image-text">ဗိမာန်တော် အတွင်းပိုင်း</div>
    </div>
    <div class="col-3 me-2 gallerydiv">
      <img class="rounded_gallery" class="rounded_gallery" class="rounded_gallery" src="../ThaeInnGu/tree.jpg" alt="" width="100%">
      <div class="image-text">အထင်ကရ</div>
    </div>
    <div class="col-3 me-2 gallerydiv">
      <img class="rounded_gallery" class="rounded_gallery" class="rounded_gallery" src="../ThaeInnGu/lake.jpg" alt="" width="100%">
      <div class="image-text">ဓမ္မဗိမာန်တော်ကြီး</div>
    </div>
    <div class="col-3 me-2 gallerydiv">
      <img class="rounded_gallery" class="rounded_gallery" class="rounded_gallery" src="../ThaeInnGu/inner.jpg" alt="" width="100%">
      <div class="image-text">ဓမ္မဗိမာန်တော်ကြီး</div>
    </div>
  </div>
  <div class="ms-5 mt-4 float-end">
    <a href="" class="text-brown link">See more images</a>
  </div>
</div>

<br><br><br>
<?php include '../footer.php'; ?>
