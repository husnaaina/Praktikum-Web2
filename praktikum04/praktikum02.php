<?php 
require 'header.php';
require_once 'sidebar.php';
 ?>


 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tugas Praktikum</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Praktikum 02</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <h2>Belanja Online</h2>

                <form method="POST" action="form_belanja.php">
                    <div class="form-group row">
                        <label for="customer" class="col-4 col-form-label">Customer</label>
                        <div class="col-8">
                            <input id="customer" name="customer" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV">
                                <label for="produk_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas">
                                <label for="produk_1" class="custom-control-label">KULKAS</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci">
                                <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                        <div class="col-8">
                            <input id="jumlah" name="jumlah" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <table class="table">
                    <tr class="bg-primary">
                        <th class="text-white">Daftar Harga</th>
                     </tr>
                     <tr>
                        <td>TV : RP. 4.200.000</td>
                    </tr>
                    <tr>
                        <td>KULKAS : RP. 3.100.000</td>
                    </tr>
                    <tr>
                        <td>MESIN CUCI : RP. 3.800.000 </td>
                    </tr>
                     <tr class="bg-primary">
                        <th class="text-white">Harga Dapat Berubah Setiap Saat</th>
                     </tr>
                </table>
         </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <?php 
 require_once 'footer.php';
 ?>