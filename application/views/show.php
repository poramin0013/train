<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php require('nav.php'); ?>
<?php require('boot.php'); ?>

<body>
    <div class="form-group" align="center">
        <div class="card w-100 " style="border-color:#708090">
            <div class="card-body " style="background-color:#F0F8FF">
                <div class="container">



                    <table class="table">
                        <thead class="thead" style="background-color: #2F4F4F ; color :white">
                            <tr>
                                <th scope="col">
                                    <a style="font-family:TH Sarabun New;">ขบวน</a>
                                </th>
                                <th scope="col">
                                    <a style="font-family:TH Sarabun New;">สถานีต้นทาง</a>
                                </th>
                                <th scope="col">
                                    <a style="font-family:TH Sarabun New;">เวลาออกจากสถานีต้นทาง</a>
                                </th>
                                <th scope="col">
                                    <a style="font-family:TH Sarabun New;">ถึงห้วยราช</a>
                                </th>
                                <th scope="col">
                                    <a style="font-family:TH Sarabun New;">ออกจากห้วยราช</a>
                                </th>
                                <th scope="col">
                                    <a style="font-family:TH Sarabun New;">สถานีปลายทาง</a>
                                </th>
                                <th scope="col">
                                    <a style="font-family:TH Sarabun New;">ถึงสถานีปลายทางเวลา</a>
                                </th>
                                <th scope="col">
                                    <a style="font-family:TH Sarabun New;">หมายเหตุ</a>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="tbody" style="background-color: #8FBC8F ; ">
                            <?php

                            foreach ($query->result_array() as $row) {
                            ?>
                                <tr>
                                    <td>
                                        <a style="font-family:TH Sarabun New;"><?php echo $row['procession'] ?></a>
                                    </td>
                                    <td>
                                        <a style="font-family:TH Sarabun New;"><?php echo $row['Departure_station'] ?></a>
                                    </td>
                                    <td>
                                        <a style="font-family:TH Sarabun New;"><?php echo $row['Time_out'] ?></a>
                                    </td>
                                    <td>
                                        <a style="font-family:TH Sarabun New;"><?php echo $row['To_huayrat'] ?></a>
                                    </td>
                                    <td>
                                        <a style="font-family:TH Sarabun New;"><?php echo $row['Out_huayrat'] ?></a>
                                    </td>
                                    <td>
                                        <a style="font-family:TH Sarabun New;"><?php echo $row['Terminal'] ?></a>
                                    </td>
                                    <td>
                                        <a style="font-family:TH Sarabun New;"><?php echo $row['To_terminal'] ?></a>
                                    </td>
                                    <td>
                                        <a style="font-family:TH Sarabun New;"><?php echo $row['note'] ?></a>
                                    </td>

                                </tr>
                            <?php
                            };
                            ?>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>

</body>

</html>