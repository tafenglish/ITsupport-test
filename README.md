<style>
    // google font subsetting, see Heydon Pickering's: http://www.sitepoint.com/joy-of-subsets-web-fonts/
    @import url('//fonts.googleapis.com/css?family=Pacifico&text=Pure');
    @import url('//fonts.googleapis.com/css?family=Roboto:700&text=css');
    @import url('//fonts.googleapis.com/css?family=Kaushan+Script&text=!');

    body { 
      min-height: 450px;
      height: 100vh;
      margin: 0;
      background: radial-gradient(circle, darken(dodgerblue, 10%), #1f4f96, #1b2949, #000);
    }

    .stage {
      height: 300px;
      width: 500px;
      margin: auto;
      position: absolute;
      top: 0; right: 0; bottom: 0; left: 0;
      perspective: 9999px;
      transform-style: preserve-3d;
    }

    .layer {
      width: 100%;
      height: 100%;
      position: absolute;
      transform-style: preserve-3d;
      animation: ಠ_ಠ 5s infinite alternate ease-in-out -7.5s;
      animation-fill-mode: forwards;
      transform: rotateY(40deg) rotateX(33deg) translateZ(0);
    }

    .layer:after {
      font: 150px/0.65 'Pacifico', 'Kaushan Script', Futura, 'Roboto', 'Trebuchet MS', Helvetica, sans-serif;
      content: 'Pure\A    css!';
      white-space: pre;
      text-align: center;
      height: 100%;
      width: 100%;
      position: absolute;
      top: 50px; 
      color: darken(#fff, 4%);
      letter-spacing: -2px;
      text-shadow: 4px 0 10px hsla(0, 0%, 0%, .13);
    }

    $i: 1;
    $NUM_LAYERS: 20;
    @for $i from 1 through $NUM_LAYERS {
      .layer:nth-child(#{$i}):after{
        transform: translateZ(($i - 1) * -1.5px);
      }
    }

    .layer:nth-child(n+#{round($NUM_LAYERS/2)}):after {
      -webkit-text-stroke: 3px hsla(0, 0%, 0%, .25);
    }

    .layer:nth-child(n+#{round($NUM_LAYERS/2 + 1)}):after {
      -webkit-text-stroke: 15px dodgerblue;
      text-shadow: 6px 0 6px darken(dodgerblue,35%),
                   5px 5px 5px darken(dodgerblue,40%),
                   0 6px 6px darken(dodgerblue,35%);
    }

    .layer:nth-child(n+#{round($NUM_LAYERS/2 + 2)}):after {
      -webkit-text-stroke: 15px darken(dodgerblue, 10%);
    }

    .layer:last-child:after {
      -webkit-text-stroke: 17px hsla(0, 0%, 0%, .1);
    }

    .layer:first-child:after{
      color: #fff;
      text-shadow: none;
    }

    @keyframes ಠ_ಠ {
      100% { transform: rotateY(-40deg) rotateX(-43deg); }
    }
</style>
# IT Support Test (PT. Karya Laili Mendunia)
Hai para calon staff PT. Karya Laili Mendunia
Selamat karena telah menyelesaikan 2<sup>nd</sup> Interview.

Anda perlu menyelesaikan tes terakhir dari kami, cukup ikuti petunjuk dan mulai berkreasi!

<h2>Petunjuk tes :</h2>
• Ada 2 folder yang harus Anda kerjakan yaitu "admin" dan "user"

<h3>Pada folder "admin" :</h3>
• Perbaiki tombol "edit" yang ada di tabel agar bisa memilih kunci yang sesuai dengan database setelah di klik<br>
• Tambahkan fungsi untuk menyimpan data yang ingin diedit tadi dengan query UPDATE<br>
• Kosongkan form setelah tombol submit ter-klik

<h3>Pada folder "user" :</h3>
• Saat soal sudah habis, tampilkan score yang diperoleh<br>
• Tambahkan fungsi hitung score dengan ketentuan jumlah_soal / jumlah_benar * 100

<h2>Tambahan :</h2>
• Ada beberapa error yang harus diperbaiki<br>
• Jangan mengubah kode terlalu banyak, tapi boleh menambahi sebanyak mungkin<br>
• Persingkat kode sebisa mungkin<br>
• Perbaikan UI/UX akan menjadi nilai lebih

<h2>Cara pengumpulan :</h2>
• Kirim file dengan bentuk \*.zip ke nomor HRD/HCD (+62 882-0096-78071) yang mengundang kamu untuk 1<sup>st</sup> Interview dengan format <b>NAMA_TANGGAL 2ND INTERVIEW_POSISI YANG DILAMAR (IT_SUPPORT)</b><br>
• Waktu pengiriman paling lambat H+1 setelah 2<sup>nd</sup> Interview 
