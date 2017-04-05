<?php include('includes/admin_header.php');?>

<div class="container">
	<div class="row">
		<div class="col-md-3">
			<?php include('includes/dashboard_sidebar.php');?>
		</div>
		<div class="col-md-9">
			<?php $attributes = array('class'=>'form-horizontal');
			echo form_open('admin/insertProduct/insertData',$attributes);
			?>
			<fieldset>
				<legend><h2 class="text-center">Insert Prodect</h2></legend>
				<div class="form-group">
					<label for="productTitle" class="col-lg-2 control-label">Product Title</label>
					<div class="col-lg-5">
						<input name="productTitle" type="text" class="form-control" id="productTitle" placeholder="Please Compose">
					</div>
					<div class="col-lg-5">
						error
					</div>
				</div>
				<div class="form-group">
					<label for="productCategory" class="col-lg-2 control-label">Product Category</label>
					<div class="col-lg-5">
						<select class="form-control" name="productCategory" id="productCategory">
							<option selected="selectet">Select Category</option>
							<option value="0">Men</option>
							<option value="0">Ladies</option>
							<option value="0">Child</option>
						</select>
					</div>
					<div class="col-lg-5">
						error
					</div>
				</div>
				<div class="form-group">
					<label for="productBrand" class="col-lg-2 control-label">Product Brand</label>
					<div class="col-lg-5">
						<select class="form-control" name="productBrand" id="productBrand">
							<option>Select a Brand</option>
							<option value="1">HP</option>
							<option value="2">DELL</option>
							<option value="3">LG</option>
							<option value="4">Samsung</option>
							<option value="5">Sony</option>
							<option value="6">Toshiba</option>
						</select>
						<span class="help-block">A longer block </span>
					</div>
					<div class="col-lg-5">
						error
					</div>
				</div>
				<div class="form-group">
					<label for="productType" class="col-lg-2 control-label">Product Type</label>
					<div class="col-lg-5">
						<select class="form-control" name="productType" id="productType">
							<option selected="selectet">Select Category</option>
							<option value="0">Men</option>
							<option value="0">Ladies</option>
							<option value="0">Child</option>
						</select>
					</div>
					<div class="col-lg-5">
						error
					</div>
				</div>
				<div class="form-group">
					<label for="productImage" class="col-lg-2 control-label">Product Image</label>
					<div class="col-lg-5">
						<input name="productImage" type="file" class="form-control" id="productImage" placeholder="Please Compose">
					</div>
					<div class="col-lg-5">
						error
					</div>
				</div>
				<div class="form-group">
					<label for="productPrice" class="col-lg-2 control-label">Product Price</label>
					<div class="col-lg-5">
						<input name="productPrice" type="text" class="form-control" id="productPrice" placeholder="Please Compose">
					</div>
					<div class="col-lg-5">
						error
					</div>
				</div>
				<div class="form-group">
					<label for="productStock" class="col-lg-2 control-label">Product Stock</label>
					<div class="col-lg-5">
						<input name="productStock" type="text" class="form-control" id="productStock" placeholder="Please Compose">
					</div>
					<div class="col-lg-5">
						error
					</div>
				</div>
				<div class="form-group">
					<label for="productDesciption" class="col-lg-2 control-label">Product Description</label>
					<div class="col-lg-5">
						<textarea class="form-control" rows="3" id="productDesciption"  placeholder="Please Compose"></textarea>
						<span class="help-block">A longer block </span>
					</div>
					<div class="col-lg-5">
						error
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-10 col-lg-offset-2">
						<button type="reset" class="btn btn-default">Cancel</button>
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
			</fieldset>
			<?= form_close(); ?>
		</div>
	</div>
</div>

<?php include('includes/admin_footer.php');?>