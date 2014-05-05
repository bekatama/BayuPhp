<?php $roleID =  $_SESSION['valid_role_id']; /*untuk validasi nav bar*/ ?>
<span class="jslist">
	<script type="text/javascript" src="assets/js/plugins/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/jquery-ui-1.10.4.js"></script>
	<script type="text/javascript" src="assets/js/plugins/jquery.cookie.js"></script>
	<script type="text/javascript" src="assets/js/plugins/jquery.hotkeys.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/jquery.jgrowl.js"></script>
	<script type="text/javascript" src="assets/js/plugins/jquery.slimscroll.js"></script>
	<script type="text/javascript" src="assets/js/plugins/jquery.validate.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/jquery.alerts.js"></script>
	<script type="text/javascript" src="assets/js/plugins/jquery.bxSlider.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/jquery.autogrow-textarea.js"></script>
	<script type="text/javascript" src="assets/js/plugins/jquery.flot.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/jquery.flot.time.js"></script>
	<script type="text/javascript" src="assets/js/plugins/jquery.dataTables.min.js"></script>

	<script type="text/javascript" src="assets/js/plugins/chosen.jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/bs.pop.js"></script>

	<script type="text/javascript" src="assets/js/custom/regexValidator.min.js"></script>
	
	<script type="text/javascript" src="assets/js/constant.js"></script>
	<script type="text/javascript" src="assets/js/app.js"></script>
	
	<?php if($roleID == 1){ ?>
			<script type="text/javascript" src="assets/js/custom/fungsi-admin.js"></script>
	<?php }elseif ($roleID == 2){ ?> 
			<script type="text/javascript" src="assets/js/custom/fungsi-op.js"></script>
	<?php } elseif ($roleID == 3) { ?>
			<script type="text/javascript" src="assets/js/custom/fungsi-keu.js"></script>
	<?php } elseif ($roleID == 4) { ?>
			<script type="text/javascript" src="assets/js/custom/fungsi-hr.js"></script>
	<?php } elseif ($roleID == 5) { ?>
			<script type="text/javascript" src="assets/js/custom/fungsi-gd.js"></script>
	<?php } elseif ($roleID == 6) { ?>
			<script type="text/javascript" src="assets/js/custom/fungsi-rk.js"></script>
	<?php } elseif ($roleID == 7) { ?>
			<script type="text/javascript" src="assets/js/custom/fungsi-ow.js"></script>
	<?php } ?>
	<script type="text/javascript" src="assets/js/custom/terbilang.js"></script>
	<script type="text/javascript" src="assets/js/custom/numericOnly.min.js"></script>
	<!-- <script type="text/javascript" src="assets/js/custom/charts.js"></script> -->
	<!--
	<script type="text/javascript" src="assets/js/plugins/jquery.ui.datepicker-id.js"></script>	
	<script type="text/javascript" src="assets/js/plugins/jquery.ui.datepicker.js"></script>
	<script type="text/javascript" src="assets/js/plugins/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/jquery-ui.js"></script>
	<script type="text/javascript" src="assets/js/plugins/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/jquery.tools.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/jquery-ui-1.10.3.custom.min.js"></script>
	-->
</span>

