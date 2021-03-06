var Report = function(){
	var reportlist = function(){
		var dataArr = {};
        var columnWidth = {};
        var columnWidth = {"width": "20%"};               
        var arrList = {
            'tableID': '#datatableServices',
            'ajaxURL': baseurl + "reportajaxAction",
            'ajaxAction': 'getReportList',
            'postData': dataArr,
            'hideColumnList': [],
            'noSearchApply': [0],
            'noSortingApply': [0],
            'defaultSortColumn': 0,
            'defaultSortOrder': 'desc',
            'setColumnWidth': columnWidth
        };
		getDataTable(arrList);

		$(document).on('click','.delete',function(){
            var id=$(this).attr('data_value');

            swal({
                  title: "Are you sure you want to delete service ?",                
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#DD6B55",
                  confirmButtonText: "Yes, delete it!",
                  cancelButtonText: "No, cancel it!",
                  closeOnConfirm: false,
                   },
                  function (isConfirm) {
                      if (isConfirm) {
                          
                           window.location=baseurl+"deletereport/"+id;

                      } 
                  });
        }); 
		
	}

	var validateReport = function(){
		var form = $('#reportform');
        var rules = {
            fullname: {required: true},
            detail_line_1: {required: true},
            detail_line_2: {required: true},
            licence_no: {required: true},
            expriry_date: {required: true},
            iiisla_no: {required: true},
            iiv_no: {required: true},
            ce_a_no: {required: true},
            address_1: {required: true},
            city: {required: true},
            phone_fax: {required: true},
            email: {required: true,email:true},
            reference_no: {required: true},
            date: {required: true},
            to: {required: true},
            inspection_date: {required: true},
            inspected_at: {required: true},
            inspected_at_stockyard: {required: true},
            inspection_time: {required: true},
            registration_no: {required: true},
            registred_owner_name_add: {required: true},
            proposed_owner_name_add: {required: true},
            engine_no: {required: true},
            chassis_no: {required: true},
            color: {required: true},
            odo_meter_reading: {required: true},
            owner_serial_number: {required: true},
            class_of_vehical: {required: true},
            nanufacture: {required: true},
            model: {required: true},
            fuel: {required: true},
            month_year_manufactureing: {required: true},
            date_of_registration: {required: true},
            rc: {required: true},
            reregistered: {required: true},
            seized: {required: true},
            con_engine: {required: true},
            con_light_electrical: {required: true},
            con_cabin: {required: true},
            con_chassis: {required: true},
            con_battery: {required: true},
            con_body_condition: {required: true},
            con_tyre_details: {required: true},
            con_paint: {required: true},
            con_front: {required: true},
            con_suspension: {required: true},
            con_center: {required: true},
            con_rear: {required: true},
            con_fr_bumper: {required: true},
            con_cowl_assy: {required: true},
            con_cowl_panel: {required: true},
            con_panel_lh: {required: true},
            con_panel_rh: {required: true},
            con_ws_gkasses: {required: true},
            con_dashboeard: {required: true},
            con_bonnet_centere: {required: true},
            con_cabin_lhs: {required: true},
            con_cabin_rhs: {required: true},
            con_cabin_top: {required: true},
            con_chassis_frame: {required: true},
            con_silencer: {required: true},
            con_manifold: {required: true},
            con_engine_assy: {required: true},
            con_fip: {required: true},
            con_air_cleaner: {required: true},
            con_radioter: {required: true},
            con_hoses: {required: true},
            con_fuel_supply: {required: true},
            con_fuel_tank: {required: true},
            con_pipe_lines: {required: true},
            con_fr_axle: {required: true},
            con_rr_axle: {required: true},
            con_rhs_head_lamp: {required: true},
            con_lhs_head_lamp: {required: true},
            con_tail_cluster: {required: true},
            con_battery_make: {required: true},
            con_battery_condition: {required: true},
            con_transmission: {required: true},
            con_gear_box: {required: true},
            con_propeller_shft: {required: true},
            con_rear_housing: {required: true},
            con_brake_padel: {required: true},
            con_brake_booster: {required: true},
            con_brake_pipes: {required: true},
            con_air_cyl: {required: true},
            con_governer: {required: true},
            con_steering_wheel: {required: true},
            con_steering_box: {required: true},
            con_stg_column: {required: true},
            con_stg_linkages: {required: true},
            con_fr_suspension: {required: true},
            con_rr_suspension: {required: true},
            con_lhs_wing: {required: true},
            con_rhs_wing: {required: true},
            con_tail_gate: {required: true},
            con_floor: {required: true},
            con_wheel_discs: {required: true},
            con_fr_rhs_tyre_make: {required: true},
            con_fr_lhs_tyre_make: {required: true},
            con_rr_rhs_tyre_make: {required: true},
            con_rr_lhs_tyre_take: {required: true},
            con_stepney: {required: true},
            con_record_verify: {required: true},
            acc_audio: {required: true},
            acc_air_conditioner: {required: true},
            acc_Upholstery: {required: true},
            acc_Power_Steering: {required: true},
            acc_Power_Window: {required: true},
            acc_Central_Locking: {required: true},
            acc_Demister: {required: true},
            acc_Alloy_Wheel: {required: true},
            acc_Crash_Guard: {required: true},
            acc_Horn: {required: true},
            acc_Mist_Lamp: {required: true},
            acc_Rear_Wiper: {required: true},
            acc_Sun_C_Film: {required: true},
            acc_Spoiler: {required: true},
            acc_Gas_kit: {required: true},
            acc_Carrier: {required: true},
            acc_Working_condition: {required: true},
            rem_Insurance_Details: {required: true},
            rem_Policy_NO: {required: true},
            rem_Up_to: {required: true},
            rem_IDV: {required: true},
            rem_Accidents: {required: true},
            rem_major_repairs_undertaken: {required: true},
            acc_Estimated_life_vehicle: {required: true},
            rem_Estimated_expenses_involved: {required: true},
            rem_market_value: {required: true},
            rem_pencil_chassis_no: {required: true},
           
        };
        
        handleFormValidate(form, rules, function (form) {
            handleAjaxFormSubmit(form, true);
        });
	}
	return{
		init:function(){
			reportlist();
		},
		addreport:function(){
			validateReport();
		},
		editreport:function(){
			validateReport();
		}
	}
}();