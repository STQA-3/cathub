<link rel="stylesheet" type="text/css" href="asset/css/detail.css">
<div class="body__kucing">
    <div class="bg">
        <figure class="snip0057 red hover">
          <figcaption>
            <h2>Detail <span>kucing</span></h2>
            <p>{{ $item->jenis_kucing }}</p>
            <p>{{ $item->deskripsi }}</p>
            <div class="icons"><a href="#"><i class="ion-ios-home"></i></a><a href="#"><i class="ion-ios-email"></i></a><a href="#"><i class="ion-ios-telephone"></i></a></div>
          </figcaption>
          <div class="image"><img src="{{ $item->galleries()->where('kucing_id', '=' , $item->id)->first()->photo }}" alt="sample4"/></div>
          <div class="position">
          <a href="#" class="btn btn-primary adopt">adopt me</a>
          <a href="/" class="btn btn-primary adopt"> | kembali</a>
          </div>
        </figure>
        </div>
</div>
