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
                border: 1px solid green;
            }

            footer {
                position: absolute;
                bottom: 0;
                width: 792px;
                border: 1px solid green;
            }

            .uitm-header {
                /* border: 1px solid red; */
            }
            .uitm-header div {
                height: 30px;
                vertical-align: top;
                display: inline-block;
            }
            #uitm-website {
                float: right;
                margin-right: 50px;
                /* vertical-align: bottom; */
                border: 1px solid blue;
            }

            .department-info-header {
                padding-left: 420px;
                border: 1px solid red;
            }
            .department-info-header div {
                display: inline-block;
                vertical-align: top;
                margin: 0 3px;
                border: 1px solid blue;
            }

            .letter-info {
                padding-left: 400px;
                border: 1px solid red;
            }
            .letter-info table {
                border: 1px solid blue;
            }

            .buyer-info {
                border: 1px solid red;
            }
            .buyer-info table {
                border: 1px solid blue;
            }

            .letter-content {
                border: 1px solid red;
            }
            .letter-content p {
                border: 1px solid blue;
            }

            .department-info-footer {
                padding: 0 80px;
                border: 1px solid red;
            }
            .department-info-footer div {
                display: inline-block;
                vertical-align: top;
                margin: 0 3px;
                border: 1px solid blue;
            }

            .department-address {
                font-family: serif;
                font-size: x-small;
            }

            .reference {
                padding: 100px 95px;
                border: 1px solid red;
            }
            .reference p, .reference ol {
                border: 1px solid blue;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <!-- header -->
            <header>
                <table style="
                    width: 100%
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
                                bottom: 0px;
                                padding-right: 70px;
                                font-size: x-small;
                                font-family: serif;">
                                www.uitm.edu.my
                            </div>
                        </td>
                        <td style="
                            background-color: rgb(99, 45, 99);
                            width: 250px;
                            padding: 0px;
                            margin: 0px;
                            height: 30px;"></td>
                    </tr>

                    <br />

                    <!-- department info -->
                    <tr>
                        <td style="position: relative;">
                            <div style="
                                text-align: right;
                                padding-right: 5px;
                                border-right: 2px solid black;">
                                <img src="https://logos-download.com/wp-content/uploads/2017/11/UiTM_Universiti_Teknologi_MARA_logo.png" width="150" height="60" />
                            </div>
                        </td>
                        <td style="position: relative;">
                            <div style="
                                font-family: serif;
                                font-size: x-small;
                                position: absolute;
                                top: 0px;
                                padding-left: 5px">
                                <span style="color: rgb(99, 45, 99)"><b>Unit Jualan</b></span><br />
                                <b>Nombor Pendaftaran Khas</b><br />
                                <b>Kenderaan UiTM</b>
                            </div>
                        </td>
                    </tr>
                </table>
            </header>

            <br /><br /><br />

            <!-- content -->
            <div class="content">
                <!-- letter info -->
                <div class="letter-info">
                    <table>
                        <tr>
                            <td><b>No. Siri</b></td>
                            <td><b>:</b></td>
                            <td><b>{{ $letterSeriesNo }}</b></td>
                        </tr>
                        <tr>
                            <td>Tarikh</td>
                            <td>:</td>
                            <td>{{ $letterDate }}</td>
                        </tr>
                    </table>
                </div>

                <br />

                <!-- buyer info -->
                <div class="buyer-info">
                    <table>
                        <tr>
                            <td>No K/P</td>
                            <td>:</td>
                            <td><b>{{ $buyerIc }}</b></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><b>{{ $buyerName }}</b></td>
                        </tr>
                    </table>
                </div>

                <br />

                <div class="letter-content">
                    <p>Tuan/Puan</p>

                    <p><b>KEPUTUSAN TEMPAHAN NOMBOR PENDAFTARAN NO. SIRI UITM 28</b></p>

                    <p>Dengan hormatnya saya diarah merujuk kepada perkara diatas.</p>

                    <p>2.&#009;Sukacita dimaklumkan bahawa Unit Jualan nombor Pendaftaran Khas Kenderaan, universiti Teknologi MARA bersetuju meluluskan nombor pendaftaran tersebut kepada tuan/puan dengan harga <b>RM {{ $price }}</b>.</p>
                    <p>3.&#009;Tuan/puan hendaklah mendaftarkan kenderaan di Pejabat <b>Jabatan Pengangkutan Jalan (JPJ) Wangsa Maju, Kuala Lumpur atau Jabatan Pengangkutan Jalan (JPJ) Padang jawa, Shah Alam</b> selewat-lewatnya sebelum atau pada <b>{{ $expiryDate }}</b>. jika nombor pendaftaran tersebut gagal didaftarkan dalam tempoh yang ditetapkan maka nombor pendaftaran tersebut akan ditarik balik dan bayaran yang telah dijelaskan tidak akan dikembalikan.</p>
                    <p>4.&#009;Sila kemukakan surat ini semasa tuan/puan membuat urusan pendaftaran kenderaan di Pejabat Jabatan Pengangkutan Jalan (JPJ).</p>

                    <p>Sekian, terima kasih.</p>

                    <p>
                        <b>"WAWASAN KEMAKMURAN BERSAMA 2030"</b>
                        <br /><br/>
                        <b>"BERKHIDMAT UNTUK NEGARA"</b>
                    </p>

                    <p>
                        Saya yang menjalankan amanah,<br />
                        <img src="http://cdn.onlinewebfonts.com/svg/img_491006.png" width="124" height="70" /><br />
                        <b>WAN HASMADI BIN WAN MOHAMED</b><br />
                        Ketua Timbalan Bendahari
                    </p>
                </div>
            </div>

            <!-- footer -->
            <footer>
                <div class="department-info-footer">
                    <div>
                        <img src="http://cdn.onlinewebfonts.com/svg/img_491006.png" alt="test" width="107" height="60" />
                    </div>
                    <div class="department-address">
                        <b>Unit Jualan Nombor Pendaftaran Khas Kenderaan UiTM</b><br />
                        Universiti teknologi MARA<br />
                        Jabatan Pengurusan Perolehan dan Aset<br />
                        Pejabat bendahari<br />
                        40450 Shah Alam, Selangor, MALAYSIA<br />
                        Tel: (+603) 5544 3345<br />
                        E-mel: <i>uitmbid@uitm.edu.my</i>
                    </div>
                    <div style="
                        width: 1px;
                        height: 60px;
                        background-color: black;"></div>
                    <div>
                        <img src="http://cdn.onlinewebfonts.com/svg/img_491006.png" width="107" height="60" />
                    </div>
                </div>

                <br />
            </footer>

            <div class="page-break"></div>

            <div class="reference">
                <p>s.k :</p>
                <ol>
                    <li>
                        <p>
                            Pengarah<br />
                            Jabatan Pengangkutan Jalan<br />
                            Negeri Selangor<br />
                            Jalan Padang Jawa<br />
                            Seksyen 16<br />
                            <b>40620 SHAH ALAM, SELANGOR</b>
                        </p>
                    </li>
                    <li>
                        <p>
                            Pengarah<br />
                            Jabatan Pengangkutan Jalan<br />
                            Wilayah Persekutuan Kuala Lumpur<br />
                            Lot 14264 Jalan genting Klang<br />
                            <b>53300 SETAPAK, KUALA LUMPUR</b>
                        </p>
                    </li>
                </ol>
            </div>
        </div>
    </body>
</html>
