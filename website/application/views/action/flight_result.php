<div class="arrival">
    <header>
        <img src="<?php echo base_url(); ?>assets/images/airplane.png">
        مشهد به تهران
    </header>
    <div class="result">
        <?php foreach ($flight as $row) { ?>
            <table>
                <thead>
                    <tr>
                        <td>انتخاب</td>
                        <td class="airline">ایرلاین</td>
                        <td>تاریخ پرواز</td>
                        <td>شماره پرواز</td>
                        <td>حرکت</td>
                        <td>توقف</td>
                        <td>قیمت(تومان)</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="radio"></td>
                        <td class="airline"><img src="<?php echo base_url(); ?><?php echo $row[''] ?>"></td>
                        <td><?php echo $row[''] ?></td>
                        <td><?php echo $row[''] ?></td>
                        <td><?php echo $row[''] ?></td>
                        <td><?php echo $row[''] ?></td>
                        <td><?php echo $row[''] ?></td>
                    </tr>
                </tbody>
            </table>
        <?php } ?>
    </div>
</div>

<div class="arrival">
    <header>
        <img src="<?php echo base_url(); ?>assets/images/airplane.png">
        تهران به مشهد
    </header>
    <div class="result">
        <?php foreach ($flight as $row) { ?>
            <table>
                <thead>
                    <tr>
                        <td>انتخاب</td>
                        <td class="airline">ایرلاین</td>
                        <td>تاریخ پرواز</td>
                        <td>شماره پرواز</td>
                        <td>حرکت</td>
                        <td>توقف</td>
                        <td>قیمت(تومان)</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="radio"></td>
                        <td class="airline"><img src="<?php echo base_url(); ?><?php echo $row[''] ?>"></td>
                        <td><?php echo $row[''] ?></td>
                        <td><?php echo $row[''] ?></td>
                        <td><?php echo $row[''] ?></td>
                        <td><?php echo $row[''] ?></td>
                        <td><?php echo $row[''] ?></td>
                    </tr>
                </tbody>
            </table>
        <?php } ?>
    </div>
</div>