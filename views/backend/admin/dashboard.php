<?php
ob_start(); // Start output buffering
?>
<a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#modal-danger">
                    Danger modal
                  </a>


        <div class="row row-deck row-cards">
                <div class="col-sm-6 col-lg-3">
                  <div class="card">
                    <div class="card-body" style="height: 10rem"></div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                  <div class="card">
                    <div class="card-body" style="height: 10rem"></div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                  <div class="card">
                    <div class="card-body" style="height: 10rem"></div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                  <div class="card">
                    <div class="card-body" style="height: 10rem"></div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="row row-cards">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-body" style="height: 10rem"></div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="card">
                        <div class="card-body" style="height: 10rem"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-body" style="height: 10rem"></div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card">
                    <div class="card-body" style="height: 10rem"></div>
                  </div>
                </div>
                <div class="col-md-12 col-lg-8">
                  <div class="card">
                    <div class="card-body" style="height: 10rem"></div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body" style="height: 10rem"></div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-body" style="height: 10rem"></div>
                  </div>
                </div>
                <div class="col-md-12 col-lg-8">
                  <div class="card">
                    <div class="card-body" style="height: 10rem"></div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card">
                    <div class="card-body" style="height: 10rem"></div>
                  </div>
                </div>
              </div>


              <?php
$content = ob_get_clean(); // Capture the output and clean the buffer

// Include the layout file
require 'layouts/layout.php';
?>