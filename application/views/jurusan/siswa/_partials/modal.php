 <!-- Logout Modal-->
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Siap untuk Keluar?</h5>
                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <div class="modal-body">Pilih "Keluar" di bawah jika kamu siap untuk mengakhiri sesimu sekarang.</div>
             <div class="modal-footer">
                 <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                 <a class="btn btn-primary" href="<?= site_url('jurusan/auth/logout') ?>">Keluar</a>
             </div>
         </div>
     </div>
 </div>

 <!-- Logout Delete Confirmation-->
 <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Apa kamu yakin?</h5>
                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
             <div class="modal-footer">
                 <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                 <a id="btn-delete" class="btn btn-danger" href="#">Hapus</a>
             </div>
         </div>
     </div>
 </div>

 <!-- Login Succes  -->
 <div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered max-width-400" role="document">
         <div class="modal-content">
             <div class="modal-body text-center font-18">
                 <h3 class="mb-20">Login Sukses</h3>
                 <div class="mb-30 text-center"><img src="<?php echo base_url('assets_deskapp/vendors/images/success.png') ?>"></div>
             </div>
         </div>
     </div>
 </div>