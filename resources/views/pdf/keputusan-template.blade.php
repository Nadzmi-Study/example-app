<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <style>
            @page {
                margin: 0px;
            }

            body {
                font-family: sans-serif;
                font-size: small;
            }

            .page-break {
                page-break-after: always;
            }

            /* TODO: remove this style before deploy */
            img {
                border: 1px solid black;
            }

            .container {
                position: relative;
            }

            header {
                /* border: 1px solid green; */
            }

            .content {
                padding: 0 95px;
                /* border: 1px solid green; */
            }

            footer {
                position: absolute;
                bottom: 0;
                width: 100%;
                /* border: 1px solid green; */
            }

            /* .letter-content {
                border: 1px solid red;
            }
            .letter-content p, .letter-content div {
                border: 1px solid blue;
            } */
        </style>
    </head>
    <body>
        <div class="container">
            <!-- header -->
            <header>
                <table style="
                    width: 100%;
                    table-layout: auto;
                    padding: 0px;
                    border-collapse: collapse;">

                    <!-- uitm header -->
                    <tr>
                        <td style="
                            background-color: rgb(51, 53, 71);
                            position: relative;
                            padding: 0px;
                            margin: 0px;
                            height: 30px;">
                            <div style="
                                color: white;
                                float: right;
                                position: absolute;
                                bottom: 5px;
                                padding-right: 70px;
                                font-size: x-small;
                                font-family: serif;">
                                www.uitm.edu.my
                            </div>
                        </td>
                        <td style="
                            background-color: rgb(99, 45, 99);
                            width: 210px;
                            padding: 0px;
                            margin: 0px;
                            height: 30px;"></td>
                    </tr>

                    <br />

                    <!-- department info -->
                    <tr>
                        <td style="vertical-align: top;">
                            <div style="
                                text-align: right;
                                padding-right: 5px;
                                border-right: medium solid black;">
                                <img src="http://cdn.onlinewebfonts.com/svg/img_491006.png" width="150" height="60" />
                            </div>
                        </td>
                        <td style="vertical-align: top;">
                            <div style="
                                font-family: serif;
                                font-size: small;
                                padding-left: 5px">
                                <span style="color: rgb(99, 45, 99)"><b>Pejabat</b></span><br />
                                <b>Bendahari</b>
                            </div>
                        </td>
                    </tr>
                </table>
            </header>

            <br /><br /><br />

            <!-- content -->
            <div class="content">
                <!-- letter info -->
                <div style="padding-left: 350px;">
                    <table>
                        <tr>
                            <td>Surat Kami</td>
                            <td style="padding: 0 20px">:</td>
                            <td>{{ $letterSeriesNo }}</td>
                        </tr>
                        <tr>
                            <td>Tarikh</td>
                            <td style="padding: 0 20px">:</td>
                            <td>{{ $letterDate }}</td>
                        </tr>
                    </table>
                </div>

                <br />

                <!-- buyer info -->
                <div>
                    <table>
                        <tr>
                            <td>No K/P</td>
                            <td>:</td>
                            <td><b>{{ $buyerName }}</b></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><b>{{ $buyerAddress }}</b></td>
                        </tr>
                    </table>
                </div>

                <br />

                <div class="letter-content">
                    <p>Tuan/Puan</p>

                    <p><b>KEPUTUSAN TEMPAHAN NOMBOR PENDAFTARAN NO. SIRI UITM</b></p>

                    <p>Dengan hormatnya saya diarah merujuk kepada perkara diatas.</p>

                    <p>2.&#009;Sukacita dimaklumkan bahawa Unit Jualan nombor Pendaftaran Khas Kenderaan, universiti Teknologi MARA bersetuju meluluskan nombor pendaftaran tersebut kepada tuan/puan dengan harga <b>RM {{ $totalPrice }}</b>.</p>
                    <p>3.&#009;Tuan/puan hendaklah mendaftarkan kenderaan di Pejabat <b>Jabatan Pengangkutan Jalan (JPJ) Wangsa Maju, Kuala Lumpur atau Jabatan Pengangkutan Jalan (JPJ) Padang jawa, Shah Alam</b> selewat-lewatnya sebelum atau pada. jika nombor pendaftaran tersebut gagal didaftarkan dalam tempoh yang ditetapkan maka nombor pendaftaran tersebut akan ditarik balik dan bayaran yang telah dijelaskan tidak akan dikembalikan.</p>
                    <p>4.&#009;Sila kemukakan surat ini semasa tuan/puan membuat urusan pendaftaran kenderaan di Pejabat Jabatan Pengangkutan Jalan (JPJ).</p>


                    <br />
                    <p>Sekian, terima kasih.</p>
                    <br />

                    <p>
                        <b>"WAWASAN KEMAKMURAN BERSAMA 2030"</b>
                        <br /><br/>
                        <b>"BERKHIDMAT UNTUK NEGARA"</b>
                    </p>

                    <p>
                        Saya yang menjalankan amanah,
                        <div style="padding-left: 50px;">
                            <img src="http://cdn.onlinewebfonts.com/svg/img_491006.png" width="124" height="70" />
                        </div>
                        <b>WAN HASMADI BIN WAN MOHAMED</b><br />
                        Ketua Timbalan Bendahari
                    </p>
                </div>
            </div>

            <!-- footer -->
            <footer>
                <div style="padding-left: 250px;">
                    <table style="
                        table-layout: auto;
                        padding: 0px;
                        border-collapse: collapse;">
                        <tr>
                            <td style="vertical-align: top;">
                                <div style="
                                    font-family: serif;
                                    font-size: x-small;
                                    padding: 0 5px;
                                    border-right: medium solid black;">
                                    <b>Universityi Teknologi MARA</b><br />
                                    Aras 3, Bangunan Canseleri Tuanku Syed Sirajuddin<br />
                                    40450 Shah Alam, Selangor, MALAYSIA<br />
                                    Tel: (+603) 5544 2277 Faks: (+603) 5544 3302<br />
                                    Emel: <i>bendahari@salam.uitm.edu.my</i>
                                </div>
                            </td>
                            <td style="vertical-align: top;">
                                <div style="padding-left: 5px;">
                                    <img src="http://johor.uitm.edu.my/images/segamat/KORPORAT/logo/uitmdihatiku.png" width="107" height="30" /><br />
                                    <img src="http://johor.uitm.edu.my/images/segamat/KORPORAT/logo/uitmdihatiku.png" width="107" height="30" />
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <br />
            </footer>
        </div>
    </body>
</html>
