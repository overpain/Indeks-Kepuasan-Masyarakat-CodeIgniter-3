<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <form method="GET">
        <div class="row">
            <div class="col-2">
                <div class="input-group">
                    <input type="date" name="date_start" placeholder="input tanggal awal" value="<?= set_value('date_start'); ?>">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-fw fa-calendar-alt"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="input-group">
                    <input type="date" name="date_ended" placeholder="input tanggal akhir" value="<?= set_value('date_ended'); ?>">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-fw fa-calendar-alt"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-2">
                <button type="submit" class="btn btn-success">Search<i class="fas fa-fw fa-search"></i></button>
            </div>
            <div class="col-2 text-right">
                <a class="btn btn-danger mb-3" href=" <?php echo base_url('admin/pdf?date_start=' . $date_start . '&date_ended=' . $date_ended) ?>" target="_blank">
                    Export PDF<i class="fa fa-fw fa-file-pdf"></i></a>

            </div>

    </form>

    <br>
    <!-- batas tanggal -->

    <!-- batas file ori -->
    <!-- <div class="row"> -->
    <div class="col-lg-8">
        <!-- <a class="btn btn-danger mb-3" href=" <?php echo base_url('admin/pdf') ?>" target="_blank">
            <i class="fa fa-fw fa-file-pdf"></i>Export PDF</a> -->
        <table class="table table-striped table-hover">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">#</th>
                    <th scope="col">Polling</th>
                    <th scope="col">Tanggal</th>

                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($menu as $m) : ?>
                    <tr style="text-align: center;">
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $m['polling']; ?></td>
                        <td><?= $m['tanggal'] ?></td>

                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

        <table class="table table-info">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">Sangat Puas</th>
                    <th scope="col">Cukup Puas</th>
                    <th scope="col">Kurang Puas</th>
                </tr>
            </thead>

            <tbody>
                <tr style="text-align: center;">
                    <?php foreach ($graph as $m) : ?>

                        <td><?= $m->total_pol; ?></td>

                    <?php endforeach; ?>
                </tr>
            </tbody>
        </table>
    </div>
</div>