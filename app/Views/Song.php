<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Welcome to CodeIgniter 4!</title>
        <meta name="description" content="The small framework with powerful features">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Custom styles for this page -->
        <link href="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.css') ?> " rel="stylesheet">
    </head>
    
    <body>
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Songs</h1>
            <?php
                if(session()->getFlashData('success')){
                ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= session()->getFlashData('success') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
                }
                ?>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
                    Add Song
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Duration</th>
                                    <th>Singer</th>
                                    <th>Label</th>
                                    <th>ReleaseDate</th>
                                    <th>Album</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($songs as $key => $song) : ?>
                                <tr>
                                    <td><?= ++$key ?></td>
                                    <td><?= $song['title'] ?></td>
                                    <td><?= $song['duration'] ?></td>
                                    <td><?= $song['singer'] ?></td>
                                    <td><?= $song['label'] ?></td>
                                    <td><?= $song['releaseDate'] ?></td>
                                    <td><?= $song['album'] ?></td>
                                    <td>
                                        NA
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Song Modal -->
        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Song</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('song') ?>" method="post">
                    <?= csrf_field(); ?>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name">Title</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Song Title" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Duration</label>
                                <input type="text" name="duration" class="form-control" id="duration" placeholder="Song Duration" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Singer</label>
                                <input type="text" name="singer" class="form-control" id="singer" placeholder="Song Singer" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Label</label>
                                <input type="text" name="label" class="form-control" id="label" placeholder="Song Label" required>
                            </div>
                            <div class="form-group">
                                <label for="releaseDate">Release</label>
                                <input type="date" name="releaseDate" class="form-control" id="releaseDate" placeholder="Song releaseDate" required>
                            </div>
                            <div class="form-group">
                                <label for="album">Album</label>
                                <input type="text" name="album" class="form-control" id="album" placeholder="Song album" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Page level plugins -->
        <script src="<?= base_url('assets/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
        <script src="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>
        <!-- Page level custom scripts -->
        <script>
            // Call the dataTables jQuery plugin
            $(document).ready(function() {
              $('#dataTable').DataTable();
            });
        </script>
    </body>
</html>