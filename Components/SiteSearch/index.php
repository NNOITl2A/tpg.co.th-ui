<section id="search-box" class="search-box">
	
	<div class="">

		<div class="filter-wrap">
			<nav class="filter-tab">
				<ul class="nav">
					<li class="nav-item active"><a href="#" class="nav-link"><i class="fa fa-home mr-1"></i><span>SEARCH PROPERTIES</span></a></li>
					<li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-key mr-1"></i><span>SEARCH BY CODE</span></a></li>
				</ul>
			</nav>

			<style type="text/css">
				
				.search-box-dropdown{
					border-width: 0;
					border-radius: 3px;
					border-radius: 3px;
					padding-top: 3px;
					padding-bottom: 3px;
    				box-shadow: 0 3px 8px rgba(0,0,0,.3), 0px 0px 13px 0px rgba(82, 63, 105, 0.1);
				}

				.search-box-dropdown:before {
					content: '';
					position: absolute;
					left: 14px;
					bottom: 100%;
					pointer-events: none;
				    border-left: 11px solid transparent;
				    border-right: 11px solid transparent;
				    border-bottom: 11px solid #fff;
				}
				.search-box-dropdown .dropdown-item{
					cursor: default;
					padding: 6px 16px;
				}
				.search-box-dropdown .dropdown-item .title{
					font-weight: 600;
					line-height: 1
				}
				.search-box-dropdown .dropdown-item .category{
					font-weight: 200;
					line-height: 1;
					margin-top: 3px
				}
				.dropdown-menu .dropdown-item:hover{
					background-color: #f7941e;
					color: #fff
				}
				
				.search-box-dropdown input[type=checkbox],
				.search-box-dropdown input[type=checkbox]:before,
				.search-box-dropdown input[type=checkbox]:after{
					border-radius: 50%
				}
				.search-box-dropdown input[type=checkbox]:after{
					content: '';
				}
				.search-box-dropdown input[type=checkbox]:checked::after{
					top: 4px;
					left: 4px;
					right: 4px;
					bottom: 4px
				}
				.search-box-dropdown.check .dropdown-item{
					padding: 0
				}
				.search-box-dropdown.check .dropdown-item label{
					display: block;
					padding: 4px 12px
				}

				.search-box .input.button{
					padding-top: 17px;
    				padding-bottom: 7px;
    				height: 48px;
				}
				.search-box .input .label, .search-box .input .value{
					color: #000
				}
				.search-box .input .label{
					top: 16px;
					position: absolute;
					
					-webkit-transition: all cubic-bezier(.165, .84, .44, 1) .25s;
    				transition: all cubic-bezier(.165, .84, .44, 1) .25s;
				}
				.search-box .input.dirty .label{
					top: 9px;
					font-size: 12px;
				}
				.search-box .input .value{
					font-weight: 600;
					white-space: nowrap;
					display: block;
					opacity: 0;
					overflow: hidden;
				    text-overflow: ellipsis;
				    white-space: nowrap;
				    -webkit-transition: opacity cubic-bezier(.165, .84, .44, 1) .25s;
    				transition: opacity cubic-bezier(.165, .84, .44, 1) .25s;
				}
				.search-box .input.dirty .value{
					opacity: 1
				}
				
			</style>
			<div class="row no-gutters filter-box">

				<div class="col filter has-icon filter-search">
					<i class="filter-icon icon-search"></i>
					<input class="input" type="" name="where" placeholder="Search by location, station, condo name or keyword?" maxlength="128" autocomplete="off">

					<ul class="search-box-dropdown dropdown-menu" style="min-height: 100px;min-width: 400px">
						<!-- <li class="dropdown-item">
							<div class="title">Nichada Mansion</div>
							<div class="category">Bangkok, Apartment in Nichada Thani</div>
						</li>

						<li class="dropdown-item">
							<div class="title">Nichada Mansion</div>
							<div class="category">Bangkok, Apartment in Nichada Thani</div>
						</li> -->
						
					</ul>
				</div>

				<div class="col-auto filter has-icon filter-lease-type" style="width: 150px">
					<i class="filter-icon icon-shopping-list"></i>
					<div class="input button dirty">
						<label class="label">Lease Type</label>
						<div class="value">For Rent</div>
					</div>
					<!-- <input class="input" type="" name="where" placeholder="Lease Type" maxlength="128" autocomplete="off"> -->

					<ul class="search-box-dropdown dropdown-menu check">
						<li class="dropdown-item"><label class="radio"><input type="radio" name="lease" checked data-action="lease" /><span>For Rent</span></label></li>
						<li class="dropdown-item"><label class="radio"><input type="radio" name="lease"  data-action="lease"/><span>For Sale</span></label></li>
						
					</ul>
				</div>

				<div class="col-auto filter filter-property-type has-icon" style="width: 200px">
					<i class="filter-icon icon-shopping-list"></i>
					<!-- <input class="input" type="" name="where" placeholder="Property Type" maxlength="128" autocomplete="off"> -->

					<div class="input button">
						<label class="label">Property Type</label>
						<div class="value"></div>
					</div>


					<ul class="search-box-dropdown dropdown-menu check">
						<li class="dropdown-item"><label class="checkbox"><input type="checkbox" name="type[]" data-action="type" value="1" /><span>Apartment</span></label></li>
						<li class="dropdown-item"><label class="checkbox"><input type="checkbox" name="type[]" data-action="type" value="2" /><span>House</span></label></li>
						<li class="dropdown-item"><label class="checkbox"><input type="checkbox" name="type[]" data-action="type" value="3" /><span>Penthouse</span></label></li>
						<li class="dropdown-item"><label class="checkbox"><input type="checkbox" name="type[]" data-action="type" value="4"/><span>Townhouse</span></label></li>
						<li class="dropdown-item"><label class="checkbox"><input type="checkbox" name="type[]" data-action="type" value="5" /><span>Condo</span></label></li>
						
					</ul>
				</div>

				<!-- <div class="col-auto filter  has-icon">
					<i class="filter-icon icon-placeholder"></i>
					<input class="input" type="" name="where" placeholder="Zone" maxlength="128" autocomplete="off">
				</div> -->

				<div class="filter col-auto">
					<button type="submit" class="btn btn-submit input">Submit</button>
				</div>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript">
	
	

	$(document).mousedown(function(evt) {
		
		if( $(evt.target).parents('.filter-property-type').length===0 ){
			$('.filter-property-type').find('.search-box-dropdown').hide(1);
		}
		

		if( $(evt.target).parents('.filter-lease-type').length===0 ){
			$('.filter-lease-type').find('.search-box-dropdown').hide(1);
		}


		if( $(evt.target).parents('.filter-search').length===0 ){
			$('.filter-search').find('.search-box-dropdown').hide('fast');
		}
	});


	$('.filter-lease-type, .filter-property-type').find('.input').click(function() {
		$(this).parent().find('.search-box-dropdown').show(1);
	});


	$('.filter-lease-type, .filter-property-type').find('[data-action]').change(function() {
		
		var textTypes = '';

		var filter = $(this).closest('.filter');
		var input = filter.find('.input');

		$.each(filter.find('[data-action]:checked'), function(index, el) {

			textTypes += textTypes===''? '':', ';
			textTypes += $(this).next().text();
		});

		input.toggleClass('dirty', textTypes!='');
		input.find('.value').text( textTypes ); 
	});


	$('.filter-search').find('.input').click(function() {
		
		$('.filter-search').find('.search-box-dropdown').show('fast');
	});
</script>