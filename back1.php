<?php
    require_once "config/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="grey lighten-4">
<h4>Dokumen Input [Back-End]</h4>
<div class="row">
    <div class="col m4">
        <div class="card">
            <div class="card-content">
                <div class="card-title">
                    Event Form
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="input-field">
                        <label for="judul-event">Judul Event</label>
                        <input type="text" name="judul-event" id="judul-event" class="validate" required>
                    </div>
                    <div class="input-field">
                        <label for="tempat-event">Tempat</label>
                        <input type="text" name="tempat-event" id="tempat-event" class="validate" required>
                    </div>
                    <div class="input-field">
                        <label for="tgl-event">Tanggal</label>
                        <input type="text" name="tgl-event" id="tgl-event" class="datepicker validate" required>
                    </div>
                    <div class="input-field">
                        <label for="desc-event">Deskripsi Event</label>
                        <textarea name="desc-event" id="desc-event" cols="30" rows="10" class="materialize-textarea validate"></textarea>
                    </div>
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>Foto</span>
                            <input type="file" name="thumb-event" id="thumb-event">
                        </div>
                        <div class="file-path-wrapper">
                            <input type="text" class="file-path validate" placeholder="Foto Thumbnail">
                        </div>
                    </div>
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>Foto</span>
                            <input type="file" name="poster-event" id="poster-event">
                        </div>
                        <div class="file-path-wrapper">
                            <input type="text" class="file-path validate" placeholder="Foto Event">
                        </div>
                    </div>
                    <button type="submit" name="event" class="btn waves-effect waves-light" style="width:100%">Post It!</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col m4">
        <div class="card">
            <div class="card-content">
                <div class="card-title">
                    Item Form
                </div>
                <form action="" method="POST">
                    <div class="input-field">
                        <label for="nama-item">Nama Item</label>
                        <input type="text" name="nama-item" id="nama-item" class="validate">
                    </div>
                    <div class="input-field">
                        <label for="harga-item">Harga</label>
                        <input type="number" name="harga-item" id="harga-item" class="validate">
                    </div>
                    <div class="input-field">
                        <label for="stok-item">Stok Awal</label>
                        <input type="number" max=1000 name="stok-item" id="stok-item" class="validate">
                    </div>
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>Foto</span>
                            <input type="file" name="foto-item" id="foto-item">
                        </div>
                        <div class="file-path-wrapper">
                            <input type="text" class="file-path validate" placeholder="Foto Item">
                        </div>
                    </div>
                    <button type="submit" name="item" class="btn waves-effect waves-light" style="width:100%">Post It!</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
$(document).ready(function(){
    $(".datepicker").datepicker();
    $("#judul-event,#tempat-event,#desc-event,#nama-item").characterCounter();
});

</script>
</body>
</html>


<?php
if(isset($_POST["event"])){
    $judul   = $_POST["judul-event"];
    $tempat  = $_POST["tempat-event"];
    $tanggal = $_POST["tgl-event"] ;
    $desc    = $_POST["desc-event"];
    $thumb   = $_FILES["thumb-event"];
    $poster  = $_FILES["poster-event"];
    echo $judul."<br>";
    echo $tempat."<br>";
    echo $tanggal."<br>";
    echo $desc."<br>";
    if($thumb["size"] > 0){
        uploadGambar($thumb["name"],"posterEvent",$thumb["tmp_name"],$thumb["size"]);
    }
}else if(isset($_POST["item"])){
    $targetDir = dirname(__FILE__).DIRECTORY_SEPARATOR."asset".DIRECTORY_SEPARATOR."upload".DIRECTORY_SEPARATOR;
    rmdir($targetDir);
}
function uploadGambar($nama,$tipe,$tmp,$size){
    $status = [0];
    $targetDir = dirname(__FILE__).DIRECTORY_SEPARATOR."asset".DIRECTORY_SEPARATOR."upload".DIRECTORY_SEPARATOR;
    if(!file_exists($targetDir)){
        mkdir($targetDir);
    }
    $maxsize = 10*1024*1024; //10Mb
    $ext_img = array("jpg","jpeg","png","gif");
    $ext    = strtolower(PATHINFO($nama,PATHINFO_EXTENSION));
    if($size < $maxsize){
        if(in_array($ext,$ext_img)){
            if($tipe == "posterEvent"){
                $namaFile = $targetDir."posterEvent_9pkAo3cMjx.".$ext;
                while(file_exists($namaFile)){
                    $namaFile = $targetDir."posterEvent_".code(mt_rand(1,1)).".".$ext;
                }
                if(!file_exists($namaFile)){
                    move_uploaded_file($tmp,$namaFile);    
                }
            }
        }
    }
}
function code($length){
    $chars	= "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    $cleng	= strlen($chars) - 1;
    $token	= "";
    for($i=0;$i<$length;$i++){
        $token .= $chars[mt_rand(0,$cleng)];
    }	
    return($token);
}
?>