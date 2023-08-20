<?php
ob_start(); // Start output buffering
?>
<div class="row row-cards">
    <div class="col-12">



    <div class="card">
    <table class="table table-vcenter card-table scrollable-table">
        <thead>
            <tr>
                <th>Name/Username</th>
                <th>Email/Phone</th>
                <th>Country/State</th>
                <th>Role</th>
                <th>Status</th>
                <th>Reg Date</th>
                <th class="w-1"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) { ?>
                <tr>
                    <td data-label="Name">
                        <div class="d-flex py-1 align-items-center">
                            <span class="avatar me-2" style="background-image: url(<?php echo $user["profile_picture_url"]; ?>)"></span>
                            <div class="flex-fill">
                                <div class="font-weight-medium"><?php echo $user["full_name"]; ?></div>
                                <div class="text-muted">
                                    <?php
                                    if (!empty($user['username'])) {
                                        echo '<a href="#" class="text-reset">' . $user["username"] . '</a>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td data-label="Email">
                        <div><?php echo $user["email"]; ?></div>
                        <div class="text-muted"><?php echo $user["phone"]; ?></div>
                    </td>
                    <td class="text-muted" data-label="Country/State">
                        <div class="font-weight-medium"><?php echo $user["country"]; ?></div>
                        <div class="text-muted"><a href="" class="text-reset"><?php echo $user["state"]; ?></a></div>
                    </td>
                    <td class="text-muted" data-label="Role"><?php echo $user["user_type"]; ?></td>
                    <td class="text-muted" data-label="Status"><?php echo $user["user_status"]; ?></td>
                    <td class="text-muted" data-label="Reg Date"><?php echo $user["registration_date"]; ?></td>
                    <td>
                        <div class="btn-list flex-nowrap">
                            <a href="/admin/user/edit/<?php echo !empty($user['username']) ? $user['username'] : $user['user_id']; ?>" class="btn">Edit</a>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown">Actions</button>
                                <div class="dropdown-menu dropdown-menu-end">
                                <?php if ($user['user_status'] === 'Inactive') { ?>
                                        <a class="dropdown-item" href="/admin/user/status/<?php echo !empty($user['username']) ? $user['username'] : $user['user_id']; ?>">Activate</a>
                                    <?php } else { ?>
                                        <a class="dropdown-item" href="/admin/user/status/<?php echo !empty($user['username']) ? $user['username'] : $user['user_id']; ?>">Deactivate</a>
                                    <?php } ?>
                                    <a class="dropdown-item" href="/admin/user/delete/<?php echo $user['user_id']; ?>">Delete</a>
                                    <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-delete">Delete</a>
                                </div>
                                <div class="modal modal-blur fade" id="modal-delete" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="modal-status bg-danger"></div>
                        <div class="modal-body text-center py-4">
                            <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.24 3.957l-8.422 14.06a1.989 1.989 0 0 0 1.7 2.983h16.845a1.989 1.989 0 0 0 1.7 -2.983l-8.423 -14.06a1.989 1.989 0 0 0 -3.4 0z" /><path d="M12 9v4" /><path d="M12 17h.01" /></svg>
                            <h3>Are you sure?</h3>
                            <div class="text-muted">Do you really want to delete this user? What you want to do cannot  be undone.</div>
                        </div>
                        <div class="modal-footer">
                            <div class="w-100">
                            <div class="row">
                                <div class="col"><a href="#" class="btn w-100" data-bs-dismiss="modal">
                                    Cancel
                                </a></div>
                                <div class="col"><a href="/admin/user/delete/<?php echo $user['user_id']; ?>" class="btn btn-danger w-100">
                                    Delete
                                </a>
                            </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                
            <?php } ?>
        </tbody>
    </table>
</div>




    </div>
</div>



              <?php
$content = ob_get_clean(); // Capture the output and clean the buffer

// Include the layout file
require 'layouts/layout.php';
?>