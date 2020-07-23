<!DOCTYPE html>
<html lang="en">
<head>
  <title>Raja Ongkir</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>   
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/i18n/id.min.js"></script>   
  <script src="asset/js/app.js"></script>
</head>
<body>
<nav class="navbar bg-primary shadow-sm" style="border-radius:0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" style="color:#fff" href="#">Raja Ongkir</a>
    </div>   
  </div>
</nav>  
<div class="container-fluid">
  <div class="row p-2">
    <div class="col-md-5">
      <div class="card mt-4">
        <div class="card-body">
          <form class="form-horizontal" id="ongkir" method="POST">
            <div class="form-group">
              <label class="control-label col-sm-3">Kota Asal</label>
              <div class="col-sm-9">
                <select class="form-control" id="kota_asal" name="kota_asal" required="">
                  <option></option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3">Kota Tujuan</label>
              <div class="col-sm-9">          
                <select class="form-control" id="kota_tujuan" name="kota_tujuan" required="">
                  <option></option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3">Kurir</label>
              <div class="col-sm-9">          
                <select class="form-control" id="kurir" name="kurir" required="">
                  <option value="pilih">--Pilih Kurir</option>
                  <option value="jne">JNE</option>
                  <option value="tiki">TIKI</option>
                  <option value="pos">POS INDONESIA</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3">Berat (gram)</label>
              <div class="col-sm-9">          
                <input type="text" class="form-control" id="berat" name="berat" placeholder="500" required="">
              </div>
            </div>
            <div class="form-group">        
              <div class="col-sm-offset-3 col-sm-8">
                <button type="submit" class="btn btn-primary">Cek Ongkir</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-5 ml-5">
      <img src="asset/images/deliv.png" alt="" srcset="" height="450">
    </div>
  </div>
  <div class="row p-2">
    <div class="col-md-12" id="response_ongkir">      
    </div>
  </div>
</div>
</body>
</html>
