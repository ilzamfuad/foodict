
<section class="showroom-section">
            <div class="ui container">

                <?php 
                include('config/db.php');
                $query = mysql_query("select * from kategori", $connection);

                while($data = mysql_fetch_assoc($query)){
                ?>
                    <div class="buku-section">
                        <div class="ui red very padded segment" >
                            <div class="ui stackable grid">
                                <div class="eight wide column">
                                    <div class="ui left aligned header">
                                        <?= $data['kategori'] ?>
                                    </div>
                                </div>
                                <div class="eight wide column">
                                    <a href=<?php echo '"?p=content-book&data='.$data['id_kategori'].'"' ?> class="ui right floated inverted red button" id="button-lihat"'>Lihat Selengkapnya</a>
                                </div>
                            </div>

                            <div class="ui divider"></div>

                            <div class="ui container">
                                <div class="ui five stackable cards">
                                    <?php 

                                    $kategoridata = $data['id_kategori'];
                                    $querybuku = mysql_query("select * from buku WHERE id_kategori='$kategoridata' ORDER BY id_buku DESC LIMIT 0, 5", $connection);

                                    while($databuku = mysql_fetch_assoc($querybuku)){
                                        $string = strip_tags($databuku['deskripsi_buku']);
                                        if (strlen($string) > 100) {
                                                $stringCut = substr($string, 0, 100);
                                                $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';}
                                        echo '<div class="card">';
                                        echo '<a class="image" href="index.php?p=detail-book&buku='.$databuku['id_buku'].'">
                                            <img src="public/images/logo-sementara.png">
                                        </a>';
                                        echo '<div class="content">
                                                <a class="header" href="#">'.
                                                    $databuku['nama_buku'].
                                                '</a>
                                            <div class="description">'.
                                            $string
                                            .'</div>
                                            </div>';
                                        echo '</div>';
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>            

            </div>
        </section>