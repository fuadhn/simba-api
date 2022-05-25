<?php
header('Content-Type: application/json; charset=utf-8');

$bearer_token = "Bearer $2y$10$2DkIHkWoYvCH.U2U.2dCi.SrDITVitZrJhQGaSrFQ3Hcsn/RnwXOe";
$url = "https://insitu.fk.ub.ac.id/api/auth/synckegiatandrris";

$pasien = array(
  'id'          => '-',
  'klinisi'     => '-',
  'klinis'      => '-',
  'nama'        => 'Muldoko',
  'tgl'         => '1991-01-20',
  'jk'          => 'Laki-laki',
  'telpon'      => '-',
  'noregister'  => '001',
  'usia'        => '31',
  'berat'       => '67',
  'urgensi'     => '-',
  'reques'      => '-',
  'ruangan'     => '-',
  'daftar'      => '-',
  'status'      => '-',
  'asalpasien'  => '-',
  'ppdssenior'  => '-',
  'middleppds'  => '-',
  'ppdsjunior'  => '-',
  'middleppds2' => '-',
  'ppdsjunior2' => '-',
  'radiografer' => '-',
  'excutor'     => '-',
  'keterangan'  => '-',
  'kesimpulan'  => '-',
  'verifikasi'  => '-',
  'dokter'      => '-',
  'modality'    => '-',
  'diagnosa'    => '-',
  'diagnosa2'   => '-',
  'kilovolt'    => '-',
  'mas'         => '-',
  'dlp'         => '-'
);

$body = array(
  'arraylist'       => json_encode($pasien),
  'set01'           => '218071500011002@ub.ac.id',
  'set02'           => 'bismillah',
  'nim'             => '218071500011002', // field: listallmahasiswa->nip_baru
  'idps'            => 23, // field: listallmahasiswa->program_studi
  'tanggal'         => '2022-05-24',
  'waktu'           => '09:10 PM',
  'topik'           => 1355, // field: listalljeniskegiatan->id <===> listalljeniskegiatan->prodi [IN] listallmahasiswa->prodihomebase
  'masterno'        => 37, // field: listallpejabat->no <===> listallpejabat->program_studi [IN] listallmahasiswa->program_studi
  'deskripsi'       => 'Deskripsi',
  'kodejenis'       => 204309, // field: listallkegiatan->kode
  'durasi'          => '1 jam 30 menit', // bebas
  'rumahsakit'      => 'RS Bakti Mulya',
  'rumahsakitnama'  => 'RS Lain',
  'idne'            => 'Kegiatan Baru',
  'laborat'         => 'Departemen Baru',
  'spvlain'         => 'Dr Widodo',
  'jumlah'          => '1', // format?
  'spv2'            => 292, // field: listallpejabat->no <===> listallpejabat->program_studi [IN] listallmahasiswa->program_studi
  'spv3'            => 291, // field: listallpejabat->no <===> listallpejabat->program_studi [IN] listallmahasiswa->program_studi
  'role'            => 'Observer',
  'role2'           => 'PPDS JUNIOR',
  'semester'        => 'Genap 2021/2022', // bebas
  'val21'           => 'Stase Baru', // Input nama stase
);

$headers = array(
  'Accept: application/json',
  'Content-type: application/json',
  'Authorization: ' . $bearer_token,
);

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,  0);
curl_setopt($curl, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );        
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($body));
$response = curl_exec($curl);
curl_close($curl);

echo $response;