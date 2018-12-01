<?php

echo 
"<!DOCTYPE html>
            <html lang=\"en\">
            <body style=\"background-color:rgba(158, 158, 158, 0.1) !important;\">
                <table style=\"width:100%;\">
                    <tr>
                        <td style=\"width:10%;\"></td>
                        <td style=\"width:80%;\">
                            <div style=\"width:100%; border-radius:5px;background-color:#FFF; padding:15px; margin-top:10px; margin-bottom:10px;\">
                                <table style=\"width:100%;\">
                                    <tr>
                                        <td style=\"background:#4285F4; height:50px; width:2px;\"></td>
                                        <td>
                                            <table style=\"width:100%;\">
                                                <tr>
                                                    <td>
                                                        <div style=\"padding:10px; font-size:20px;\">
                                                            Anda telah mendapatkan pemberitahuan dari ahligizi.id
                                                        </div>
                                                    </td>
                                                    <td style=\"text-align:right;\">
                                                        <img src=\"ahligizi.id/assets/img/ahligizi_logo.png\" width=\"180px\">
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <hr><br><br><br><br>
                                <div style=\"width:100%; background-color:rgba(3, 169, 244, 0.1) !important; border-radius:5px; box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);\">
                                    <div style=\"padding:5%;\">
                                        <i><b>".
                                        "pertanyaan->pr_pertanyaan".
                                        "</b><hr>".
                                        "nama"." : \""."_SESSION['km_komentar_notif']"
                                        ."\"</i><br><br>
                                        <a href=\"ahligizi.id/index.php/pertanyaan/detailpertanyaan/"."pertanyaan->pr_id"."/"."from_page"."\" style=\"color:#4f4f4f; text-decoration:none;\">
                                            -- balas komentar
                                        </a>
                                    </div>
                                </div>
                                <br><br><br><br><hr>
                                <table>
                                    <tr>
                                        <td style=\"background:#ffbb33; height:100px; width:2px;\"></td>
                                        <td style=\"padding:20px;\">
                                            Mohon jangan membalas email ini, isikan komentar Anda di kolom komentar pada halaman berikut <br>
                                            ahligizi.id/index.php/pertanyaan/detailpertanyaan/"."pertanyaan->pr_id"."/"."from_page"."
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                        <td style=\"width:10%;\"></td>
                    </tr>
                </table>
            </body>
            </html>
    ";

?>