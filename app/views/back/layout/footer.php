<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
    <div class="container-xxl">
        <div class="footer-container d-flex align-items-center justify-content-center py-4 flex-md-row flex-column">
            <div class="text-body">
                &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script>
                , LPPM MU
            </div>
        </div>
    </div>
</footer>
<!-- / Footer -->

<div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>

<!-- Drag Target Area To SlideIn Menu On Small Screens -->
<div class="drag-target"></div>
</div>
<!-- / Layout wrapper -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/theme.js -->

<script src="<?= ASSETS_URL ?>back/vendor/libs/jquery/jquery.js"></script>

<script src="<?= ASSETS_URL ?>back/vendor/libs/popper/popper.js"></script>
<script src="<?= ASSETS_URL ?>back/vendor/js/bootstrap.js"></script>
<script src="<?= ASSETS_URL ?>back/vendor/libs/node-waves/node-waves.js"></script>

<script src="<?= ASSETS_URL ?>back/vendor/libs/@algolia/autocomplete-js.js"></script>

<script src="<?= ASSETS_URL ?>back/vendor/libs/pickr/pickr.js"></script>

<script src="<?= ASSETS_URL ?>back/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="<?= ASSETS_URL ?>back/vendor/libs/hammer/hammer.js"></script>

<script src="<?= ASSETS_URL ?>back/vendor/libs/i18n/i18n.js"></script>

<script src="<?= ASSETS_URL ?>back/vendor/js/menu.js"></script>

<!-- endbuild -->

<!-- Vendors JS -->
<?php if (!empty($_REQUEST) && $_REQUEST["url"] == "Dashboard"): ?>
    <script src="<?= ASSETS_URL ?>back/vendor/libs/apex-charts/apexcharts.js"></script>
<?php endif; ?>
<script src="<?= ASSETS_URL ?>back/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
<!-- Flat Picker -->
<script src="<?= ASSETS_URL ?>back/vendor/libs/moment/moment.js"></script>
<script src="<?= ASSETS_URL ?>back/vendor/libs/flatpickr/flatpickr.js"></script>
<script src="<?= ASSETS_URL ?>back/vendor/libs/cleave-zen/cleave-zen.js"></script>
<script src="<?= ASSETS_URL ?>back/vendor/libs/select2/select2.js"></script>
<!-- Form Validation -->
<script src="<?= ASSETS_URL ?>back/vendor/libs/@form-validation/popular.js"></script>
<script src="<?= ASSETS_URL ?>back/vendor/libs/@form-validation/bootstrap5.js"></script>
<script src="<?= ASSETS_URL ?>back/vendor/libs/@form-validation/auto-focus.js"></script>
<script src="<?= ASSETS_URL ?>back/vendor/libs/bs-stepper/bs-stepper.js"></script>
<!-- Editor -->
<script src="<?= ASSETS_URL ?>back/vendor/libs/quill/katex.js"></script>
<script src="<?= ASSETS_URL ?>back/vendor/libs/highlight/highlight.js"></script>
<script src="<?= ASSETS_URL ?>back/vendor/libs/quill/quill.js"></script>

<!-- Main JS -->
<script src="<?= ASSETS_URL ?>back/js/main.js"></script>


<?php if (!empty($_REQUEST) && $_REQUEST["url"] == "Dashboard"): ?>
    <!-- Page JS -->
    <script src="<?= ASSETS_URL ?>back/js/app-logistics-dashboard.js"></script>
<?php else: ?>
    <!-- Page JS -->
    <script src="<?= ASSETS_URL ?>back/js/tables-datatables-basic.js?v=<?= time() ?>"></script>
    <script src="<?= ASSETS_URL ?>back/js/modal-edit-user.js"></script>
    <script src="<?= ASSETS_URL ?>back/js/forms-editors.js?v=<?= time() ?>"></script>
<?php endif; ?>

</body>

</html>