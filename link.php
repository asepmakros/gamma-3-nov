<?php 


if ($page == "arus_kas") {
    
    if ($aksi == "") {
      include "page/arus_kas/arus_kas.php";
    }
    if ($aksi == "tambah") {
      include "page/arus_kas/tambah.php";
    }
    if ($aksi == "hapus") {
      include "page/arus_kas/hapus.php";
    }
    if ($aksi == "ubah") {
      include "page/arus_kas/arus_kas.php";
    }
    
  }
if ($page == "penjualan") {
    
    if ($aksi == "") {
      include "https://ciwideyfood.com/app/penjualan/data_penjualan.php";
    }
    if ($aksi == "cek_invoice") {
      include "page/penjualan/cek_invoice.php";
    }
     if ($aksi == "cek_resi") {
      include "page/penjualan/cek_resi.php";
    }
     if ($aksi == "lacak_resi") {
      include "page/penjualan/resi/index.php";
    }
    if ($aksi == "grafik") {
        include "page/penjualan/grafik.php";
      }
    if ($aksi == "report_sales_harian") {
        include "page/penjualan/report_harian.php";
    }
    if ($aksi == "report_sales_mingguan") {
        include "page/penjualan/report_mingguan.php";
    }
    if ($aksi == "fix_kirim") {
        include "page/penjualan/fix_kirim.php";
    }
    if ($aksi == "no_fix") {
        include "page/penjualan/no_fix.php";
    }
    if ($aksi == "pack") {
        include "page/penjualan/pack.php";
    }
    if ($aksi == "kirim") {
        include "page/penjualan/fix.php";
    }
    if ($aksi == "index_klip") {
        include "page/penjualan/index_klip.php";
    }
    if ($aksi == "data_penjualan") {
        include "page/penjualan/data_penjualan.php";
    }
    if ($aksi == "data_penjualan_all") {
        include "page/penjualan/data_penjualan_all.php";
    }

    
  }
  
if ($page == "akun") {
    
    if ($aksi == "") {
      include "page/akun/akun.php";
    }
    if ($aksi == "tambah") {
      include "page/akun/tambah.php";
    }
    if ($aksi == "hapus") {
      include "page/akun/hapus.php";
    }
    if ($aksi == "ubah") {
      include "page/akun/akun.php";
    }
    
  }

 if ($page == "rekap") {
    if ($aksi == "") {
      include "page/rekap/rekap.php";
    } else
    if ($aksi == "reset") {
      include "page/rekap/reset.php";
    }else
    if ($aksi == "rincian") {
      include "page/rekap/rincian.php";
    }
  }

  if ($page == "produk") {
    if ($aksi == "") {
      include "page/produk/produk.php";
    }
    if ($aksi == "tambah") {
      include "page/produk/tambah.php";
    }
    if ($aksi == "hapus") {
      include "page/produk/hapus.php";
    }
    if ($aksi == "ubah") {
      include "page/produk/produk.php";
    }
  }
  if ($page == "kontrol_produksi") {
    if ($aksi == "") {
      include "page/kontrol_produksi/kontrol_produksi.php";
    }
    if ($aksi == "tambah") {
      include "page/kontrol_produksi/tambah.php";
    }
    if ($aksi == "hapus") {
      include "page/kontrol_produksi/hapus.php";
    }
    if ($aksi == "ubah") {
      include "page/kontrol_produksi/kontrol_produksi.php";
    }
  }
  if ($page == "produk_keluar") {
    if ($aksi == "") {
      include "page/penjualan/produk_keluar.php";
    }
    if ($aksi == "keluar") {
      include "page/penjualan/keluar.php";
    }
    if ($aksi == "batal") {
      include "page/penjualan/batal.php";
    }
    if ($aksi == "ubah") {
      include "page/penjualan/produk_keluar.php";
    }
  }
  if ($page == "nota") {
    if ($aksi == "") {
      include "page/nota/nota.php";
    }
    if ($aksi == "tambah") {
      include "page/nota/tambah.php";
    }
    if ($aksi == "hapus") {
      include "page/nota/hapus.php";
    }
    if ($aksi == "ubah") {
      include "page/nota/nota.php";
    }
    if ($aksi == "print") {
        include "page/nota/print.php";
      }
  }


  if ($page == "form") {
    if ($aksi == "") {
        include "form/form_penerimaan_produk.php";
    }
}

    if ($page == "stok_keluar") {
        if ($aksi == "") {
            include "form/form_produk_keluar.php";
        }

  }
  
  if ($page == "gudang") {
    if ($aksi == "") {
      include "page/gudang/gudang.php";
    }
    if ($aksi == "rekap") {
      include "page/gudang/rekap_stok_harian.php";
    }
    if ($aksi == "pack") {
      include "page/gudang/pack.php";
    }
    if ($aksi == "unpack") {
      include "page/gudang/unpack.php";
    }
    if ($aksi == "print") {
        include "page/gudang/print_packing.php";
      }
      if ($aksi == "berita_acara") {
        include "page/gudang/berita_acara.php";
      }
  }

  if ($page == "surat") {
    if ($aksi == "") {
      include "page/surat/surat.php";
    }
    if ($aksi == "surat") {
      include "page/surat/template_surat.php";
    }
    if ($aksi == "surat_jalan") {
      include "page/surat/surat_jalan.php";
    }
    if ($aksi == "hapus") {
      include "page/surat/hapus.php";
    }
    if ($aksi == "kwitansi") {
        include "page/surat/kwitansi.php";
      }
      if ($aksi == "invoice") {
        include "page/surat/invoice.php";
      }
      if ($aksi == "daftar_po") {
        include "page/surat/daftar_po.php";
      }
      if ($aksi == "hapus_po") {
        include "page/surat/hapus_po.php";
      }
  }

  if ($page == "produksi") {
    if ($aksi == "") {
      include "page/produksi/produksi.php";
    }
    if ($aksi == "tambah") {
      include "page/produksi/tambah.php";
    }
    if ($aksi == "hapus_bahan") {
      include "page/produksi/hapus_bahan.php";
    }
    if ($aksi == "ubah_bahan") {
        include "page/produksi/bahan.php";
      }
    if ($aksi == "bahan") {
        include "page/produksi/bahan.php";
      }
      if ($aksi == "rencana") {
        include "page/produksi/rencana.php";
      }
      if ($aksi == "belanja") {
        include "page/produksi/belanja.php";
      }
      if ($aksi == "hapus_belanja") {
        include "page/produksi/hapus_belanja.php";
      }
  }
?>