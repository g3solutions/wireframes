<script type="text/javascript">
	$(document).ready(function () {

		$(".sortable").sortable({
			connectWith: ".sortable",
			handle: ".for-grabbing",
			cursor: "",
		});

		// $(".placeholder-add").hover(
		// 	function () {
		// 		$(this).show();
		// 	}, 
		// 	function () {
		// 		$(this).hide();
		// 	}
		// );

	});
</script>

<style>
	.style-view-tree div.card {
	  width: fit-content;
	  margin: 2px 0px;
	}

	.style-view-tree ul.sortable {
	  list-style-type: none;
	  padding-inline-start: 30px;
	}

	.style-view-tree li div.card-header {
	  padding: 0.5em 0.7em 0.5em 1em;
	}

	.style-view-tree li.list-endmarker {
		width: 100%; 
		text-align: center; 
		border: 1px solid #ccc; 
		line-height: 0.7em;
		margin: 4px 0 4px; 
	}
	.style-view-tree li.list-endmarker span { 
		background: #fff; 
		padding: 0 10px; 
		color: #ccc;
		font-size: 0.9em;
	}

	.style-view-tree li.placeholder-add {
		width: 100%; 
		text-align: right; 
		border-bottom: 1px solid #ccc; 
		line-height: 0.1em;
		margin: 2px 0 7px; 
		/*display: none;*/
	}
	.style-view-tree li.placeholder-add span {
		width: 100%; 
		text-align: right; 
		border-bottom: 1px solid #ccc; 
		line-height: 0.1em;
		margin: 2px 0 7px; 
		/*display: none;*/
	}

	.style-view-tree span.for-grabbing {
		float: left;
		color: #ccc;
	    margin-top: -7px;
	    margin-left: -14px;
	    padding-right: 7px;
    }

	.style-form span.for-grabbing {
		float: left;
		color: #ccc;
	    margin-bottom: -14px;
	    margin-left: -1px;
	    padding-right: 7px;
	}

</style>

<div class="card style-view-tree">
	<div class="card-header">
		<h5>Tree - Initialize Bills v1.0.0</h5>
	</div>
	<div class="card-body">

		<?php require 'views/nodes/nested_list.php' ?>

	</div>
</div>