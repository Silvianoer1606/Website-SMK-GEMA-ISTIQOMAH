<main>
    <div id="content">
        <article id="BPBD" class="card">
            <div class="auto">
            <form action="BPBD.php" method="get">
            <div class="cari">
                        <input type="submit" class="btn btn-primary" value="Cari">
                        <input type="text" name="cari">
                        <?php 
                        if(isset($_GET['cari'])){
                        $cari = $_GET['cari'];
                        echo "<br><b>Hasil pencarian : ".$cari."</b>";
                        }
                        ?>  
                    </div>
                        <hr>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama File</th>
                                <th>Nama Layanan</th>
                                <th>Delete</th>
                                <th>Download</th>
                            </tr>
                            <?php 
                                if(isset($_GET['cari'])){
                                $cari = $_GET['cari'];
                                $squery = mysqli_query($koneksi,"select * from tb_data where nama_file like '%".$cari."%'");    
                                }else {
                                    $squery= mysqli_query($koneksi,"select * from tb_data where nama_layanan='BPBD'");
                                }
                                $no = 1;
                                while($d = mysqli_fetch_array($squery)){
                                ?>
                            </thead>
                            <tbody>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $d["nama_file"];?></td>
                                <td><?php echo $d["nama_layanan"];?></td>
                                <td>
                                <a href='?id=<?php echo $d["id"]?>'href="delete.php?id=<?=$row['id'];?>" onclick="return confirm('Anda yakin akan menghapus file ini?')"class="btn btn-danger">Delete</a>
                                </td>
                                <td>
                                    <a href="../download.php?filename=<?php echo $d["nama_file"];?>" class="btn btn-primary">Download</a>
                                </td>
                             </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                   </div>
                   <div class="upload">
                    <div class="">
                    </form>
                    <form action="BPBD.php" method="POST" enctype="multipart/form-data">
                    <select name="text">
                        <option value="">--Pilih Hobi--</option>
                        <option value="Pertanian">1. Pertanian</option>
                        <option value="Pendidikan">2. Pendidikan</option>
                        <option value="Kesehatan">3. Kesehatan</option>
                        <option value="Keuangan">4. Keuangan</option>
                        <option value="Pariwisata & Kebudayaan">5. Pariwisata & Kebudayaan</option>
                        <option value="Kependudukan">6. Kependudukan</option>
                        <option value="Lingkungan Hidup">7. Lingkungan Hidup</option>
                        <option value="Perhubungan">8. Perhubungan</option>
                        <option value="Hukum">9. Hukum</option>
                        <option value="Pemerintahan">10. Pemerintahan</option>
                        <option value="Sosial & Ketenagakerjaan">11. Sosial & Ketenagakerjaan</option>
                        <option value="Pekerjaan Umum">12. Pekerjaan Umum</option>
                        <option value="BPBD" selected>13. BPBD</option>
                        <option value="Komunikasi & Informatika">14. Komunikasi & Informatika</option>
                        <option value="Kearsipan & Perpustakaan">15. Kearsipan & Perpustakaan</option>
                        <option value="Ekonomi">16. Ekonomi</option>
                        <option value="Pangan">17. Pangan</option>
                        <option value="Perdagangan">18. Perdagangan</option>
                        <option value="Ketenagakerjaan">19. Ketenagakerjaan</option>
                        <option value="Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu">20. Dinas Penanaman Modal...</option>
                        <option value="Dinas Kepegewaian dan Pengembangan SDM">21. Dinas Kepegewaian dan...</option>
                        <option value="Sekretariat Daerah">22. Sekretariat Daerah</option>
                        <option value="Kantor Kesatuan Bangsa">23. Kantor Kesatuan Bangsa</option>
                        <option value="Dinas Perumahan dan Kawasan Pemukiman">24. Dinas Perumahan dan...</option>
                        <option value="Badan Perencanaan Pembangunan Daerah">25. Badan Perencanaan Pemb...</option>
                        <option value="Inspektorat">26. Inspektorat</option>
                        <option value="Satuan Polisi Pamong Praja">27. Satuan Polisi Pamong...</option>
                        <option value="Sekretariat Dewan Perwakilan Rakyat Daerah">28. Sekretariat Dewan Per...</option>
                        </select>
                            <input type="file" name="file">
                                <input type="submit" name="upload" value="Upload">
                            </form>
                    <!-- <p>Input Data </p> -->
                </div>
        </article>
    </div>
            </div>
        </article>
    </div>