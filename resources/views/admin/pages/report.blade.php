@extends('admin.mainlayouts.index')
@section('title','Service-list')
@section('content')

<div class="wrapper wrapper-content animated fadeInRight">

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Service Form</h5>
                    
                </div>
                <div class="ibox-content">
                    <form method="post" class="form-horizontal" id="reportform" action="{{ url('/exclsview') }}">
                        @csrf
                        
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Full Name</label>
                        	<div class="col-sm-10">
                        		<input type="text" name="fullname" class="form-control">
                        	</div>
                        </div> 
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Details Line 1</label>
                        	<div class="col-sm-10">
                        		<input type="text" name="detail_line_1" class="form-control">
                        	</div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Details Line 2</label>
                        	<div class="col-sm-10">
                        		<input type="text" name="detail_line_2" class="form-control">
                        	</div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Licence No</label>
                        	<div class="col-sm-3">
                        		<input type="text" name="licence_no" class="form-control">
                        	</div>
                        	<label class="col-sm-2 control-label">Expiry Date</label>
                        	<div class="col-sm-3">
                        		<input type="date" name="expriry_date" class="form-control">
                        	</div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">IIISLA Membership No</label>
                        	<div class="col-sm-10">
                        		<input type="text" name="iiisla_no" class="form-control">
                        	</div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">IIV Membership No</label>
                        	<div class="col-sm-10">
                        		<input type="text" name="iiv_no" class="form-control">
                        	</div>
                        </div>
						<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">CE & A Membership No</label>
                        	<div class="col-sm-10">
                        		<input type="text" name="ce_a_no" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Address Line 1</label>
                        	<div class="col-sm-10">
                        		<input type="text" name="address_1" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Address Line 2</label>
                        	<div class="col-sm-10">
                        		<input type="text" name="address_2" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">City</label>
                        	<div class="col-sm-10">
                        		<input type="text" name="city" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Phone/Fax</label>
                        	<div class="col-sm-10">
                        		<input type="text" name="phone_fax" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Email</label>
                        	<div class="col-sm-10">
                        		<input type="email" name="email" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Reference No</label>
                        	<div class="col-sm-10">
                        		<input type="text" name="reference_no" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Date</label>
                        	<div class="col-sm-10">
                        		<input type="date" name="date" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">To</label>
                        	<div class="col-sm-10">
                        		<input type="text" name="to" class="form-control">
                    		</div>
                    	</div>
                    	<div class="ibox-title">
		                    <h5>Inspection Details</h5>
	                   	<div>
	                   	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Inspection Date</label>
                        	<div class="col-sm-10">
                        		<input type="date" name="inspection_date" class="form-control">
                    		</div>
                    	</div>
                    	
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Inspected At</label>
                        	<div class="col-sm-10">
                        		<input type="text" name="inspected_at" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Inspected At Stockyard Or Garage</label>
                        	<div class="col-sm-10">
                        		<input type="text" name="inspected_at_stockyard" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Inspection Time</label>
                        	<div class="col-sm-10">
                        		<input type="time" name="inspection_time" class="form-control">
                    		</div>
                    	</div>
                    	<div class="ibox-title">
		                    <h5>Registration Details</h5>
	                   	<div>
	                   	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Registration Number</label>
                        	<div class="col-sm-10">
                        		<input type="text" name="registration_no" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Registered Owner Name & Address</label>
                        	<div class="col-sm-10">
                        		<input type="text" name="registred_owner_name_add" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Proposed Owner Name & Address</label>
                        	<div class="col-sm-10">
                        		<input type="text" name="proposed_owner_name_add" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Engine Number</label>
                        	<div class="col-sm-10">
                        		<input type="text" name="engine_no" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Chassis Number</label>
                        	<div class="col-sm-10">
                        		<input type="text" name="chassis_no" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Color</label>
                        	<div class="col-sm-10">
                        		<input type="text" name="color" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Odo Meter Reading ( kms )</label>
                        	<div class="col-sm-10">
                        		<input type="text" name="odo_meter_reading" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Hours Reading if applicable</label>
                        	<div class="col-sm-10">
                        		<input type="text" name="hours_reading" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Owner Serial Number</label>
                        	<div class="col-sm-10">
                        		<input type="text" name="owner_serial_number" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Hypothecation details (if any)</label>
                        	<div class="col-sm-10">
                        		<input type="text" name="hypothecation_details" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Class of Vehicle & Type of body</label>
                        	<div class="col-sm-10">
                        		<input type="text" name="class_of_vehical" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Manufacture</label>
                        	<div class="col-sm-10">
                        		<input type="text" name="nanufacture" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Model</label>
                        	<div class="col-sm-10">
                        		<input type="text" name="model" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Type of Fuel</label>
                        	<div class="col-sm-10">
                        		<input type="text" name="fuel" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Month & Year of Manufacturing</label>
                        	<div class="col-sm-10">
                        		<input type="text" name="month_year_manufactureing" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Date of Registration</label>
                        	<div class="col-sm-10">
                        		<input type="text" name="date_of_registration" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-6 control-label">(in case of re-registration please write the date of registration and the fact that it's re-registered)</label>
                        	<div class="col-sm-6">
                        		<input type="text" name="re_registration_no" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-6 control-label">(in case of reassigned number please write the old number also)</label>
                        	<div class="col-sm-6">
                        		<input type="text" name="reassigned_no" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Tax Paid Upto</label>
                        	<div class="col-sm-10">
                        		<input type="text" name="tax_paid_upto" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-4 control-label">In Case Of Commercial Vehicles, Fitness Valid Upto</label>
                        	<div class="col-sm-8">
                        		<input type="date" name="vehicle_fitness" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-4 control-label">In Case Of Commercial Vehicles, Permit Valid Upto</label>
                        	<div class="col-sm-8">
                        		<input type="date" name="vehicle_permit" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Duplicate RC Or Original RC</label>
                        	<div class="col-sm-10">
                        		<input type="text" name="rc" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-4 control-label">Is the vehicle running condition or standing condition</label>
                        	<div class="col-sm-8">
                        		<input type="text" name="condition" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Is it re-registered vehicle</label>
                        	<div class="col-sm-10">
                        		<input type="text" name="reregistered" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Is This a Seized Vehicle Of Financier</label>
                        	<div class="col-sm-10">
                        		<input type="text" name="seized" class="form-control">
                    		</div>
                    	</div>
                    	<div class="ibox-title">
		                    <h5>CONDITION</h5>
	                   	<div>
	                   	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Engine</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_engine" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Lights and Electrical</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_light_electrical" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Cabin</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_cabin" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Chassis</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_chassis" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Battery </label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_battery" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Body Condition</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_body_condition" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Tyre Details </label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_tyre_details" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Paint(Internal/External)</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_paint" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Front</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_front" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Suspension</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_suspension" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Centre</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_center" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Rear</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_rear" class="form-control">
                    		</div>
                    	</div>
                    	
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Tipper</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_tipper" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Fr. Bumper </label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_fr_bumper" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-12 control-label" style="text-align: center;">Cowl/Show/FES</label>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Cowl Assy/FES Assy</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_cowl_assy" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Cowl Panel Lh </label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_cowl_panel" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Cowl Panel Lh</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_panel_lh" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Cowl Panel Rh </label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_panel_rh" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">W/S Glasses</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_ws_gkasses" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Dash Board</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_dashboeard" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Bonnet/Center Grill</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_bonnet_centere" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-12 control-label" style="text-align: center;">Cabin /Body Shell </label>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Cabin Lhs Structure</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_cabin_lhs" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Cabin Rhs Structure</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_cabin_rhs" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-2 control-label">Cabin Top</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_cabin_top" class="form-control">
                    		</div>
                    	</div>
						<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-12 control-label" style="text-align: center;">Chassis Frame  </label>
                        </div>
                        <div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-2 control-label">Chassis Frame</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_chassis_frame" class="form-control">
                    		</div>
                    	</div>
						<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-12 control-label" style="text-align: center;">Exhaust System</label>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Silencer</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_silencer" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Manifold</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_manifold" class="form-control">
                    		</div>
                    	</div>
						<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-12 control-label" style="text-align: center;">Engine </label>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Engine Assy</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_engine_assy" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">FIP</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_fip" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-2 control-label">Air Cleaner</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_air_cleaner" class="form-control">
                    		</div>
                    	</div>
						<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-12 control-label" style="text-align: center;">Cooling System </label>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Radiator/Inter Cooler</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_radioter" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Hoses</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_hoses" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-2 control-label">Fuel Supply System</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_fuel_supply" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Fuel Tank</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_fuel_tank" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-2 control-label">All Pipe Lines</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_pipe_lines" class="form-control">
                    		</div>
                    	</div>
						<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-12 control-label" style="text-align: center;">Axle System </label>
                        </div>
                        <div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-2 control-label">Fr Axle</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_fr_axle" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Rr Axle</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_rr_axle" class="form-control">
                    		</div>
                    	</div>
						<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-12 control-label" style="text-align: center;">Electrical System </label>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-2 control-label">Rhs Head Lamp</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_rhs_head_lamp" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Lhs Head Lamp</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_lhs_head_lamp" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-2 control-label">Tail /Cluster Lamp</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_tail_cluster" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Battery Make</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_battery_make" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-2 control-label">Battery Condition</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_battery_condition" class="form-control">
                    		</div>
                    	</div>
						<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-12 control-label" style="text-align: center;">Transmission System </label>
                        </div>
                        <div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-2 control-label">Transmission System</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_transmission" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Gear Box</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_gear_box" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-2 control-label">Propeller Shft</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_propeller_shft" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Rear Housing</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_rear_housing" class="form-control">
                    		</div>
                    	</div>
						<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-12 control-label" style="text-align: center;">Brake System </label>
                        </div>
                        <div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-2 control-label">Brake Pedal</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_brake_padel" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Brake Booster</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_brake_booster" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-2 control-label">Brake Pipes</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_brake_pipes" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Air Cyl</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_air_cyl" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-2 control-label">Governer</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_governer" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-12 control-label" style="text-align: center;">Steering System </label>
                        </div>
                        <div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-2 control-label">Steering Wheel</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_steering_wheel" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Steering Box</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_steering_box" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-2 control-label">Stg. Column</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_stg_column" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Stg. Linkages</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_stg_linkages" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-12 control-label" style="text-align: center;">Suspension System</label>
                        </div>
                        <div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-2 control-label">Fr.Suspension</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_fr_suspension" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Rr.Suspension</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_rr_suspension" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-12 control-label" style="text-align: center;">Load Body - Tipper</label>
                        </div>
                        <div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-2 control-label">Lhs Wing</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_lhs_wing" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Rhs Wing</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_rhs_wing" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-2 control-label">Tail Gate</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_tail_gate" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Floor</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_floor" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-12 control-label" style="text-align: center;">Others</label>
                        </div>
                        <div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-2 control-label">Wheel Discs</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_wheel_discs" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Fr.Rhs Tyre Make</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_fr_rhs_tyre_make" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-2 control-label">Fr.Lhs.Tyre Make</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_fr_lhs_tyre_make" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Rr.Rhs.Tyre Make</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_rr_rhs_tyre_make" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-2 control-label">Rr.Lhs.Tyre Make</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_rr_lhs_tyre_take" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Stepney</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="con_stepney" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-2 control-label">Original Records Verified(Y/N)</label>
                        	<div class="col-sm-10">
                        		<input type="text" name="con_record_verify" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-12 control-label" style="text-align: center;">ACCESSORIES FOUND AT THE TIME OF INSECTION</label>
                        </div>
                        <div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-2 control-label">Audio</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="acc_audio" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Air conditioner</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="acc_air_conditioner" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-2 control-label">Upholstery</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="acc_Upholstery" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Power Steering</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="acc_Power_Steering" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-2 control-label">Power Window</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="acc_Power_Window" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Central Locking</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="acc_Central_Locking" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-2 control-label">Demister</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="acc_Demister" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Alloy Wheel</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="acc_Alloy_Wheel" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-2 control-label">Crash Guard</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="acc_Crash_Guard" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Horn</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="acc_Horn" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-2 control-label">Mist Lamp</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="acc_Mist_Lamp" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Rear Wiper</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="acc_Rear_Wiper" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-2 control-label">Sun C/Film</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="acc_Sun_C_Film" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Spoiler</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="acc_Spoiler" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-2 control-label">Gas kit</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="acc_Gas_kit" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Carrier</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="acc_Carrier" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-2 control-label">Any other</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="acc_Any_other" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-12 control-label" style="text-align: center;">OTHERS</label>
                        </div>
                        <div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-2 control-label">Dedupe from Valuaer data Bsase</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="acc_Dedupe_data_Bsase" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">if dedupe is Neagative, reason for</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="acc_if_dedupe_Neagative" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-4 control-label">If this vehcile is recently inspected by Valuer, reason for valuation</label>
                        	<div class="col-sm-2">
                        		<input type="text" name="acc_if_vehcile_inspected_Valuer" class="form-control">
                    		</div>
                    		<label class="col-sm-3 control-label">is this vehcile migrated from other area</label>
                        	<div class="col-sm-3">
                        		<input type="text" name="acc_is_vehcile_migrated_other_area" class="form-control">
                    		</div>
                    	</div>
						<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-12 control-label" style="text-align: center;">OVERALL CONDITION OF THE VEHICLE</label>
                        </div>
                        <div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-2 control-label">Working condition</label>
                        	<div class="col-sm-10">
                        		<input type="text" name="acc_Working_condition" class="form-control">
                    		</div>
                    	</div>
						<div class="hr-line-dashed"></div>
                        <div class="form-group">
                        	<label class="col-sm-12 control-label" style="text-align: center;">REMARKS</label>
                        </div>
                        <div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-2 control-label">Insurance Details</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="rem_Insurance_Details" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Policy NO</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="rem_Policy_NO:" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-2 control-label">Up to</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="rem_Up_to" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">IDV</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="rem_IDV" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-2 control-label">Accidents (if any)</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="rem_Accidents" class="form-control">
                    		</div>
                    		<label class="col-sm-2 control-label">Any major repairs undertaken</label>
                        	<div class="col-sm-4">
                        		<input type="text" name="rem_major_repairs_undertaken" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-4 control-label">Estimated further life of the vehicle…..years</label>
                        	<div class="col-sm-2">
                        		<input type="text" name="acc_Estimated_life_vehicle" class="form-control">
                    		</div>
                    		<label class="col-sm-3 control-label">Estimated expenses involved to take the vehicle to road</label>
                        	<div class="col-sm-3">
                        		<input type="text" name="rem_Estimated_expenses_involved" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-4 control-label">Market Value as on date of inspection</label>
                        	<div class="col-sm-2">
                        		<input type="text" name="rem_market_value" class="form-control">
                    		</div>
                    	</div>
                    	<div class="hr-line-dashed"></div>
                    	<div class="form-group">
                        	<label class="col-sm-2 control-label">Pencil imprint of Chassis Number</label>
                        	<div class="col-sm-10">
                        		<input type="text" name="rem_pencil_chassis_no" class="form-control">
                    		</div>
                    	</div>


                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-primary" name="submit" type="submit">Add Details</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
